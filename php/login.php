<?php
    $mysqli=require __DIR__."/db_connection.php";

    $name=$_POST["Name"];
    $email=$_POST["Email"];
    $pass=$_POST["Password"];

    $sql1="SELECT * FROM user WHERE name='$name' AND email='$email'";
    $result=mysqli_query($conn,$sql1);
    if($result!=NULL){
    $row=mysqli_fetch_assoc($result);

    if ($row["password"]==$pass)
    {
        header("location:/ChatApp/Home.html");
    }
    else{
        echo "Wrong Password or Username";
    }}
    else{
        echo "No user Found ";
    }
?>