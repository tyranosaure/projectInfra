-- BEGIN TABLE public.ipadress
DROP TABLE IF EXISTS public.ipadress CASCADE;
BEGIN;

CREATE TABLE IF NOT EXISTS public.ipadress (
	"ipAdressID" bigint NOT NULL,
	username text NOT NULL,
	navigator text NOT NULL,
	"timeRequest" timestamp without time zone NOT NULL,
	PRIMARY KEY("ipAdressID")
);

COMMIT;

-- Table public.ipadress contains no data. No inserts have been genrated.
-- Inserting 0 rows into public.ipadress


-- END TABLE public.ipadress