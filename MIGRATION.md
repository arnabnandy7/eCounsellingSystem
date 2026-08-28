# PHP, Turso, and Vercel migration

The application remains PHP-based. Vercel sends dynamic requests through
`api/index.php`, while static assets continue to be served directly.

## Environment

Copy `.env.example` to `.env.local` and provide:

- `TURSO_DATABASE_URL`
- `TURSO_AUTH_TOKEN`

Never commit the populated environment file.

## Database

Apply `Database/turso_schema.sql` to an empty Turso database before running the
application. The original SQL dumps are retained only as migration source data.
After importing those dumps, apply `Database/turso_seed_fixes.sql`. It corrects
the one legacy college-login email that does not match its college record.

The compatibility layer in `includes/turso_mysql_compat.php` lets the existing
pages run while their queries are incrementally converted to parameterized
Turso access. It also translates the two known MySQL-only query forms used by
the application: `TRUNCATE TABLE` and `LIMIT offset,count`.

## Deferred features

Email delivery, persistent PDF storage, and file uploads are intentionally out
of scope for this deployment. Their processing endpoints return HTTP 410, and
legacy generated allotment PDFs are excluded from Vercel deployments. Candidates
can still generate and download allotment PDFs; those files are streamed directly
to the browser and are never written to the server filesystem.

## PHP 8 verification

Run the complete syntax check and live Turso/PDF smoke test with Docker:

```sh
docker run --rm -v "$PWD:/app:ro" -w /app php:8.3-cli sh -lc \
  "find . -path './.git' -prune -o -name '*.php' -print0 | xargs -0 -n1 php -l"
docker run --rm --env-file .env.local -v "$PWD:/app:ro" -w /app \
  php:8.3-cli php -d error_reporting=E_ALL tests/php8_smoke.php
docker run --rm --env-file .env.local -v "$PWD:/app:ro" -w /app \
  php:8.3-cli php -d error_reporting=E_ALL tests/phase2_database_flows.php
docker run --rm --env-file .env.local -v "$PWD:/app:ro" -w /app \
  php:8.3-cli php -d error_reporting=E_ALL tests/phase3_security.php
```
