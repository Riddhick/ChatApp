<?php
    $data = json_decode(file_get_contents("php://input"), true);
    session_start();
    $user_id=$_SESSION["id"];
    $mysqli=require __DIR__."/db_connection.php";

    $receive_id=$data['receiveId'];
?>   
<html>
    <head><link rel="stylesheet" href="/ChatApp/css/profile.css"></head>
<?php    
    $sql2="SELECT * FROM message WHERE sender IN ('$user_id','$receive_id')  AND receiver IN ('$receive_id','$user_id') ORDER BY id ASC";
    $result=mysqli_query($conn,$sql2);
    foreach($result as $res){
        if($res["sender"]==$user_id){
            ?><div class="message-send" id="message_send"><?php $res["message"]?></div>
        <?php
        }
        else if($res["receiver"]==$receive_id){
         ?>  <div class="message-received" id="message_received"><?php $res["message"]?></div>
        <?php
        }
    }
?>
</html>