<?php
    session_start();
    require_once 'inc/db.php';
    if(!isset($_COOKIE["username"])){
        header('Location: login.php');
        exit();
    }
    require_once 'code.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="stl2.css">
    <script src="js/ajax.js"></script>
    <title>IDZ</title>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" style="font-size:24px;"><b>Home</b></a>
                </li>
                
            </ul>
            
            <span class="navbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-size:21px;"><b><?php echo $_COOKIE["username"];?></b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="inc/signout.php" style="font-size:21px;">Выход</a>
                    </li>
                </ul>
            </span>
            
        </div>
    </div>
    </nav>