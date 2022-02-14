-- Database export via SQLPro (https://www.sqlprostudio.com/allapps.html)
-- Exported by ayoubbassou at 14-02-2022 16:21.
-- WARNING: This file may contain descructive statements such as DROPs.
-- Please ensure that you are running the script at the proper location.


-- BEGIN TABLE public.ipadress
DROP TABLE IF EXISTS public.ipadress CASCADE;
BEGIN;

CREATE TABLE IF NOT EXISTS public.ipadress (
	"ipAdressID" bigint DEFAULT nextval('ipadress_sampleid_seq'::regclass) NOT NULL,
	"userID" bigint NOT NULL,
	navigator text NOT NULL,
	"timeRequest" timestamp without time zone NOT NULL,
	"numberTry" integer NOT NULL,
	PRIMARY KEY("ipAdressID")
);

COMMIT;

-- Table public.ipadress contains no data. No inserts have been genrated.
-- Inserting 0 rows into public.ipadress


-- END TABLE public.ipadress

-- BEGIN TABLE public.users
DROP TABLE IF EXISTS public.users CASCADE;
BEGIN;

CREATE TABLE IF NOT EXISTS public.users (
	"userID" bigint DEFAULT nextval('users_sampleid_seq'::regclass) NOT NULL,
	identifiant text NOT NULL,
	PRIMARY KEY("userID")
);

COMMIT;

-- Table public.users contains no data. No inserts have been genrated.
-- Inserting 0 rows into public.users


-- END TABLE public.users

