<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>signup_submit.php</title>
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
			$username=$_POST['username'];
			$password=$_POST['password'];
			if(isset($username)&&isset($password)){
				
				$_SESSION['username']=$_POST['username'];
				$_SESSION['password']=$_POST['password'];

				$users=array();
				$users=array_merge($users,array($username,$password));


				//Store user's information to users.txt
				$file=fopen("users.txt", "a");
				$content="$username#$password\n";
				fwrite($file, $content);

				echo "<h3>Welcome, $username!</h3>";
				echo "You have signed up successfully.<br>";
				echo "Now <a href=\"login.php\">log in</a> to play!";
			}else{
			echo "<span style='color:red'>Invalid Sign Up Details</span><br><p>We're sorry! You submitted invalid user information. Please <a href=\"login.php\">try again</a>.";
			}

		?>
		
	</main>


</body>
</html>