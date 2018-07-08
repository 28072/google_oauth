<?php

/*

create database dotinstall_google_connect_php;
grant all on dotinstall_google_connect_php.* to dbuser@localhost identified by '********';

use dotinstall_google_connect_php

create table users (
    id int not null auto_increment primary key,
    google_user_id varchar(30) unique,
    google_email varchar(255),
    google_name varchar(255),
    google_picture varchar(255),
    google_access_token varchar(255),
    created datetime,
    modified datetime
);

*/

define('DSN', 'mysql:host=28072mysql.mysql.database.azure.com;dbname=tdspoc2018_google_connect_php');
define('DB_USER', 'pocadmin@28072mysql');
define('DB_PASSWORD', 'Tds00000');

define('CLIENT_ID', '820797112054-auvfqh9emqqcke0h2ef1c0cg68bcd0n7.apps.googleusercontent.com');
define('CLIENT_SECRET', '3TvLd7OqJgqv8PaH9vqp07v5');

define('SITE_URL', 'http://dev.tdspoc2018.com/google_connect_php/');

error_reporting(E_ALL & ~E_NOTICE);

session_set_cookie_params(0, '/google_connect_php/');
