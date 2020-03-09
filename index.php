<?php # Script 16.1- mysqli_oop_connect.php
// This file contains the databse access information. 
// This file also establishes a connection to MySQL,
// selects the databse, and sets the encoding. 
// The MySQL interactions use OOP!

// Set the database access information
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', 'tiger');
DEFINE('DB_HOST', 'mysql:3306');
DEFINe('DB_NAME', 'sitename');