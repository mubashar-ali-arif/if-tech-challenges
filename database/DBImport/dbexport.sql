--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.19
-- Dumped by pg_dump version 9.6.19

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: DATABASE challenge; Type: COMMENT; Schema: -; Owner: -
--

COMMENT ON DATABASE challenge IS 'Create a database to complete the Challenge  1';


--
-- Name: db_schema_challenge; Type: SCHEMA; Schema: -; Owner: -
--

CREATE SCHEMA db_schema_challenge;


--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: -
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: -
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: authors; Type: TABLE; Schema: db_schema_challenge; Owner: -
--

CREATE TABLE db_schema_challenge.authors (
    name character varying(255) NOT NULL,
    country character varying(255) NOT NULL
);


--
-- Name: TABLE authors; Type: COMMENT; Schema: db_schema_challenge; Owner: -
--

COMMENT ON TABLE db_schema_challenge.authors IS 'To store author data. ';


--
-- Name: books; Type: TABLE; Schema: db_schema_challenge; Owner: -
--

CREATE TABLE db_schema_challenge.books (
    name character varying NOT NULL,
    author character varying NOT NULL,
    pages smallint
);


--
-- Name: TABLE books; Type: COMMENT; Schema: db_schema_challenge; Owner: -
--

COMMENT ON TABLE db_schema_challenge.books IS 'To store a book data.';


--
-- Data for Name: authors; Type: TABLE DATA; Schema: db_schema_challenge; Owner: -
--

COPY db_schema_challenge.authors (name, country) FROM stdin;
J. D. Salinger	US
F. Scott. Fitzgerald	US
Jane Austen	UK
Leo Tolstoy	RU
Sun Tzu	CN
Johann Wolfgang von Goethe	DE
Janis Eglitis	LV
\.


--
-- Data for Name: books; Type: TABLE DATA; Schema: db_schema_challenge; Owner: -
--

COPY db_schema_challenge.books (name, author, pages) FROM stdin;
The Catcher in the Rye	J. D. Salinger	300
Nine Stories	J. D. Salinger	200
Franny and Zooey	J. D. Salinger	150
The Great Gatsby	F. Scott. Fitzgerald	400
Tender is the Night	F. Scott. Fitzgerald	500
Pride and Prejudice	Jane Austen	700
The Art of War	Sun Tzu	128
Faust I	Johann Wolfgang von Goethe	300
Faust II	Johann Wolfgang von Goethe	300
\.


--
-- PostgreSQL database dump complete
--

