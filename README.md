# Kalam-Acadamy-Submission-ShrutiK
Description
This project demonstrates the implementation of jQuery DataTables for paginating data fetched from a MySQL database and displayed using HTML and JavaScript.

Files Included
index.html
The main HTML file includes jQuery and DataTables libraries. It fetches data from script.php and displays it in a paginated table.

script.php
This PHP script fetches data from a MySQL database and converts it into JSON format. It's used by index.html to retrieve data for display.

db_connect.php
This PHP script establishes a connection to the MySQL database.

database_dump.sql
The SQL file contains the database dump with sample data used in this project.

Instructions
Setup Database:

Import database_dump.sql into your MySQL database to create the necessary tables and populate them with sample data.
Configure Database Connection:

Update db_connect.php with your database credentials if different from the provided configuration.
Run the Application:

Place all files in your web server directory.
Access index.html through a web browser.
View Paginated Data:

Upon accessing index.html, the table displaying paginated data fetched from the database will be visible.
Notes
Ensure proper configuration of the database connection in db_connect.php.
Adjust the query in script.php to suit specific data retrieval requirements.
Technologies Used
HTML
JavaScript (jQuery)
PHP
MySQL
