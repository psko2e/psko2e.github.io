<?php
session_start();

if(!isset($_SESSION['username']) || $_SESSION['Is_Logged'] != true){
    $_SESSION['ErrorMessage'] = "Login Required";
    header('Location:index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scable=no, maximum-scale=1.0, minimum-scale=1.0">
    <title>Library - Dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css ">
</head>
<body>
<div clas="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Welcome <?= $_SESSION['username']  ?></h1>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <a class="btn btn-warning btn-sm" href="logout.php">Logout</a>
        </div>
    </div>
</div>
</body>
</html>