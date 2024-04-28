<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "bank";

	// Create connection
	$con = mysqli_connect($servername, $username, $password, $database);
	

    // class curd{
    //     public static function connection(){
    //         try {
    //             $con = new PDO('mysqli:localhost=127.0.0.1; dbname=bank','root','');
    //             return $con;
    //         } catch (PDOException $error1) {
    //             echo 'Unable to connect with database '.$error1 -> getMessage();
    //         }
    //     }
	// 	public static function empData(){
	// 		$data=array();
	// 		$p=curd::connection()->prepare('SELECT * FROM employee');
	// 		$p->execute();
	// 		$data = $p->fetchAll(PDO::FETCH_ASSOC);
	// 		return $data;
	// 	}
    // }


?>
