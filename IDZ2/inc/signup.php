<?php
    require_once 'db.php';
    session_start();

    $name = $_POST['log'];
    $email = $_POST['mail'];
    $pass1 = $_POST['passw'];
    $pass2 = $_POST['passw2'];

    

    if((string)$pass1!==(string)$pass2){
        $_SESSION['err']="Пароли не совпадают";
        header('Location: ../register.php');
        exit();
    }
    
    $sql1="SELECT COUNT(*) FROM `User` WHERE `Name`=:nm OR `Email`=:em";
    $res1=$pdo->prepare($sql1);
    $res1->execute(['nm'=>$name, 'em'=>$email]);
    $cnt=$res1->fetchColumn();

    if($cnt>0){
        header('Location: ../register.php');
        $_SESSION['err']="Пользователь с таким именем или почтой уже существует";
        exit();
    }

    $sql2="INSERT INTO `User`(`Name`, `Password`, `Email`) VALUES(:nm, :ps, :em)";
    $res2=$pdo->prepare($sql2);

    $hashPass=password_hash($pass2, PASSWORD_DEFAULT);
    $res2->execute(['nm'=>$name, 'ps'=>$hashPass, 'em'=>$email]);
    setcookie("username", $name, 2147483647, "/", "", 1,1 );
    header('Location: ../index.php');

?>