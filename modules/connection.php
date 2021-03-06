<?php

$SQL_HOST = getenv('SQL_HOST', true) ? : getenv('SQL_HOST');
$SQL_USER = getenv('SQL_USER', true) ? : getenv('SQL_USER');
$SQL_PASSWORD = getenv('SQL_PASSWORD', true) ? : getenv('SQL_PASSWORD');
$SQL_DATABASE = getenv('SQL_DATABASE', true) ? : getenv('SQL_DATABASE');

$SQL_Handle = new mysqli($SQL_HOST, $SQL_USER, $SQL_PASSWORD, $SQL_DATABASE);

if($SQL_Handle->connect_error) {
    echo '<script>console.log("Error connecting to the database: ")</script>';
    die("Error connecting to the database: " . $SQL_Handle->connect_error);
    return;
} else {
    echo '<script>console.log("Connected to MySQL Database!")</script>';
}