<?php
$databaseHost = 'mariadb_svc';
$databaseName = 'usuarios_db';
$databaseUsername = 'root';
$databasePassword = 'Custom.2023';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
