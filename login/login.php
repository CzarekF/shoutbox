<?php 
    include 'function.php';
    $func = new Functionality;
?>

<html>
    <head>
    </head>
    <body>
        <form action "login.php" method="post">
         Uzytkownik:   <input type="text" name="User"><br>
         Hasło:     <input type="text" name="Password"><br>
         <input type="submit" value="Przeslij" name="loguj">
    </body>
</html>

<?php
    if(isset($_POST['loguj'])){
        $user = $func->funcYouAreNotPrepared($_POST['User']);
        $password = $func->funcPasswordEncrypt($_POST['Password']);
         if($func->funcLogMe($user, $password)==true){
             session_start();
             $_SESSION['zalogowany'] = true;
             $_SESSION['login'] = $user;
            echo "<br>Zalogowano! Witaj ", $_SESSION['login'], " Idz do <a href='chat.php'>Czatu</a>"; 
          } else die("Niepoprawne dane!");
    }
    $func->disconnect();
?>
