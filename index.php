<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library - Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css ">
</head>
<body>
<div clas="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 100px">
            <div class="panel panel-primary">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <?php if(isset($_SESSION['ErrorMessage'])) :  ?>
                    <div class="alert alert-danger">
                        <?php
                            echo $_SESSION['ErrorMessage'];
                            unset($_SESSION['ErrorMessage']);
                        ?>
                    </div>
                    <?php endif;  ?>
                    <form action="validation.php" method="post">
                        <div class="form-group form-group-sm">
                            <label for="username">User ID</label>
                            <input type="text" class="form-control" name="username" placeholder="User ID">
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group form-group-sm">
                            <button class="btn btn-success btn-sm">
                                <i class="glyphicon glyphicon-log-in"> Login</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>