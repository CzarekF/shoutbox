<?php
    include 'connect.php';
    
    class Form extends Connect{
        
        protected function youAreNotPrepared($a){
            $noSlash = stripslashes(htmlspecialchars($a));
            $prepared = preg_replace("/[^-a-zA-Z0-9\s]/", "", $noSlash);
            return $prepared;
        }
        
        /*
        * Loading user credinals
        */
        
        protected function loadIn($user, $pswd, $nick){
            $query = "INSERT INTO logowanie(User, Password, Nick) VALUES ('".$user."', '".$pswd."', '".$nick."' )";
            mysqli_query($this->connectMe(), $query);
        }

        /*
        * Encrypting user passwords
        */

        protected function passwordEncrypt($a){
            $a=md5($a);
            return $a;
        }


        /*
        * Checking for similar passwords
        */

        protected function passwordsSame($a, $b){
            if($a!=$b){
                die('Hasła są rozne!');
            }
        }

        /*
        * Unique user
        */

        protected function duplicatedUsers($a){
            $query = "SELECT User FROM logowanie WHERE User = '".$a."'";
            $data = mysqli_query($this->connectMe(), $query);
            $count = mysqli_num_rows($data);
                if($count != 0){
                    die('Nazwa uzytkownika zajeta');
                }
        }

        protected function logMe($a, $b){
            $query = "SELECT User, Password FROM logowanie WHERE User='".$a."' AND Password='".$b."' ";      
            $creds = mysqli_query($this->connectMe(), $query);
            $checker = mysqli_num_rows($creds);
                if($checker > 0){
                    return true;
                } else return false;
        }

        protected function insertBox($a, $b, $c, $d){
            $query = "INSERT INTO box(Login, Data, IP, message) VALUES ('".$a."', '".$b."', '".$c."', '".$d."' )";
            mysqli_query($this->connectMeBox(), $query);
        }

        protected function retrieveBox(){
            $query = "SELECT * FROM box ORDER BY 'ID' DESC";
            $ret = mysqli_query($this->connectMeBox(), $query);
            return $ret;
        }

    }
?>