<?php
    $data = json_decode(file_get_contents("php://input"), true);
    session_start();
    $user_id=$_SESSION["id"];

    $receive_id=$data['receiveId'];
    $message=$data['message'];

    echo $receive_id.$message.$user_id;
?>