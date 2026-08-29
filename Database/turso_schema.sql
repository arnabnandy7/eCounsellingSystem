PRAGMA foreign_keys = ON;

CREATE TABLE IF NOT EXISTS app_sessions (
    id TEXT PRIMARY KEY,
    payload TEXT NOT NULL,
    expires_at INTEGER NOT NULL
);

CREATE INDEX IF NOT EXISTS app_sessions_expiry ON app_sessions(expires_at);

CREATE TABLE IF NOT EXISTS auth_attempts (
    identity_hash TEXT PRIMARY KEY,
    failures INTEGER NOT NULL DEFAULT 0,
    last_attempt INTEGER NOT NULL,
    blocked_until INTEGER NOT NULL DEFAULT 0
);

CREATE INDEX IF NOT EXISTS auth_attempts_blocked ON auth_attempts(blocked_until);

CREATE TABLE IF NOT EXISTS admin_login (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    email TEXT NOT NULL UNIQUE,
    name TEXT NOT NULL,
    password TEXT NOT NULL,
    last_login TEXT NOT NULL DEFAULT ''
);

CREATE TABLE IF NOT EXISTS counselling_date (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    event TEXT NOT NULL,
    event_date TEXT NOT NULL DEFAULT ''
);

CREATE TABLE IF NOT EXISTS notice (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    subject TEXT NOT NULL,
    name TEXT NOT NULL DEFAULT '',
    type TEXT NOT NULL DEFAULT '',
    size TEXT NOT NULL DEFAULT '',
    path TEXT NOT NULL DEFAULT '',
    date TEXT NOT NULL DEFAULT ''
);

CREATE TABLE IF NOT EXISTS rank_details (
    rank INTEGER PRIMARY KEY,
    enrolment_no TEXT NOT NULL UNIQUE,
    candidate_name TEXT NOT NULL,
    dob TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS candidate_details (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    candidate_id INTEGER NOT NULL,
    candidate_name TEXT NOT NULL,
    rank INTEGER NOT NULL UNIQUE,
    email TEXT NOT NULL UNIQUE,
    password TEXT NOT NULL,
    phone TEXT NOT NULL DEFAULT '',
    address TEXT NOT NULL DEFAULT '',
    last_login TEXT NOT NULL DEFAULT '',
    FOREIGN KEY (rank) REFERENCES rank_details(rank)
);

CREATE TABLE IF NOT EXISTS candidate_reg_log_check (
    email TEXT PRIMARY KEY,
    password TEXT NOT NULL,
    activation_code TEXT NOT NULL DEFAULT '',
    chk_flg INTEGER NOT NULL DEFAULT 1
);

CREATE TABLE IF NOT EXISTS college_details (
    college_cuid INTEGER PRIMARY KEY,
    college_name TEXT NOT NULL,
    clgtype TEXT NOT NULL,
    university_name TEXT NOT NULL,
    location_address TEXT NOT NULL,
    intake INTEGER NOT NULL,
    seat1 INTEGER NOT NULL,
    seat2 INTEGER NOT NULL,
    phone1 TEXT NOT NULL DEFAULT '',
    phone2 TEXT NOT NULL DEFAULT '',
    website TEXT NOT NULL DEFAULT '',
    email TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS college_login (
    college_id INTEGER PRIMARY KEY,
    clg_uid TEXT NOT NULL UNIQUE,
    email TEXT NOT NULL,
    password TEXT NOT NULL,
    last_login TEXT NOT NULL DEFAULT '',
    FOREIGN KEY (college_id) REFERENCES college_details(college_cuid)
);

CREATE TABLE IF NOT EXISTS candidate_preferences (
    rank INTEGER PRIMARY KEY,
    pref_1 INTEGER NOT NULL,
    pref_2 INTEGER NOT NULL,
    pref_3 INTEGER NOT NULL,
    FOREIGN KEY (rank) REFERENCES rank_details(rank),
    FOREIGN KEY (pref_1) REFERENCES college_details(college_cuid),
    FOREIGN KEY (pref_2) REFERENCES college_details(college_cuid),
    FOREIGN KEY (pref_3) REFERENCES college_details(college_cuid)
);

CREATE TABLE IF NOT EXISTS seat_allotments (
    rank INTEGER PRIMARY KEY,
    allot_clg_id INTEGER NOT NULL DEFAULT 0,
    pref_clg INTEGER NOT NULL DEFAULT 0,
    seqnc_no TEXT NOT NULL DEFAULT '',
    upgrd_sts TEXT NOT NULL DEFAULT '',
    admited TEXT NOT NULL DEFAULT '',
    active TEXT NOT NULL DEFAULT '',
    FOREIGN KEY (rank) REFERENCES rank_details(rank)
);

CREATE TABLE IF NOT EXISTS closingrank (
    id INTEGER PRIMARY KEY,
    instname TEXT NOT NULL,
    opening TEXT NOT NULL,
    closing TEXT NOT NULL
);
