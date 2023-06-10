<?php
    $data = json_decode(file_get_contents("php://input"), true);
    session_start();
    $user_id=$_SESSION["id"];
    $mysqli=require __DIR__."/db_connection.php";

    $receive_id=$data['receiveId'];
   
    $sql2="SELECT * FROM message ORDER BY id ASC";
    $result=mysqli_query($conn,$sql2);
    foreach($result as $res){
        if($res["sender"]==$user_id && $res["receiver"]==$receive_id){
             echo '<div class="message_send" style=" width: fit-content;
             background-color: aliceblue;
             text-align:right;
             height: auto;">'.$res["message"].'</div>';
       
        }
        else if($res["sender"]==$receive_id && $res["receiver"]==$user_id){
         echo '<div class="message_received" style="width: fit-content;
         background-color: blue;
         color: aliceblue;
         text-align: left;
         height:auto;">'.$res["message"].'</div>';
        
        }
    }
?>
