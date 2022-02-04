<?php 

	$current_month = date("F");

	if($current_month=="August") {
		echo "It's August, so it's still holiday.<br>";
	} else {
		echo "Not August, This is ".$current_month." so i don't have any holidays.<br>";
	}

	$color = "red";

	if ($color == "red") {
		echo "This color is red.<br>";
	} else {
		echo "This color isn't red.<br>";
	}


	$score = 63;
	$grade = "";

	if ($score>80) {
		$grade = "Excellent";
	} else if ($score>70) {
		$grade = "Great";
	} else if ($score>60) {
		$grade = "Good";
	} else if ($score>50) {
		$grade = "Pass";
	} else {
		$grade = "Fail";
	} // no need to check for upper scores as well, as if/else if does this by itself

	echo $grade."<br>";

	echo '<!DOCTYPE html> <!-- ok so this is the html part that makes the input forms -->
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>
	<body>
		<form action="exercise3.php" method="post"> <!-- this tells html which php file this form is "connected" too and what method to "send" input it uses. 
			<p>Full Name</p>
			<input type="text" name="name"> <!-- this is the first input field. type tells html what kind of data it takes and name is the name of the "variable" where its stored
			<p>Enter your age:</p>	
			<input type="number" name="age"> <!-- pretty much the same here except its a number input and the name is age. this is the one were gonna need -->
			<input type="submit" name="submit">
		</form>
	</body>
	</html>';
	

	if(isset($_POST['age'])) { // $_POST[] is the array where all input from forms with the method "post" are saved
	// isset is just a function that checks if age has a value. idk why its used tbh i just saw its good practice, you can just ignore that part and not put it in if you want
		if ($_POST['age'] >= 18) { // $_POST['age'] tells php we want the data from the input field called 'age' 
			echo "Eligible for voting.<br>";
			unset($_POST);
		} else {
			echo "You aren't eligible to vote.<br>";
			unset($_POST);
		}
	} else {
		echo "Please insert your age.<br>";
	}
	

	$strg = "12345678";

	for($i=0; $i < strlen($strg); $i++) {
		echo mb_substr($strg, 0, strlen($strg)-$i)."<br>";
	}

	$strg2 = "*";

	for($i=1; $i <= 8; $i++) {
		echo str_repeat($strg2, $i)."<br>";
	}

	echo "GitHub Pages: https://rkosova.github.io/pineanddine_hamk/home <br>";
	echo "GitHub Repo: https://github.com/rkosova/pineanddine_hamk <br>";

?>
