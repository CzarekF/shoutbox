<?php
	class Connect{
		protected function connectMe(){
			$host = 'localhost:3306';
			$user = 'admin';
			$pswd = 'admin';
			$db = 'login';
			$con = mysqli_connect($host, $user, $pswd, $db);
				if($con->connect_errno!=0){
					echo 'Blad laczenia!'.$con->connect_errno;
				} else return $con;
		}

		protected function connectMeBox(){
			$host = 'localhost:3306';
			$user = 'admin';
			$pswd = 'admin';
			$db = 'box';
			$con = mysqli_connect($host, $user, $pswd, $db);
				if($con->connect_errno!=0){
					echo 'Blad laczenia!'.$con->connect_errno;
				} else return $con;
		}

		protected function disconnectMe($a){
			mysqli_close($a);
		}

		
	}

?>
