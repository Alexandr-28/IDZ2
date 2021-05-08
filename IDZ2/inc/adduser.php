<?php
    require_once 'db.php';
    require_once '../code.php';

    $login=encrypt($_POST['logn'], $private_secret_key);
    $password=encrypt($_POST['passw'], $private_secret_key);
    $other=encrypt($_POST['other'], $private_secret_key);
    $sql="INSERT INTO `INFOS`(`Login`,`Password`, `Other`) VALUES(:lg, :ps, :ot)";

    $res=$pdo->prepare($sql);
    $res->execute(['lg'=>$login, 'ps'=>$password, 'ot'=>$other]);

    header('Location: ../index.php');
?>