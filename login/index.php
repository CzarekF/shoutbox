<?php
    require 'function.php';
    require_once 'body.php';
    $func = new Functionality;
    $func->testCon();
    $body = new Body;
    echo $body->body();
    echo "<br> <a href='login.php'> Logowanie </a> ";
    $func->disconnect();
?>
