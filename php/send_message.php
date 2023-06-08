<?php
    $data = json_decode(file_get_contents("php://input"), true);
    session_start();
    $user_id=$_SESSION["id"];
    $mysqli=require __DIR__."/db_connection.php";

    $receive_id=$data['receiveId'];
    $message=$data['message'];
    $date=date('Y/m/d H:i:s');


   /* $sql="INSERT into Message(sender,receiver,message,time) values('$user_id','$receive_id','$message','$date')";
    mysqli_query($conn,$sql);
    echo $receive_id.$message.$user_id;*/
    $sql2="SELECT * FROM message WHERE sender='$user_id' and receiver='$receive_id'";
    $result=mysqli_query($conn,$sql2);
    foreach($result as $res){
        echo $res["message"];
    }
?>