INTRODUCTION:

W1 Music is a basic application that displays artists and songs information which is stored in MySQL database.
The application provides a couple of views to display information about various artists and relevant songs.

PROJECT'S AIM:

1) Be able to produce various 'views' of the same data stored in a database
2) Ensure portability of application
3) Design for change in mind
4) Separation of concerns, i.e., Presentation layer, Data Access layer and Business Logic layer
5) Ensure consistency of design across the application views
6) Easy manageability of PHP and HTML code

DATABASE INSTALLATION:

This project includes a file 'w1tma_tables.sql' located within /sql folder containing the structure of tables along
with sample data. This sql query can simply be executed on a MySQL server to produce required tables. Bare in mind,
running this query will destroy any previous artist and song tables. The sql folder also contains the 4 queries used in
this app. These 4 scripts can be run from an application like MySQL WorkBench to study the data.

DATABASE ACCESS:

PHP Data Object PDO is used for data access and data transactions. Class MyPDO.php is creates as child class of PDO class,
any modification to the data source must be done in this extended child class. MyPDO.php is located in /classes folder.

FILE STRUCTURE:

INDEX.PHP: This file provides single point of entry into the application.

All of the views are stored within /views folder. There are 4 files within this folder:

404.php
artists.php
home.php
songs.php

These are pure PHP files and does not contain any HTML.

All of the HTML is contained in /templates folder. Any modification to the appearance of the application must be attempted
within these HTML files.

WARNING: Do not alter or modify any label within double curly brackets eg, {{LABEL}} as these are
the placeholders for dynamic content.

Cascade Style Sheet is stored in /css folder.

The /data_access folder contains all the files responsible for interacting with database. These files are responsible for
Data Access, hence files contained in this folder form the Data Access Layer of the application.

INTERNATIONALISATION:

The /lang folder contains the language files which contains all the static text found within the app. Any text displayed
in the application can be altered by changing the relevant $lang[] array variable. Language files are stored using there
2 character ISO 639-1 codes followed by .php extension.

APPLICATION SETTINGS:

Files containing the most important settings and business logic are contained in the /includes folder.

CONFIG.INC.PHP:

This file contains all the database connection settings and credentials, along with configuration to change the application
language. PLEASE MAKE A COPY OF THIS FILE BEFORE MAKING ANY CHANGES SO THAT UNDESIRABLE CHANGES CAN BE REVERTED.

FUNCTIONS.PHP:

This file contains all the functions that help to make the code precise.

PAGE_TOP.PHP: This file updates the page header along with total songs and active artist information.

SQL_QUERIES.PHP: This file contains variables containing the SQL queries used in the application. Any changes to the queries
must be done here.

UPDATE_LANGUAGE.PHP: This file updates the language setting in the config.inc.php file as per user choice.


Salik Tariq. Student ID: 12516369