<?php
    require_once 'db.php';
    session_start();

    $name=$_POST['log'];
    $pass=$_POST['passw'];

    $sql="SELECT `Password` FROM `User` WHERE `NAME`=:nm";
    $res=$pdo->prepare($sql);
    $res->execute(['nm'=>$name]);
    $result=$res->fetchAll();

    if(password_verify($pass,$result[0][0])){
        setcookie("username", $name, 2147483647, "/", "", 1,1 );
        header('Location: ../index.php');
    }
    else{
        $_SESSION['err']="Неверный логин или пароль";
        header('Location: ../login.php');
    }
?>