<?php
    session_start();
    $_SESSION["name"]="";
    $_SESSION["id"]="";
    $mysqli=require __DIR__."/db_connection.php";
    $flag=0;

    $name=$_POST["Name"];
    $email=$_POST["Email"];
    $pass=$_POST["Password"];

    $sql1="SELECT * FROM user WHERE name='$name' AND email='$email'";
    $result=mysqli_query($conn,$sql1);
    if($result!=NULL){
    $row=mysqli_fetch_assoc($result);

    if ($row["password"]==$pass)
    {
        $flag=1;
        header("location:/ChatApp/php/Home.php");
        $_SESSION["name"]=$row["name"];
        $_SESSION["id"]=$row["id"];
    }
    else{
        echo "Wrong Password or Username";
    }}
    else{
        echo "No user Found ";
    }
    if($flag==0){
        session_destroy();
    }
?>