-- studiosync_schema.sql

CREATE DATABASE IF NOT EXISTS studiosync;
USE studiosync;

CREATE TABLE IF NOT EXISTS artists (
  id INT AUTO_INCREMENT PRIMARY KEY,
  stage_name VARCHAR(255),
  location VARCHAR(255),
  genres TEXT,
  experience VARCHAR(255),
  rate VARCHAR(255),
  terms TEXT,
  contact VARCHAR(255),
  bio TEXT,
  profile_pic VARCHAR(255),
  youtube VARCHAR(255),
  spotify VARCHAR(255),
  soundcloud VARCHAR(255),
  instagram VARCHAR(255),
  facebook VARCHAR(255)
);
