<?php 
    $connection = new mysqli("localhost", "root", "", "dbsignup");

    if($connection->connect_error)
        {
            die("Connection failed:" .$connection->connect_error);
        }
?>