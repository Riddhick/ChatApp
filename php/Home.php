<?php
    session_start();
   // $user_name=$_SESSION["name"];
    $user_id= $_SESSION["id"];
?>
<html>
<head>
    <title>Main</title>
    <link rel="stylesheet" href="/ChatApp/css/profile.css">
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
                        <?php echo $record["name"];
                    } 
                    ?>
                    <button class="btn1" type="button">Message</button>
                </div>
            </div>
        </div>
        <div class="pannel center">
            <div class="name-bar"><?php echo $_SESSION["name"]  ?>
        </div>
        </div>
        <div class="pannel right">Settings</div>
    </div>
</body>
</html>