<?php

$user = 'root';
$password = "";
$host = 'localhost';
$dbase = 'dragnet';
$table = 'dragsubscribers';
$tableTwo = 'dragfeedback';


// Connect to DBase 
$dbc = mysqli_connect($host, $user, $password, $dbase)
    or die("Unable to connect");


$query = "CREATE TABLE IF NOT EXISTS $table ( `id` INT NOT NULL AUTO_INCREMENT , `name` TEXT NULL , `email` VARCHAR(60) NOT NULL , `date` DATE NOT NULL , PRIMARY KEY (`id`), UNIQUE `uniqueemail` (`email`)) ENGINE = InnoDB;";
// $query = "CREATE TABLE IF NOT EXISTS $tableTwo ( `id` INT NOT NULL AUTO_INCREMENT , `name` TEXT NULL , `email` VARCHAR(60) NOT NULL , `message` VARCHAR(255) NOT NULL , `date` DATE NOT NULL , PRIMARY KEY (`id`), UNIQUE `uniqueemail` (`email`)) ENGINE = InnoDB;";


$result = mysqli_query($dbc, $query)
    or die('Error creating table. ' . mysqli_error($dbc));

?>