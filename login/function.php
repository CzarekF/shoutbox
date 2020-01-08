<?php
   include 'form.php';
   class Functionality extends Form{
       public function testCon(){
           return $this->connectMe();
       }

       public function connectBox(){
           return $this->connectMeBox();
       }

       public function funcPasswordEncrypt($a){
           return $this->passwordEncrypt($a);
       }

       public function funcPasswordsSame($a, $b){
            return $this->passwordsSame($a, $b);
       }

       public function funcDuplicatedUsers($a){
            return $this->duplicatedUsers($a);
       }

       public function funcLoadIn($a, $b, $c){
            return $this->loadIn($a, $b, $c);
       }

       public function funcYouAreNotPrepared($a){
           return $this->youAreNotPrepared($a);
       }

       public function funcLogMe($a, $b){
           return $this->logMe($a, $b);
       }

       public function funcInsertBox($a, $b, $c, $d){
           return $this->insertBox($a, $b, $c, $d);
       }
       
       public function getPost(){
           return $this->retrieveBox();
       }

       public function disconnect(){
           return $this->disconnectMe($this->connectMe());
       }
   }
?>
