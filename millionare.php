<?php
	session_start();
	//$login_username=$_SESSION['username'];
	$_SESSION['answer']="";
	$_POST['answer']="";


	$questions=array();

	//split lines in a file to elements in an array
	$questions_and_answers=file("q&a.txt");
	$questions_and_answers_num=count($questions_and_answers);

	//split informations in a line to elements in an array
	$question_and_answer=rand(0,$questions_and_answers_num-1);
	$p="";
	$o1="";
	$o2="";
	$o3="";
	$o4="";
	$a="";
	for($i=0;$i<$questions_and_answers_num;$i++){
		if($i==$question_and_answer){
			$q_a=array();
			$q_a=explode("#",$questions_and_answers[$i]);
			$q=$q_a[0];
			$o1=$q_a[1];
			$o2=$q_a[2];
			$o3=$q_a[3];
			$o4=$q_a[4];
			$a=$q_a[5];
		}
	}
	
	$_SESSION['answer']=trim($a);
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>millionare.php</title>
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
			echo "<form method=\"POST\" action=\"result.php\">
						<table>
							<tr>
								<th>
									$q
								</th>
							</tr>
							<tr>
								<td class=\"left\">
									<input type=\"radio\" name=\"answer\" value=\"$o1\">
									<label for=\"answer\">$o1</label><br>
									<input type=\"radio\" name=\"answer\" value=\"$o2\">
									<label for=\"answer\">$o2</label><br>
									<input type=\"radio\" name=\"answer\" value=\"$o3\">
									<label for=\"answer\">$o3</label><br>
									<input type=\"radio\" name=\"answer\" value=\"$o4\">
									<label for=\"answer\">$o4</label><br>
								</td>
							</tr>
							<tr>
								<th>
									<input class=\"button\" type=\"submit\" value=\"Submit\">
								</th>
							</tr>
						</table>
					</form>";
		?>
	</main>


</body>
</html>