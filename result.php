<?php
	session_start();
	//$login_username=$_SESSION['username'];
	$answer=$_POST['answer'];
	$ans=$_SESSION['answer'];
		
	if(isset($answer)){
		if($answer==$ans){
			$message= "<b>Correct!</b><br>The correct answer is $ans.<br><a href=\"millionare.php\">Continue </a>or<a href=\"index.php\"> Quit</a>";
		}else{
			$message= "<b>Incorrect!</b><br>The correct answer is $ans<br><a href=\"millionare.php\">Continue </a>or<a href=\"index.php\"> Quit</a>";
		}
	}else{
		$message= "You didn't answer the question.<br><a href=\"millionare.php\">Continue </a>or<a href=\"index.php\"> Quit</a>";
	}

	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>result.php</title>
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
			echo $message;
		?>
	</main>

</body>
</html>