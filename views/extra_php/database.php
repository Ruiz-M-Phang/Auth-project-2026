<?php

include_once "config.php";

function database_connect()
{
    $connection = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_SCHEMA_NAME);
    if($connection->connect_error) # -> om binnen de function dingen te doen/return aan te vragen
    {
        die("failed to connect" . $connection->connect_error);
    }
    return $connection;
}