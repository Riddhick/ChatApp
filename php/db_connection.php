<?php
    $host="localhost";
    $dbname="chat-db";
    $password="";
    $username="root";

    $conn=new mysqli($host,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection Error". $conn->connect_error);
    }
?>