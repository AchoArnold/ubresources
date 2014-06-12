--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: comments; Type: TABLE; Schema: public; Owner: bepolite; Tablespace: 
--

CREATE TABLE comments (
    id integer NOT NULL,
    author_id integer NOT NULL,
    gist_id integer NOT NULL,
    content character varying(500) NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL
);


ALTER TABLE public.comments OWNER TO bepolite;

--
-- Name: comments_id_seq; Type: SEQUENCE; Schema: public; Owner: bepolite
--

CREATE SEQUENCE comments_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.comments_id_seq OWNER TO bepolite;

--
-- Name: comments_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bepolite
--

ALTER SEQUENCE comments_id_seq OWNED BY comments.id;


--
-- Name: contributions; Type: TABLE; Schema: public; Owner: bepolite; Tablespace: 
--

CREATE TABLE contributions (
    id integer NOT NULL,
    author_id character varying(32),
    content character varying(500) NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL,
    type integer
);


ALTER TABLE public.contributions OWNER TO bepolite;

--
-- Name: contributions_id_seq; Type: SEQUENCE; Schema: public; Owner: bepolite
--

CREATE SEQUENCE contributions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contributions_id_seq OWNER TO bepolite;

--
-- Name: contributions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bepolite
--

ALTER SEQUENCE contributions_id_seq OWNED BY contributions.id;


--
-- Name: course_outlines; Type: TABLE; Schema: public; Owner: bepolite; Tablespace: 
--

CREATE TABLE course_outlines (
    id integer NOT NULL,
    department_id integer NOT NULL,
    level integer NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL,
    status integer NOT NULL,
    credit_value integer NOT NULL,
    course_id integer NOT NULL,
    semester integer
);


ALTER TABLE public.course_outlines OWNER TO bepolite;

--
-- Name: course_outline_id_seq; Type: SEQUENCE; Schema: public; Owner: bepolite
--

CREATE SEQUENCE course_outline_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.course_outline_id_seq OWNER TO bepolite;

--
-- Name: course_outline_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bepolite
--

ALTER SEQUENCE course_outline_id_seq OWNED BY course_outlines.id;


--
-- Name: courses; Type: TABLE; Schema: public; Owner: bepolite; Tablespace: 
--

CREATE TABLE courses (
    id integer NOT NULL,
    department_id integer NOT NULL,
    name character varying(255) NOT NULL,
    short_name character varying(255) NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL
);


ALTER TABLE public.courses OWNER TO bepolite;

--
-- Name: courses_id_seq; Type: SEQUENCE; Schema: public; Owner: bepolite
--

CREATE SEQUENCE courses_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.courses_id_seq OWNER TO bepolite;

--
-- Name: courses_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bepolite
--

ALTER SEQUENCE courses_id_seq OWNED BY courses.id;


--
-- Name: departments; Type: TABLE; Schema: public; Owner: bepolite; Tablespace: 
--

CREATE TABLE departments (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    faculty_id integer NOT NULL
);


ALTER TABLE public.departments OWNER TO bepolite;

--
-- Name: departments_id_seq; Type: SEQUENCE; Schema: public; Owner: bepolite
--

CREATE SEQUENCE departments_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.departments_id_seq OWNER TO bepolite;

--
-- Name: departments_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bepolite
--

ALTER SEQUENCE departments_id_seq OWNED BY departments.id;


--
-- Name: faculties; Type: TABLE; Schema: public; Owner: bepolite; Tablespace: 
--

CREATE TABLE faculties (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    short_name character varying(255) NOT NULL
);


ALTER TABLE public.faculties OWNER TO bepolite;

--
-- Name: faculties_id_seq; Type: SEQUENCE; Schema: public; Owner: bepolite
--

CREATE SEQUENCE faculties_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.faculties_id_seq OWNER TO bepolite;

--
-- Name: faculties_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bepolite
--

ALTER SEQUENCE faculties_id_seq OWNED BY faculties.id;


--
-- Name: gists; Type: TABLE; Schema: public; Owner: bepolite; Tablespace: 
--

CREATE TABLE gists (
    id integer NOT NULL,
    author_id integer NOT NULL,
    title character varying(100) NOT NULL,
    content text NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL,
    gist_uri character varying(255) NOT NULL
);


ALTER TABLE public.gists OWNER TO bepolite;

--
-- Name: gists_id_seq; Type: SEQUENCE; Schema: public; Owner: bepolite
--

CREATE SEQUENCE gists_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.gists_id_seq OWNER TO bepolite;

--
-- Name: gists_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bepolite
--

ALTER SEQUENCE gists_id_seq OWNED BY gists.id;


--
-- Name: help_desks; Type: TABLE; Schema: public; Owner: bepolite; Tablespace: 
--

CREATE TABLE help_desks (
    id integer NOT NULL,
    name character varying(20),
    email character varying(32) NOT NULL,
    telephone character varying,
    content character varying(255) NOT NULL
);


ALTER TABLE public.help_desks OWNER TO bepolite;

--
-- Name: help_desks_id_seq; Type: SEQUENCE; Schema: public; Owner: bepolite
--

CREATE SEQUENCE help_desks_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.help_desks_id_seq OWNER TO bepolite;

--
-- Name: help_desks_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bepolite
--

ALTER SEQUENCE help_desks_id_seq OWNED BY help_desks.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: bepolite; Tablespace: 
--

CREATE TABLE migrations (
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO bepolite;

--
-- Name: past_questions; Type: TABLE; Schema: public; Owner: bepolite; Tablespace: 
--

CREATE TABLE past_questions (
    id integer NOT NULL,
    department_id integer NOT NULL,
    level integer NOT NULL,
    date date NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL,
    course_id integer,
    file_path character varying(225) NOT NULL,
    semester integer,
    type integer NOT NULL
);


ALTER TABLE public.past_questions OWNER TO bepolite;

--
-- Name: past_questions_id_seq; Type: SEQUENCE; Schema: public; Owner: bepolite
--

CREATE SEQUENCE past_questions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.past_questions_id_seq OWNER TO bepolite;

--
-- Name: past_questions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bepolite
--

ALTER SEQUENCE past_questions_id_seq OWNED BY past_questions.id;


--
-- Name: profiles; Type: TABLE; Schema: public; Owner: bepolite; Tablespace: 
--

CREATE TABLE profiles (
    id integer NOT NULL,
    name character varying(255),
    telephone character varying(255),
    faculty_id integer,
    department_id integer,
    level integer,
    sex integer,
    location character varying(255),
    user_id integer NOT NULL
);


ALTER TABLE public.profiles OWNER TO bepolite;

--
-- Name: profiles_id_seq; Type: SEQUENCE; Schema: public; Owner: bepolite
--

CREATE SEQUENCE profiles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.profiles_id_seq OWNER TO bepolite;

--
-- Name: profiles_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bepolite
--

ALTER SEQUENCE profiles_id_seq OWNED BY profiles.id;


--
-- Name: timetables; Type: TABLE; Schema: public; Owner: bepolite; Tablespace: 
--

CREATE TABLE timetables (
    id integer NOT NULL,
    department_id integer NOT NULL,
    level integer NOT NULL,
    day integer NOT NULL,
    start_at time without time zone NOT NULL,
    end_at time without time zone NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL,
    venue character varying(255) NOT NULL,
    course_id integer
);


ALTER TABLE public.timetables OWNER TO bepolite;

--
-- Name: timetables_id_seq; Type: SEQUENCE; Schema: public; Owner: bepolite
--

CREATE SEQUENCE timetables_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.timetables_id_seq OWNER TO bepolite;

--
-- Name: timetables_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bepolite
--

ALTER SEQUENCE timetables_id_seq OWNED BY timetables.id;


--
-- Name: useful_links; Type: TABLE; Schema: public; Owner: bepolite; Tablespace: 
--

CREATE TABLE useful_links (
    id integer NOT NULL,
    author_id integer NOT NULL,
    title character varying(60) NOT NULL,
    content character varying(500) NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL
);


ALTER TABLE public.useful_links OWNER TO bepolite;

--
-- Name: useful_links_id_seq; Type: SEQUENCE; Schema: public; Owner: bepolite
--

CREATE SEQUENCE useful_links_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.useful_links_id_seq OWNER TO bepolite;

--
-- Name: useful_links_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bepolite
--

ALTER SEQUENCE useful_links_id_seq OWNED BY useful_links.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: bepolite; Tablespace: 
--

CREATE TABLE users (
    id integer NOT NULL,
    username character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    recovery_email character varying(255) NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL,
    is_admin boolean DEFAULT false NOT NULL,
    remember_token character varying(100)
);


ALTER TABLE public.users OWNER TO bepolite;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: bepolite
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO bepolite;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bepolite
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY comments ALTER COLUMN id SET DEFAULT nextval('comments_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY contributions ALTER COLUMN id SET DEFAULT nextval('contributions_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY course_outlines ALTER COLUMN id SET DEFAULT nextval('course_outline_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY courses ALTER COLUMN id SET DEFAULT nextval('courses_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY departments ALTER COLUMN id SET DEFAULT nextval('departments_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY faculties ALTER COLUMN id SET DEFAULT nextval('faculties_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY gists ALTER COLUMN id SET DEFAULT nextval('gists_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY help_desks ALTER COLUMN id SET DEFAULT nextval('help_desks_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY past_questions ALTER COLUMN id SET DEFAULT nextval('past_questions_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY profiles ALTER COLUMN id SET DEFAULT nextval('profiles_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY timetables ALTER COLUMN id SET DEFAULT nextval('timetables_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY useful_links ALTER COLUMN id SET DEFAULT nextval('useful_links_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Data for Name: comments; Type: TABLE DATA; Schema: public; Owner: bepolite
--

COPY comments (id, author_id, gist_id, content, created_at, updated_at) FROM stdin;
154	16	1	Boy i enjoy this site. Pretty cool mann	2014-05-05 20:48:39	2014-05-05 20:48:39
157	7	10	how are you?	2014-06-02 09:29:35	2014-06-02 09:29:35
159	7	2	howare 	2014-06-03 23:29:10	2014-06-03 23:29:10
164	10	3	This is good	2014-06-09 07:51:39	2014-06-09 07:51:39
165	10	11	gfgsdfgdfv	2014-06-09 07:53:09	2014-06-09 07:53:09
166	10	11	fwsdvsdv	2014-06-09 07:53:26	2014-06-09 07:53:26
167	10	15	kadsfasdfsd	2014-06-10 20:32:36	2014-06-10 20:32:36
168	10	15	Not bad job	2014-06-10 22:08:56	2014-06-10 22:08:56
\.


--
-- Name: comments_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bepolite
--

SELECT pg_catalog.setval('comments_id_seq', 168, true);


--
-- Data for Name: contributions; Type: TABLE DATA; Schema: public; Owner: bepolite
--

COPY contributions (id, author_id, content, created_at, updated_at, type) FROM stdin;
\.


--
-- Name: contributions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bepolite
--

SELECT pg_catalog.setval('contributions_id_seq', 31, true);


--
-- Name: course_outline_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bepolite
--

SELECT pg_catalog.setval('course_outline_id_seq', 1, false);


--
-- Data for Name: course_outlines; Type: TABLE DATA; Schema: public; Owner: bepolite
--

COPY course_outlines (id, department_id, level, created_at, updated_at, status, credit_value, course_id, semester) FROM stdin;
1	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	6	2
2	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	7	2
3	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	8	2
4	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	9	2
5	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	10	2
6	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	11	2
7	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	12	2
8	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	13	2
10	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	14	1
11	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	15	1
12	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	16	1
13	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	17	1
14	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	18	1
15	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	19	1
16	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	20	1
17	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	21	1
18	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	22	1
19	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	23	1
20	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	24	1
21	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	25	1
22	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	26	1
23	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	27	1
24	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	28	1
25	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	29	2
26	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	30	2
27	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	31	2
28	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	32	2
29	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	33	2
30	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	1	4	34	2
31	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	2	2	35	1
32	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	2	4	36	2
33	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	2	2	37	2
34	1	200	2014-04-01 11:35:05	2014-04-01 11:35:05	2	2	38	2
35	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	2	2	39	1
36	1	300	2014-04-01 11:35:05	2014-04-01 11:35:05	2	2	40	2
\.


--
-- Data for Name: courses; Type: TABLE DATA; Schema: public; Owner: bepolite
--

COPY courses (id, department_id, name, short_name, created_at, updated_at) FROM stdin;
6	1	Database Management Systems	CEF304	2014-04-01 11:35:05	2014-04-01 11:35:05
7	1	Object Oriented Programming	CEF306	2014-04-01 11:35:05	2014-04-01 11:35:05
8	1	Internet Programming and Multimedia	CEF308	2014-04-01 11:35:05	2014-04-01 11:35:05
9	1	Digital Signal Processing	CEF310	2014-04-01 11:35:05	2014-04-01 11:35:05
10	1	Digital Electronics II	CEF312	2014-04-01 11:35:05	2014-04-01 11:35:05
11	1	Law	CEF314	2014-04-01 11:35:05	2014-04-01 11:35:05
14	1	Probability and Statistics	CEF301	2014-04-01 11:35:05	2014-04-01 11:35:05
15	1	Systems Programming	CEF305	2014-04-01 11:35:05	2014-04-01 11:35:05
16	1	Computer Networks and Protocol	CEF307	2014-04-01 11:35:05	2014-04-01 11:35:05
17	1	Database Management Systems	CEF309	2014-04-01 11:35:05	2014-04-01 11:35:05
18	1	Operating Systems	CEF311	2014-04-01 11:35:05	2014-04-01 11:35:05
19	1	Digital Electronics I	CEF313	2014-04-01 11:35:05	2014-04-01 11:35:05
20	1	Accounting	CEF315	2014-04-01 11:35:05	2014-04-01 11:35:05
22	1	Analysis	CEF201	2014-04-01 11:35:05	2014-04-01 11:35:05
23	1	Linear Algebra	CEF203	2014-04-01 11:35:05	2014-04-01 11:35:05
24	1	Introduction to Computing	CEF205	2014-04-01 11:35:05	2014-04-01 11:35:05
25	1	Programming I	CEF207	2014-04-01 11:35:05	2014-04-01 11:35:05
26	1	Discrete Mathematics	CEF209	2014-04-01 11:35:05	2014-04-01 11:35:05
27	1	Boolean Algebra and Logic Circuits	CEF211	2014-04-01 11:35:05	2014-04-01 11:35:05
29	1	Computer Architecture	CEF202	2014-04-01 11:35:05	2014-04-01 11:35:05
30	1	Data Structures and Algorithms	CEF204	2014-04-01 11:35:05	2014-04-01 11:35:05
31	1	Numerical Analysis	CEF206	2014-04-01 11:35:05	2014-04-01 11:35:05
32	1	Information Systems	CEF208	2014-04-01 11:35:05	2014-04-01 11:35:05
35	1	Use of English I	ENG101	2014-04-01 11:35:05	2014-04-01 11:35:05
36	1	Civics and Ethics	CVE100	2014-04-01 11:35:05	2014-04-01 11:35:05
37	1	Use of English II	ENG102	2014-04-01 11:35:05	2014-04-01 11:35:05
38	1	Sports	SPT100	2014-04-01 11:35:05	2014-04-01 11:35:05
39	1	Functional French I	FRE101	2014-04-01 11:35:05	2014-04-01 11:35:05
41	2	Analog Electronics Practicum	EEF202	2014-04-21 21:58:44	2014-04-21 21:58:44
42	2	Analog Electronics II	EEF204	2014-04-21 21:58:44	2014-04-21 21:58:44
43	2	Digital Electronics II	EEF206	2014-04-21 21:58:44	2014-04-21 21:58:44
44	2	Mathematics for Eng. II	EEF208	2014-04-21 21:58:44	2014-04-21 21:58:44
46	2	Control Engineering Instrumentation	EEF212	2014-04-21 21:58:44	2014-04-21 21:58:44
47	2	Computer Programming	EEF214	2014-04-21 21:58:44	2014-04-21 21:58:44
49	2	Power Electronics	EEF302	2014-04-21 21:58:44	2014-04-21 21:58:44
50	2	Basic Telecoms Systems	EEF304	2014-04-21 21:58:44	2014-04-21 21:58:44
51	2	Introduction to Computer Aided Design	EEF306	2014-04-21 21:58:44	2014-04-21 21:58:44
52	2	Systems Simulation	EEF308	2014-04-21 21:58:44	2014-04-21 21:58:44
53	2	Computer Architecture	EEF310	2014-04-21 21:58:44	2014-04-21 21:58:44
54	2	Numerical Methods in Engineering	EEF312	2014-04-21 21:58:44	2014-04-21 21:58:44
21	2	Sequence Control	EEF315	2014-04-21 22:30:18	2014-04-21 22:30:18
33	2	Circuit Analysis	EEF210	2014-04-21 22:30:18	2014-04-21 22:30:18
28	2	Basic Electronics	EEF317	2014-04-21 22:30:18	2014-04-21 22:30:18
34	2	Basic Electronics Practicum	EEF318	2014-04-21 22:30:18	2014-04-21 22:30:18
13	2	Sequence control Lab	EEF314	2014-04-21 22:30:18	2014-04-21 22:30:18
12	2	Systems Engineering	EEF316	2014-04-21 22:30:18	2014-04-21 22:30:18
\.


--
-- Name: courses_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bepolite
--

SELECT pg_catalog.setval('courses_id_seq', 2, true);


--
-- Data for Name: departments; Type: TABLE DATA; Schema: public; Owner: bepolite
--

COPY departments (id, name, faculty_id) FROM stdin;
1	Computer Engineering	1
2	Electrical Engineering	1
3	Computer Engineering	2
\.


--
-- Name: departments_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bepolite
--

SELECT pg_catalog.setval('departments_id_seq', 1, false);


--
-- Data for Name: faculties; Type: TABLE DATA; Schema: public; Owner: bepolite
--

COPY faculties (id, name, short_name) FROM stdin;
1	Engineering and Technology	FET
2	College of Technology	COT
\.


--
-- Name: faculties_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bepolite
--

SELECT pg_catalog.setval('faculties_id_seq', 1, false);


--
-- Data for Name: gists; Type: TABLE DATA; Schema: public; Owner: bepolite
--

COPY gists (id, author_id, title, content, created_at, updated_at, gist_uri) FROM stdin;
1	8	First semester results for Engineering and Technology have been released	<p>The first semester results for the faculty of Engineering and Technology have been released. Please pass by the faculty building  and obtain your results from the secretaries.</b>\r\n\r\nFor those who took french last semester, the results for french are found in the faculty of Arts. There is a general error in the CA marks for French and those in charge of rectifying the error have been notified already.<br/>\r\n\r\nYou can also correct any errors you have in your results by writing a formal complain and filing it to the faculty secretaries together with any documents required to backup your claims.</br>\r\n\r\nYou will also need a national Identity card or your school Identity card for verification before collecting your results.</p>\r\n\r\n<blockquote>Good luck with your results</blockquote>	2014-04-03 11:35:05	2014-04-03 11:35:05	first-semester-results-have-been-released
2	8	General meeting with the administration of FET	<p>All the students in the faculty of engineering and technology are hereby informed that there will be a general meeting with the members of the administration today <strong>Tuesday the 15th April 2014</strong>. </p>\r\n\r\n<p>This memorandum was issued by the dean of the faculty and it can be found at the notice board in front of the faculty building.</p>\r\n\r\n<p>A summary of the venue and time of the meeting for each level is given bellow. Attendance is <strong>mandatory</strong> as stated in the memorandum</p>\r\n\r\n<table class="table table-hover table-bordered">\r\n\r\n<tr>\r\n\r\n <th>Level</>\r\n\r\n <th>Time</>\r\n\r\n <th>Venue</>\r\n\r\n <th>Class After</th>\r\n\r\n</tr>\r\n\r\n<tr>\r\n\r\n <td>200</td>\r\n\r\n <td>01:00 pm</td>\r\n\r\n <td>CR Block I 50 E</td>\r\n\r\n <td>Control Eng Instrumentation</td>\r\n\r\n</tr>\r\n\r\n<tr>\r\n\r\n <td>300</td>\r\n\r\n <td>11:00 am</td>\r\n\r\n <td>U Block A</td>\r\n\r\n <td>Systems Engineering</td>\r\n\r\n</tr>\r\n\r\n<tr>\r\n\r\n <td>400</td>\r\n\r\n <td>10:00 am</td>\r\n\r\n <td>Amphi 150 B</td>\r\n\r\n <td>Computer Control of Systems</td>\r\n\r\n</tr>\r\n\r\n</table>	2014-04-15 05:34:27	2014-04-15 05:34:27	general-meeting-with-the-administration
13	10	Fees for level 400 students going to level 500	<p> All level 400 students in the faculty of Engineering and technology are required to pay their fees an do their medicals for the <strong>2014/2015</strong>  academic year before going for their internship.  </p>\r\n\r\n<em>This is yo be done so as to meet up with the university requirements.</em>\r\n<blockquote>--Dean</blockquote>\r\n	2014-06-09 19:41:28	2014-06-09 19:41:53	fees-for-level-400-students-going-to-level-500
3	9	Object Oriented Programming (CEF306) Assignment	<p>This is the assignment for the <strong>object oriented programming course (CEF306)</strong> in java given by Mr <em>MEGOZE MATHIEU HILAIRE</em>. This assignment is meant for the students of the faculty of Engineering and technology, department of computer engineering level 300. </p>\r\nPlease download the assignment in pdf format by clicking <a href="/packages/assignments/java-assignment.pdf">here</a>. \r\n<blockquote>If you have any worries or proposed solutions, you can mention them by leaving a comment under this post. Thanks</blockquote>	2014-05-09 20:35:40	2014-06-05 19:39:20	object-oriented-programming-assignment
14	10	Dateline for the payment of school fees	<p> All students in the faculty of engineering and technology who have not paid their fees in full are required to do so else they will not be allowed to take the second semester exams. </p> \r\n<p> The <strong>list of students</strong> who have not paid their fees in full can be found at the faculty notice board.</p>	2014-06-09 19:44:39	2014-06-09 19:44:39	dateline-for-the-payment-of-school-fees
15	10	Draft Transcript for faculty of engineering and technology students	<p>All students of the faculty of engineering and technology are required to collect their <strong>new</strong> draft transcript form the faculty secretariat so as to correct any errors they may have in due time. </p>\r\n\r\n<em>This also includes the level 500 students.</em>\r\n\r\n<blockquote>--Dean</blockquote>	2014-06-09 19:48:00	2014-06-09 19:48:00	draft-transcript-for-faculty-of-engineering-and-technology-students
\.


--
-- Name: gists_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bepolite
--

SELECT pg_catalog.setval('gists_id_seq', 15, true);


--
-- Data for Name: help_desks; Type: TABLE DATA; Schema: public; Owner: bepolite
--

COPY help_desks (id, name, email, telephone, content) FROM stdin;
8	hello	arnold@archlinux.info		hello
\.


--
-- Name: help_desks_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bepolite
--

SELECT pg_catalog.setval('help_desks_id_seq', 8, true);


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: bepolite
--

COPY migrations (migration, batch) FROM stdin;
2014_03_09_031456_add_cats_and_breeds_table	1
2014_03_20_103044_create_past_questions_table	2
2014_03_20_110734_create_course_outline_table	3
2014_03_20_143224_create_useful_links_table	3
2014_03_20_144908_create_timetables_table	4
2014_03_20_145612_create_contributions_table	5
2014_03_20_184648_create_help_desks_table	6
2014_03_20_192843_create_gists_table	7
2014_03_24_082602_add_gist_url_to_gists_table	8
2014_03_24_192608_create_comments_table	9
2014_03_26_102258_create_departments_table	10
2014_03_26_103558_create_faculties_table	11
2014_03_26_110037_alter_timetables_table_add_venue_change_course_code	12
2014_03_26_111504_create_course_table	13
2014_04_07_203329_create_users	14
2014_04_11_093314_create_profile_table	15
2014_06_05_192320_add_is_admin_to_users_table	16
2014_06_05_202631_add_remember_token_to_users_table	17
\.


--
-- Data for Name: past_questions; Type: TABLE DATA; Schema: public; Owner: bepolite
--

COPY past_questions (id, department_id, level, date, created_at, updated_at, course_id, file_path, semester, type) FROM stdin;
1	1	200	2013-02-07	2014-04-11 23:14:07	2014-04-11 23:14:07	22	assets/past_questions/1/1/200/1/22	1	2
2	1	200	2013-02-07	2014-04-11 23:14:07	2014-04-11 23:14:07	24	assets/past_questions/1/1/200/1/24	1	2
3	1	200	2012-02-07	2014-04-11 23:14:07	2014-04-11 23:14:07	25	assets/past_questions/1/1/200/1/25	1	1
4	1	200	2013-02-07	2014-04-11 23:14:07	2014-04-11 23:14:07	25	assets/past_questions/1/1/200/1/25	1	11
5	1	200	2013-02-07	2014-04-11 23:14:07	2014-04-11 23:14:07	23	assets/past_questions/1/1/200/1/23	1	2
6	1	200	2013-02-07	2014-04-11 23:14:07	2014-04-11 23:14:07	35	assets/past_questions/1/1/200/1/35	1	2
7	1	200	2013-02-07	2014-04-11 23:14:07	2014-04-11 23:14:07	35	assets/past_questions/1/1/200/1/35	1	2
8	1	200	2013-02-07	2014-04-11 23:14:07	2014-04-11 23:14:07	26	assets/past_questions/1/1/200/1/26	1	1
9	1	200	2013-02-07	2014-04-11 23:18:05	2014-04-11 23:18:05	36	assets/past_questions/1/1/200/2/36	2	1
10	1	200	2013-02-07	2014-04-11 23:18:05	2014-04-11 23:18:05	37	assets/past_questions/1/1/200/2/37	2	1
11	1	200	2013-02-07	2014-04-11 23:18:05	2014-04-11 23:18:05	29	assets/past_questions/1/1/200/2/29	2	1
12	1	200	2013-02-07	2014-04-11 23:18:05	2014-04-11 23:18:05	32	assets/past_questions/1/1/200/1/32	2	1
13	1	200	2013-02-07	2014-04-11 23:18:05	2014-04-11 23:18:05	32	assets/past_questions/1/1/200/1/32	2	2
\.


--
-- Name: past_questions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bepolite
--

SELECT pg_catalog.setval('past_questions_id_seq', 1, true);


--
-- Data for Name: profiles; Type: TABLE DATA; Schema: public; Owner: bepolite
--

COPY profiles (id, name, telephone, faculty_id, department_id, level, sex, location, user_id) FROM stdin;
11	Acho Arnold	23777845163	1	1	200	1	Buea	18
\.


--
-- Name: profiles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bepolite
--

SELECT pg_catalog.setval('profiles_id_seq', 11, true);


--
-- Data for Name: timetables; Type: TABLE DATA; Schema: public; Owner: bepolite
--

COPY timetables (id, department_id, level, day, start_at, end_at, created_at, updated_at, venue, course_id) FROM stdin;
26	1	300	8	11:00:00	13:00:00	2014-03-26 09:37:30	2014-03-26 09:37:30	U Block A	12
29	1	300	5	09:00:00	11:00:00	2014-04-14 11:35:05	2014-04-14 11:35:05	CR Block I 50 A	11
1	1	300	1	07:00:00	09:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	U-Block E	8
3	1	300	1	17:00:00	19:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	U-Block A	7
4	1	300	2	09:00:00	11:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	U-Block A	9
5	1	300	2	13:00:00	15:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	Restau VI	6
6	1	300	2	17:00:00	19:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	U-Block A	7
9	1	300	3	15:00:00	17:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	U-Block A	8
10	1	300	3	17:00:00	19:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	U-Block F	11
11	1	300	4	07:00:00	09:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	U-Block A	6
12	1	300	4	11:00:00	13:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	CR Block II 150 B	10
13	1	300	4	15:00:00	17:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	U-Block A	11
14	1	300	4	17:00:00	19:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	U-Block F	9
15	1	200	1	11:00:00	13:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	CRBLK II 150 B	31
16	1	200	1	17:00:00	19:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	CRBLK I 100 A	29
19	1	200	3	07:00:00	09:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	RESTAU VII	29
20	1	200	3	11:00:00	13:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	CRBLK II 150 B	32
23	1	200	5	07:00:00	09:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	CRBLK II 100 B	31
24	1	200	5	17:00:00	19:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	CRBLK I 50 E	30
25	1	200	6	07:00:00	09:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	CRBLK I 50 E	30
27	1	300	4	09:00:00	11:00:00	2014-03-26 09:37:30	2014-03-26 09:37:30	U Block A	12
30	1	300	5	15:00:00	17:00:00	2014-04-16 12:31:04	2014-04-16 12:31:04	LAB <em>(Group C)</em>	13
28	1	300	1	15:00:00	17:00:00	2014-04-13 09:37:30	2014-04-13 09:37:30	Restau V	40
7	1	300	3	11:00:00	13:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	LAB <em>(Group D)</em>	13
8	1	300	3	13:00:00	15:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	LAB <em>(Group D)</em>	13
31	1	300	5	17:00:00	19:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	LAB <em>(Group C)</em>	13
17	1	200	2	13:00:00	15:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	U-Block E	32
2	1	300	2	11:00:00	13:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	CR Block II 150 B	10
18	1	200	2	15:00:00	17:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	CRBLK II 150 B	36
21	1	200	4	09:00:00	11:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	CRBLK II 150 A	33
22	1	200	5	09:00:00	11:00:00	2014-04-01 11:35:05	2014-04-01 11:35:05	CR Block II 150 B	33
32	1	300	1	09:00:00	11:00:00	2014-04-21 11:35:05	2014-04-21 11:35:05	CR Block II 150 B	9
\.


--
-- Name: timetables_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bepolite
--

SELECT pg_catalog.setval('timetables_id_seq', 4, true);


--
-- Data for Name: useful_links; Type: TABLE DATA; Schema: public; Owner: bepolite
--

COPY useful_links (id, author_id, title, content, created_at, updated_at) FROM stdin;
1	1	Study Advice	The <a href="http://www.reading.ac.uk" target="_blank">University of Reading</a> offers <a href="http://www.reading.ac.uk/internal/studyadvice/Studyresources/Time/sta-distractions.aspx" target="_blank">great study advice</a> on how to manage time and avoid distractions while studying etc	2014-04-01 11:35:05	2014-04-01 11:35:05
2	1	Raise Your GPA	Raise your Grade point average easily by using this <a href="http://www.back2college.com/raisegpa.htm" target="blank">advanced GPA Calculator</a>	2014-04-01 11:35:05	2014-04-01 11:35:05
\.


--
-- Name: useful_links_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bepolite
--

SELECT pg_catalog.setval('useful_links_id_seq', 1, false);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: bepolite
--

COPY users (id, username, password, recovery_email, created_at, updated_at, is_admin, remember_token) FROM stdin;
8	BOSS	$2y$10$Bw3rorDbqFTDSHutlt0GeeDakTaJaVHcRqaIzBk.v5g0H/Bzgsp3q	geraldcham@yahoo.com	2014-04-16 18:24:02	2014-04-16 18:24:02	f	\N
9	d3r1ck	$2y$10$HTsRIb1nbj08l1nwHj0gGux0D/inaZe9y0Hj6G13aigxkfRRSRif.	alangiderick@gmail.com	2014-04-16 20:35:12	2014-04-16 20:35:12	f	\N
11	blissmen	$2y$10$yJf8s42tVIJMqRUFZODv6eaMGcKA0GFrBs0fdIwiTnShkjWLR7U4G	blissmen@fb.com	2014-04-22 21:32:00	2014-04-22 21:32:00	f	\N
12	projectx	$2y$10$o2PK0y02.p.6Y.AqhAZOZ.kheE1QqgOHwNKUXRShTbUMjbhL8LGp.	maestro.rocardho@gmail.com	2014-04-23 10:11:54	2014-04-23 10:11:54	f	\N
13	ivyclare	$2y$10$66FWQ3LfG1d18hot98k6nu7Cg.hidchxWlqQ4xHVEdHEKCUAKvP0e	ivolinengong@gmail.com	2014-04-25 17:23:31	2014-04-25 17:23:31	f	\N
14	vongareth	$2y$10$PmI5Y3nkIvaca0jDHemuVupNRIIe7kjWJpcmSMSarTVV6NO.3WQJm	vongareth@gmail.com	2014-04-26 04:31:47	2014-04-26 04:31:47	f	\N
15	hacker	$2y$10$f4dJ21coBL6hLJY36nEODe0Ky9VYk62N/A8jLOwWSP3WLaPX7Rhpq	hacker@githup.net	2014-05-04 09:21:03	2014-05-04 09:21:03	f	\N
16	dengun	$2y$10$8nLyHsdttcJLqAdCvPh6QewVrn1pkjB17h3c6ts7q6QJnbSe/PxKK	dengun905@yahoo.com	2014-05-05 20:42:25	2014-05-05 20:42:25	f	\N
17	BitterTruth	$2y$10$mVnGn4PQ8vVGio1/WJMFh.lMgWj/Lp0um4pAzQzP2aImaAmF/Ds4W	toniscus@gmail.com	2014-05-10 23:12:10	2014-05-10 23:12:10	f	\N
18	arnold_test	$2y$10$p8GBaSWjJ6cRbLMeAUOYk.4oHzu91Y1yIZK.bu2ZGeAgPawfG66Fi	acho.arnold@live.com	2014-06-05 19:09:40	2014-06-06 21:13:39	f	1FuHyCZQGE15oTwFby5IqqavUvfXZRhcEyUsvRfpZezEBIHbEvqfOgxXJGbx
19	dfdsfdasfsdfsd	$2y$10$Zp6BE2h/5J9//D.QXLLEGuT21/EDo5YKAR6u9zQxR.KICFaT4Qk3S	arnold@live.co	2014-06-09 07:54:00	2014-06-09 19:35:01	f	ZfCcJ4TGuqyALZCu8o6KZpur2Ad2JCtKIxqOeuHafhi7u9DTu0WjqCWcQjTJ
10	arnold	$2y$10$xssF9GtqezEekvVlQ2bzx.dINfY1tilu4CY0CnGVtSRoNEOEjpnPi	acho.arnold@live.com	2014-04-11 13:35:52	2014-06-11 16:51:59	t	2XJONZEmnq3FQ6vLjcv3VlmKLlZA8EcStmEopadWYItCVaJl4wR6BAl7XdP4
20	admin	$2y$10$5X6yI1MIJ5Tf4ddxgJP.G.GvFbF7BUYBZ2e9tssi7nlH/aJy7Qi06	arn@temp.temp	2014-06-11 16:52:23	2014-06-11 16:52:45	t	K2PlfVdQo68noDlcngvCU8CsYsMPoIOq42rNpISL6h5Q10vAzvAKRklkrsWj
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bepolite
--

SELECT pg_catalog.setval('users_id_seq', 20, true);


--
-- Name: comments_pkey; Type: CONSTRAINT; Schema: public; Owner: bepolite; Tablespace: 
--

ALTER TABLE ONLY comments
    ADD CONSTRAINT comments_pkey PRIMARY KEY (id);


--
-- Name: contributions_pkey; Type: CONSTRAINT; Schema: public; Owner: bepolite; Tablespace: 
--

ALTER TABLE ONLY contributions
    ADD CONSTRAINT contributions_pkey PRIMARY KEY (id);


--
-- Name: course_outline_pkey; Type: CONSTRAINT; Schema: public; Owner: bepolite; Tablespace: 
--

ALTER TABLE ONLY course_outlines
    ADD CONSTRAINT course_outline_pkey PRIMARY KEY (id);


--
-- Name: courses_pkey; Type: CONSTRAINT; Schema: public; Owner: bepolite; Tablespace: 
--

ALTER TABLE ONLY courses
    ADD CONSTRAINT courses_pkey PRIMARY KEY (id);


--
-- Name: departments_pkey; Type: CONSTRAINT; Schema: public; Owner: bepolite; Tablespace: 
--

ALTER TABLE ONLY departments
    ADD CONSTRAINT departments_pkey PRIMARY KEY (id);


--
-- Name: faculties_pkey; Type: CONSTRAINT; Schema: public; Owner: bepolite; Tablespace: 
--

ALTER TABLE ONLY faculties
    ADD CONSTRAINT faculties_pkey PRIMARY KEY (id);


--
-- Name: gists_gist_url_unique; Type: CONSTRAINT; Schema: public; Owner: bepolite; Tablespace: 
--

ALTER TABLE ONLY gists
    ADD CONSTRAINT gists_gist_url_unique UNIQUE (gist_uri);


--
-- Name: gists_pkey; Type: CONSTRAINT; Schema: public; Owner: bepolite; Tablespace: 
--

ALTER TABLE ONLY gists
    ADD CONSTRAINT gists_pkey PRIMARY KEY (id);


--
-- Name: help_desks_pkey; Type: CONSTRAINT; Schema: public; Owner: bepolite; Tablespace: 
--

ALTER TABLE ONLY help_desks
    ADD CONSTRAINT help_desks_pkey PRIMARY KEY (id);


--
-- Name: past_questions_pkey; Type: CONSTRAINT; Schema: public; Owner: bepolite; Tablespace: 
--

ALTER TABLE ONLY past_questions
    ADD CONSTRAINT past_questions_pkey PRIMARY KEY (id);


--
-- Name: profiles_pkey; Type: CONSTRAINT; Schema: public; Owner: bepolite; Tablespace: 
--

ALTER TABLE ONLY profiles
    ADD CONSTRAINT profiles_pkey PRIMARY KEY (id);


--
-- Name: timetables_pkey; Type: CONSTRAINT; Schema: public; Owner: bepolite; Tablespace: 
--

ALTER TABLE ONLY timetables
    ADD CONSTRAINT timetables_pkey PRIMARY KEY (id);


--
-- Name: useful_links_pkey; Type: CONSTRAINT; Schema: public; Owner: bepolite; Tablespace: 
--

ALTER TABLE ONLY useful_links
    ADD CONSTRAINT useful_links_pkey PRIMARY KEY (id);


--
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: bepolite; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: fk_departments_1; Type: FK CONSTRAINT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY departments
    ADD CONSTRAINT fk_departments_1 FOREIGN KEY (faculty_id) REFERENCES faculties(id);


--
-- Name: fk_profiles; Type: FK CONSTRAINT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY profiles
    ADD CONSTRAINT fk_profiles FOREIGN KEY (department_id) REFERENCES departments(id);


--
-- Name: fk_profiles_faculty; Type: FK CONSTRAINT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY profiles
    ADD CONSTRAINT fk_profiles_faculty FOREIGN KEY (faculty_id) REFERENCES faculties(id);


--
-- Name: fk_users_profile; Type: FK CONSTRAINT; Schema: public; Owner: bepolite
--

ALTER TABLE ONLY profiles
    ADD CONSTRAINT fk_users_profile FOREIGN KEY (user_id) REFERENCES users(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

