<?php
    setcookie("username", null, 2147483647, "/", "", 1,1 );
    header('Location: ../login.php');
?>