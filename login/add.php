<?php
    require 'function.php';

    $func = new Functionality;

    $user = $func->funcYouAreNotPrepared($_POST['user']);
    $pswd = $func->funcPasswordEncrypt($_POST['password']);
    $pswd2 = $func->funcPasswordEncrypt($_POST['password2']);
    $nick = $func->funcYouAreNotPrepared( $_POST['nick']);
 
    $func->funcPasswordsSame($pswd, $pswd2);
    $func->funcDuplicatedUsers($user);
    $func->funcLoadIn($user, $pswd, $nick);

    echo "konto zarejestrowane!";
    $func->disconnect();

    
    

?>