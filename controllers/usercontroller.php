<?php 

    require_once '../models/db_connect.php';
    $name=$username=$email=$password="";
    $err_name=$err_username=$err_email=$err_password=$invalid="";

	$hasError = false;
	
    if(isset($_POST["sign_up"])){

        if(empty($_POST["name"])){
            $err_name="*Name Required";
            $hasError= true;
        }else{
            $name = $_POST["name"];
		}

		if(empty($_POST["username"])){
			$err_username="*Username required";
			$hasError = true;
		}
		else if(strlen($_POST["username"]) < 6){
			$err_username="*Username must be 6 characters long";
			$hasError = true;
		}
		else{
			$username=$_POST["username"];
		}

		if(empty($_POST["email"])){
            $err_email="*Email Required";
            $hasError= true;
        }else{
            $email = htmlspecialchars($_POST["email"]);
		}
		
		if(empty ($_POST["password"])){
			$err_password="*Password Required";
			$hasError = true;
		}
		else if(strlen($_POST["password"]) < 4){
			$err_password="Password must be 4 characters long";
			$hasError = true;
		}
		else{
			$password = htmlspecialchars($_POST["password"]);
		}
        if(!$hasError){
		   addUser($name, $username, $email, $password);
		   
            header("Location: ../views/login.php");

        }


    }
	
	if(isset($_POST["login"])){
		
		if(empty($_POST["username"])){
			$err_username="*Username required";
			$hasError = true;
		}
		else{
			$username=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_password="*Password required";
			$hasError = true;
		}
		else{
			$password=$_POST["password"];
		}
		if(!$hasError){

			$result = authenticate($username, $password);
			if($result){
				header("Location: dashboard.php");
			}else{
				$invalid = "Invalind username or password";
			}

		 }
	}


    function addUser($name, $username, $email, $password){
        $password = md5($password);
        $query="INSERT INTO users VALUES('$name', '$username', '$email', '$password')";
        execute ($query);

	}
	
	function authenticate($username, $password){
		$password = md5($password);
		$query = "SELECT username FROM users WHERE username='$username' AND password='$password'";   
		$result = get($query);
		if (count($result)>0) return true;
		return false;
	}


?>