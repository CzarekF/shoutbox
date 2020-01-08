<?php
    class Body{
 function body(){
    return 
    '
    <html>
    <head>
    </head>
    <body>
        <form action="add.php", method="post">
        Username: <input type="text" name="user"></br>
        Password: <input type="password" name="password"></br>
        Repeat Password: <input type="password" name="password2"></br>
        Nick: <input type="text" name="nick"></br>
        <input type="submit" value="Wyslij">
        </form>
    </body>
    </html>
    
    ';
}

    function bodyBox(){
        return
    '
    <html>
    <head>
    </head>
    <body>
        <form action="chat.php", method="post">
         Message: <input type="text" name="message"></br>
        <input type="submit" value="Wyslij" name="Box">
        <br>
        <a href = "chat.php?clean"> Wyczysc czat </a>
        </form>
    </body>
    </html>
    
    ';
    }
    }
?>