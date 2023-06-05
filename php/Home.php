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
                    $sql="SELECT name FROM user WHERE id!='$user_id'";
                    $records=mysqli_query($conn,$sql);
                    foreach ($records as $record){
                        //$row=mysqli_fetch_assoc($record);?>
                        <div class="friend">
                        <text id="friend-id"><?php echo $record["name"];?></text>
                    <?php } 
                    ?>
                    <button class="btn1" type="button" onclick=openPrompt()>Message</button>
                </div>
            </div>
        </div>
        <div class="pannel center" id="center-pannel">
            <div class="name-bar"><?php echo $_SESSION["name"]  ?>
            </div>
            <div class="message-text">
                <div class="name-bar receiver-bar" id="receiver-name"></div>
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