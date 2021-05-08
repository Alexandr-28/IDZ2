<?php
    require_once 'inc/db.php';
    require_once 'code.php';

    $name=$_POST['name'];

    $sql="DELETE FROM `INFOS` WHERE `Login`=:nm";
    $res=$pdo->prepare($sql);
    $res->execute(['nm'=>$name]);

    echo $name;
?>