<?php
    session_start();
    include 'body.php';
    include 'function.php';
    $func = new Functionality;
    if($_SESSION['login']!=''){
        echo "Witaj ", $_SESSION['login'];
        echo "<table border ='1'>";
      
            $host = 'localhost:3306';
			$user = 'admin';
			$pswd = 'admin';
			$db = 'box';
            $con = mysqli_connect($host, $user, $pswd, $db);
            
            $query = "SELECT Login, Data, message FROM box ORDER BY 'ID' DESC";
            $ret = mysqli_query($con, $query);


            while($row = mysqli_fetch_assoc($ret)){
                echo "<tr>";
                foreach($row as $field =>$value){
                    echo "<td>" . $value . "</td>";
                }
            echo "</tr>";
         } 
        echo "</table>";
        

        $body = new Body;
        echo "<br><br>";
        echo $body->bodyBox();
        if(isset($_POST['Box'])){
            if(empty($_POST['message'])){
                die('Nie wprowadziles zadnych danych!');
            }else{ 
            $user = $_SESSION['login'];
            $ip = $_SERVER['REMOTE_ADDR'];
            $data = date("d-m-Y h:i:sa");
            $message = $func->funcYouAreNotPrepared($_POST['message']);
            $func->funcInsertBox($user, $data, $ip, $message);
            header("Refresh:0; url=chat.php");
        }
    }

    if(isset($_GET['clean'])){
        $delete_querry = "DELETE FROM box";
        $delete_do = mysqli_query($con, $delete_querry);
        header("Refresh:0; url=chat.php");
            if(!$delete_do){
                die('Blad kasowania!'.mysqli_error($con));
            }
    }
    

   
       
    } else die("Nie jestes zalogowany!");
?>