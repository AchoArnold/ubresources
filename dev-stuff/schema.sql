-- -----------------------------------------------------
-- Table'users'
-- -----------------------------------------------------
CREATE TABLE users (
  id INT NOT NULL SERIAL,
  username VARCHAR(16) NOT NULL,
  password VARCHAR(32) NOT NULL,
  recovery_email VARCHAR(255) NOT NULL,
  created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NULL,
  is_admin BOOLEAN NOT NULL DEFAULT FALSE,
  PRIMARY KEY (id));


-- -----------------------------------------------------
-- Table'faculties'
-- -----------------------------------------------------
CREATE TABLE faculties (
  id INT NOT NULL SERIAL,
  name VARCHAR(100) NOT NULL,
  short_name VARCHAR(10) NULL,
  PRIMARY KEY ('id'))
;


-- -----------------------------------------------------
-- Table'departments'
-- -----------------------------------------------------
CREATE TABLE departments (
  id INT NOT NULL SERIAL,
  name VARCHAR(255) NOT NULL,
  faculty_id INT NOT NULL,
  PRIMARY KEY (id),
  INDEX fk_departments_1_idx (faculty_id ASC),
  CONSTRAINT fk_departments_1
    FOREIGN KEY (faculty_id)
    REFERENCES faculties(id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table'profiles'
-- -----------------------------------------------------
CREATE TABLE profiles' (
  'id' INT NOT NULL AUTO_INCREMENT,
  'name' VARCHAR(100) NULL,
  'telephone' VARCHAR(100) NULL,
  'department_id' INT NULL,
  'faculty_id' INT NULL,
  'date_of_birth' DATE NULL,
  'country' VARCHAR(100) NULL,
  'level' INT NULL,
  'sex' TINYINT(1) NULL,
  'location' VARCHAR(100) NULL,
  'user_id' INT NOT NULL,
  PRIMARY KEY ('id'),
  INDEX 'fk_profiles_users1_idx' ('id' ASC),
  INDEX 'fk_profiles_1_idx' ('department_id' ASC),
  INDEX 'fk_profiles_2_idx' ('faculty_id' ASC),
  CONSTRAINT 'fk_profiles_users1'
    FOREIGN KEY ('id')
    REFERENCES'users' ('users_id')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT 'fk_profiles_1'
    FOREIGN KEY ('department_id')
    REFERENCES'departments' ('id')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT 'fk_profiles_2'
    FOREIGN KEY ('faculty_id')
    REFERENCES'faculties' ('id')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table'useful_links'
-- -----------------------------------------------------
CREATE TABLE useful_links' (
  'id' INT NOT NULL AUTO_INCREMENT,
  'author_id' INT NULL,
  'title' VARCHAR(255) NULL,
  'content' BLOB NULL,
  'created_at' TIMESTAMP NULL,
  'updated_at' TIMESTAMP NULL,
  PRIMARY KEY ('id'),
  INDEX 'fk_useful_links_1_idx' ('author_id' ASC),
  CONSTRAINT 'fk_useful_links_1'
    FOREIGN KEY ('author_id')
    REFERENCES'profiles' ('id')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table'gists'
-- -----------------------------------------------------
CREATE TABLE gists' (
  'id' INT NOT NULL,
  'author_id' INT NOT NULL,
  'title' VARCHAR(45) NOT NULL,
  'content' BLOB NOT NULL,
  'gist_uri' VARCHAR(255) NOT NULL,
  'created_at' TIMESTAMP NOT NULL,
  'updated_at' TIMESTAMP NOT NULL,
  '' VARCHAR(45) NULL,
  PRIMARY KEY ('id'),
  INDEX 'fk_gists_1_idx' ('author_id' ASC),
  UNIQUE INDEX 'gist_uri_UNIQUE' ('gist_uri' ASC),
  CONSTRAINT 'fk_gists_1'
    FOREIGN KEY ('author_id')
    REFERENCES'profiles' ('id')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table'courses'
-- -----------------------------------------------------
CREATE TABLE courses' (
  'id' CHAR(5) NOT NULL,
  'department_id' INT NULL,
  'name' VARCHAR(100) NULL,
  'short_name' VARCHAR(10) NULL,
  'updated_at' TIMESTAMP NULL,
  'created_at' TIMESTAMP NULL,
  INDEX 'fk_courses_1_idx' ('department_id' ASC),
  PRIMARY KEY ('id'),
  CONSTRAINT 'fk_courses_1'
    FOREIGN KEY ('department_id')
    REFERENCES'departments' ('id')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table'timetables'
-- -----------------------------------------------------
CREATE TABLE timetables' (
  'id' INT NOT NULL,
  'department_id' INT NOT NULL,
  'level' INT NOT NULL,
  'course_id' INT NOT NULL,
  'day' INT NOT NULL,
  'start_at' TIME NOT NULL,
  'end_at' TIME NOT NULL,
  'venue' VARCHAR(255) NULL,
  'created_at' TIMESTAMP NOT NULL,
  'updated_at' TIMESTAMP NOT NULL,
  PRIMARY KEY ('id'),
  INDEX 'fk_timetables_1_idx' ('department_id' ASC),
  INDEX 'fk_timetables_2_idx' ('course_id' ASC),
  CONSTRAINT 'fk_timetables_1'
    FOREIGN KEY ('department_id')
    REFERENCES'departments' ('id')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT 'fk_timetables_2'
    FOREIGN KEY ('course_id')
    REFERENCES'courses' ('id')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table'course_outlines'
-- -----------------------------------------------------
CREATE TABLE course_outlines' (
  'id' INT NOT NULL,
  'department_id' INT NULL,
  'level' SMALLINT NULL,
  'course_id' INT NULL,
  'semester' INT NULL,
  'credit_value' INT NULL,
  'type' SMALLINT NULL,
  'credit_value' INT NULL,
  'created_at' TIMESTAMP NULL,
  'updated_at' TIMESTAMP NULL,
  PRIMARY KEY ('id'),
  INDEX 'fk_course_outlines_1_idx' ('department_id' ASC),
  CONSTRAINT 'fk_course_outlines_1'
    FOREIGN KEY ('department_id')
    REFERENCES'departments' ('id')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table'contributions'
-- -----------------------------------------------------
CREATE TABLE contributions' (
  'id' INT NOT NULL,
  'type' SMALLINT NULL,
  'author_id' INT NULL,
  'content' BLOB NULL,
  'created_at' TIMESTAMP NULL,
  'updated_at' TIMESTAMP NULL,
  PRIMARY KEY ('id'),
  CONSTRAINT 'fk_contributions_1'
    FOREIGN KEY ()
    REFERENCES'profiles' ()
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table'help_desks'
-- -----------------------------------------------------
CREATE TABLE help_desks' (
  'id' INT NOT NULL,
  'name' VARCHAR(255) NULL,
  'email' VARCHAR(255) NULL,
  'telephone' VARCHAR(50) NULL,
  'content' BLOB NOT NULL,
  PRIMARY KEY ('id'))
;


-- -----------------------------------------------------
-- Table'comments'
-- -----------------------------------------------------
CREATE TABLE comments' (
  'id' INT NOT NULL,
  'author_id' INT NULL,
  'gist_id' INT NULL,
  'content' VARCHAR(500) NULL,
  'created_at' TIMESTAMP NULL,
  'updated_at' TIMESTAMP NULL,
  PRIMARY KEY ('id'),
  INDEX 'fk_comments_1_idx' ('author_id' ASC),
  INDEX 'fk_comments_2_idx' ('gist_id' ASC),
  CONSTRAINT 'fk_comments_1'
    FOREIGN KEY ('author_id')
    REFERENCES'profiles' ('id')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT 'fk_comments_2'
    FOREIGN KEY ('gist_id')
    REFERENCES'gists' ('id')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table'past_questions'
-- -----------------------------------------------------
CREATE TABLE past_questions' (
  'id' INT NOT NULL,
  'department_id' INT NOT NULL,
  'level' VARCHAR(45) NOT NULL,
  'course_id' INT NOT NULL,
  'file_path' VARCHAR(255) NOT NULL,
  'semester' SMALLINT NOT NULL,
  'type' SMALLINT NOT NULL,
  'date' DATE NULL,
  'created_at' TIMESTAMP NULL,
  'updated_at' TIMESTAMP NULL,
  PRIMARY KEY ('id'),
  INDEX 'fk_past_questions_1_idx' ('department_id' ASC),
  INDEX 'fk_past_questions_2_idx' ('course_id' ASC),
  CONSTRAINT 'fk_past_questions_1'
    FOREIGN KEY ('department_id')
    REFERENCES'departments' ('id')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT 'fk_past_questions_2'
    FOREIGN KEY ('course_id')
    REFERENCES'courses' ('department_id')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;