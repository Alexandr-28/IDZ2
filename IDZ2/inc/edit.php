<?php
    session_start();
    require_once 'db.php';
    require_once '../code.php';

    $login=encrypt($_POST['logn'],$private_secret_key);
    $pass= encrypt($_POST['passw'], $private_secret_key);
    $other=encrypt($_POST['other'], $private_secret_key);

    $old=$_SESSION['oldName'];

    $sql = "UPDATE `INFOS` SET `Login`=:lg, `Password`=:ps, `Other`=:ot WHERE `Login`= :old";
    $res=$pdo->prepare($sql);
    $res->execute(['lg'=>$login, 'ps'=>$pass, 'ot'=>$other, 'old'=>$old]);

    unset($_SESSION['oldName']);
    header('Location: ../index.php');
?>