<?php
// session_start();
require "views/login.view.php";
require "db.php";

if(isset($_POST ['email']) && isset($_POST ['password '])){
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}


    $email= validate ($_POST ['email']);
    $password= validate ($_POST ['password']);
    if (empty($email)){

        header("location :/test/index.php? error = email is required");
    exit();

    }else if(empty($password)){
        header("location :/test/index.php? error = password is required");
        exit();
    }

  else{

    $sql = "select * from users where  email='$email' and password=$password";
    $result= mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        if ($row['email']===$email  && $row['password']===$password ){
$_SESSION['email']= $row['email'];
$_SESSION['name']= $row['name'];
$_SESSION['id']= $row['id'];
header("location: /test.php");

        }
        else{
            header("location : index.php?error=incorrect username or password");
            exit();
        }
    }

  }
}


