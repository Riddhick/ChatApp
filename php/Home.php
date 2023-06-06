<?php
    session_start();
   // $user_name=$_SESSION["name"];
    $user_id= $_SESSION["id"];
?>
<html>
<head>
    <title>Main</title>
    <link rel="stylesheet" href="/ChatApp/css/profile.css">
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
            </div>
            <div class="message-text">
                <div class="name-bar receiver-bar" id="receiver-name"></div>
                <div class="message">
                    <div class="message-send">This is a send Message</div>
                    <div class="message-received">This is a received Message</div>
                </div>
            </div>
            <div class="message-show">
                <form name="message">
                    <input type="text" value="" autocomplete="off" name="data" placeholder="Enter Message">
                    <button type="Submit" class="btn1">Send</button>
                </form>
            </div>
        </div>
        <div class="pannel right">Settings</div>
    </div>
</body>
</html>