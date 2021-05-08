<?php
    session_start();
    require_once 'inc/db.php';
    if(isset($_COOKIE["username"])){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="css\bootstrap.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="stl.css">
    <title>Login</title>
  </head>
  <body>
        <form action="inc/signin.php" method="POST" id="logform">
            <div class="container col-md-5">
                        <?php
                            if(isset($_SESSION['err'])){
                                echo '<div class="alert alert-danger col-md-10">'.$_SESSION['err'].'</div>';
                            }
                        ?>
            </div>
            <div class="container col-md-5">
                <div class="form-group">
                    <label for="log" class="control-label col-md-2"></label>
                    <div class="col-md-10">
                        <input class="form-control" placeholder="Login" name='log' required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="passw" class="control-label col-md-2"></label>
                    <div class="col-md-10">
                        <input class="form-control" placeholder="Password" name="passw" type="password" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2"></label>
                    <div class="col-md-offset-2 col-md-10">
                        <input type="submit" value="Log in" class="btn btn-success" />
                        <button type="button" class="btn btn-primary" onclick="window.location.href=('register.php');">Register</button>
                    </div>
                </div>
            </div>
        </form>
   
    <script src="js\jquery-3.6.0.min.js"></script>
    <script src="js\bootstrap.min.js"></script>

    <?php
        unset($_SESSION["err"]);
    ?>
  </body>
</html>