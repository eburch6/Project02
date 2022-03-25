<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>signup.php</title>
	<link rel="stylesheet" type="text/css" href="millionare.css">
</head>
<body>
	<?php
		require_once("common.php");
		common_header();
	?>

	<!-- MAIN -->

	<main>
		<form method="POST" action="signup_submit.php">
			<table>
				<tr>
					<th>
						<label for="username">Username:</label>
					</th>
					<td>
						<input type="text" name="username" maxlength="200" size="25">
					</td>
				</tr>
				<tr>
					<th>
						<label for="password">Password:</label>
					</th>
					<td>
						<input type="password" name="password" maxlength="200" size="25">
					</td>
				</tr>
				<tr>
					<th>
						<input class="button-signup" type="submit" value="Sign Up">
					</th>
				</tr>
			</table>
		</form>
	</main>


</body>
</html>