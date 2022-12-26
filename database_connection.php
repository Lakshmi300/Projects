<?php
// Fill in your database hostname, username, password and database name below

$MYSQLi = new mysqli("localhost", "root", "", "db_task");

if(!$MYSQLi){
	die("Error: Cannot connect to the database");
}
?>