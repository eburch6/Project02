<?php
	session_start();
	$_SESSION['username']=$_POST['username'];
	$_SESSION['password']=$_POST['password'];
	$login_username=$_SESSION['username'];
	$login_password=$_SESSION['password'];

	
	

	function existUser(){

		$person_info=array();

		//split lines in a file to elements in an array
		$person_info=file("users.txt");
		$person_num=count($person_info);
		//split informations in a line to elements in an array
		for($i=0;$i<$person_num;$i++){
			$person=array();
			$person=explode("#",$person_info[$i]);

			if ($_POST['username']==$person[0]&&$_POST['password']==$person[1]) {
				return true;
			}else{
				return false;
			}
		}
	}

	function validLogIn($login_username,$login_password){
		if(isset($_POST['username'])&&isset($_POST['password'])){
			if(($login_username==$_POST['username']&&$login_password==$_POST['password'])||(existUser())){
				return true;
			}
		}else{
			return false;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login_submit.php</title>
	<link rel="stylesheet" type="text/css" href="millionare.css">
</head>
<body>
	<?php
		require_once("common.php");
		common_header();
	?>

	<!-- MAIN -->

	<main>
		<?php
			if (validLogIn($login_username,$login_password)) {
				echo "<h3>Welcome, $login_username!</h3>";
				echo "You have logged in Successfully.<br>";
				echo "Click <a href=\"millionare.php\">here</a> to play.";	
			} else{
				echo "<span style='color:red'>Invalid Log In Details</span><br><p>We're sorry! You submitted invalid log in information. Please <a href=\"login.php\">try again</a>.";
			}
		?>
	</main>
</body>
</html>