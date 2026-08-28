-- The legacy college_login dump contains a mismatched email for college 20.
-- The application resolves a college by login email, so align it to the
-- authoritative email in college_details after importing the legacy dumps.
UPDATE college_login
SET email = (
    SELECT email
    FROM college_details
    WHERE college_cuid = college_login.college_id
)
WHERE college_id = 20;

