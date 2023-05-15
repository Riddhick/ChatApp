<?php
    $mysqli=require __DIR__."/db_connection.php";

    $name=$_POST["Name"];
    $email=$_POST["Email"];
    $password=$_POST["Password"];
    $id_arr=str_split($name,3)+str_split($email,4)+str_split($password,2);
    $id=implode("",$id_arr);

    $sql1="SELECT * FROM user WHERE email='$email'";
    $record=mysqli_query($conn,$sql1);

    if($record==NULL){
    //inserting the user-table value
    $sql="INSERT INTO user values(?,?,?,?)";
   
    $stmt=$conn->stmt_init();
    $stmt->prepare($sql);
    $stmt->bind_param("ssss",
                      $id,$name,$email,$password);
    if($stmt->execute()){
        header('Location: /ChatApp/index.html');
    }                 
    //echo $id;}
    }
    else{
        echo "User Already Exists";
    }
?>