<?php
    $data = json_decode(file_get_contents("php://input"), true);
    session_start();
    $user_id=$_SESSION["id"];
    $mysqli=require __DIR__."/db_connection.php";

    $receive_id=$data['receiveId'];

    echo "Try";
?>