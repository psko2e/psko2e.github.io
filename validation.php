<?php
session_start();

if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == "POST"){
    echo "Welcome ", $_POST['username'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username=="admin" && $password=="admin001"){
        $_SESSION['username'] = $username;
        $_SESSION['Is_Logged'] = true;
        header('Location:welcome.php');
        exit();
    }
    else{
        $_SESSION['ErrorMessage'] = "User ID & Password mismatch";
        header('Location:index.php');
        exit();
    }
}
else{
    $_SESSION['ErrorMessage'] = "Invalid Access";
    header('Location:index.php');
    exit();
}