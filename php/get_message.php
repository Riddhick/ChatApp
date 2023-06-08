<?php
    $data = json_decode(file_get_contents("php://input"), true);
    session_start();
    $user_id=$_SESSION["id"];
    $mysqli=require __DIR__."/db_connection.php";

    $receive_id=$data['receiveId'];
   
    $sql2="SELECT * FROM message WHERE sender IN ('$user_id','$receive_id')  AND receiver IN ('$receive_id','$user_id') ORDER BY id ASC";
    $result=mysqli_query($conn,$sql2);
    foreach($result as $res){
        if($res["sender"]==$user_id){
             echo $res["message"];
       
        }
        else if($res["receiver"]==$receive_id){
         echo $res["message"];
        
        }
    }
?>
