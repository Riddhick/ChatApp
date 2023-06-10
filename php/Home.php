<?php
    session_start();
   // $user_name=$_SESSION["name"];
    $user_id= $_SESSION["id"];
?>
<html>
<head>
    <title>Main</title>
    <link rel="stylesheet" href="/ChatApp/css/profile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../script/message.js"></script>
    
</head>
<body>
    <div class="container">
        <div class="pannel left">
            <div class="heading-left">Friend List</div>
            <div class="friendlist">

                    <?php $mysqli=require __DIR__."/db_connection.php";
                    $sql="SELECT name,id FROM user WHERE id!='$user_id'";
                    $records=mysqli_query($conn,$sql);
                    $i=0;
                    foreach ($records as $record){
                        //$row=mysqli_fetch_assoc($record);?>
                        <div class="friend">
                        <text id="friend-id<?php echo $i;?>"><?php echo $record["name"];?></text>
                        <text class="userid" id="user-id<?php echo $i;?>"><?php echo $record["id"];?></text>
                        <button class="btn1" id="<?php echo $i;?>" type="button" onclick=openPrompt(this.id)>Message</button>
                </div> 
                    <?php
                        $i=$i+1; } 
                    ?>
                    
            </div>
        </div>
        <div class="pannel center" id="center-pannel">
            <div class="name-bar"><?php echo $_SESSION["name"]  ?>
            <button type="Button" class="button" onclick="back()">Back</button>
            </div>
            <div class="message-text" id="message-text">
                <div class="name-bar receiver-bar" id="receiver-name"></div>
                <div class="message" id="message">
                    <div class="message-send" id="message_send"></div>
                    <div class="message-received" id="message_received"></div>
                </div>
            </div>
            <div class="message-show" id="message-show">
                <form name="message" action="" method="POST" id="messageform">
                    <input type="text" value="" autocomplete="off" name="data" id="data" placeholder="Enter Message">
                    <button type="Button" class="btn1" onclick="sendData()">Send</button>
                </form>
            </div>
        </div>
        <div class="pannel right">Settings</div>
    </div>
   
</body>
</html>