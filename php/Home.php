<?php
    session_start();
    //echo $_SESSION["name"];
    //echo $_SESSION["id"];
?>
<html>
<head>
    <title>Main</title>
    <link rel="stylesheet" href="/ChatApp/css/profile.css">
</head>
<body>
    <div class="container">
        <div class="pannel left">Friend List</div>
        <div class="pannel center">
            <div class="name-bar"><?php echo $_SESSION["name"]  ?>
        </div>
        </div>
        <div class="pannel right">Settings</div>
    </div>
</body>
</html>