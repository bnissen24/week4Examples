<?php
  
  	// Strings 
	echo '<h2>Strings</h2>';

	$age = 18;
	$name = 'Bryan Nissen';
	$dob = date('Y-m-d', time());

	echo "Hello $name <br><br>";
	echo 'Date of Birth: '.$dob .'<br><br>'; 


	// Arrays 
	/*echo '<h2>Arrays</h2>';

	$states = array('NJ' => 'New Jersey', 'NY' => 'New York', 'PA' => 'Pennsylvania', 'CT' => 'Connecticut', 'DE' => 'Delware');
	print_r($states);

	echo '<ul>';
	foreach ($states as $code => $name) {
		echo "<li>$code : $name</li>";
	}
	echo '</ul>';

	// IF ELSE STATEMENTS 
	echo '<h2>If Else Statements</h2>';

	if ($age < 18) {
		echo "Cannot Vote. Age: $age<br>";
	} else {
		echo "Can Vote. Age: $age<br>";
	}

	$grade = 85;
	$average = 85.6;
	$stringAverage = '85';

	echo '<br><br>';
	if ($grade == $average) {
		echo 'Grade and Average Equal';
	} else {
		echo 'Grande and Average Not Equal';
	}
	echo '<br><br>';
	if ($grade === $average) {
		echo 'Grade and Average Equal';
	} else {
		echo 'Grande and Average Not Equal';
	}

	if ($grade >= 90) {
		echo 'Grade: A<br>';
	} else if ($grade >= 88 && $grade < 90) {
		echo 'Grade: B+<br>';
	} else if ($grade >= 80 && $grade < 88) {
		echo 'Grade: B<br>';
	} else if ($grade >= 78 && $grade < 80) {
		echo 'Grade: C+<br>';
	} else if ($grade >= 70 && $grade < 78) {
		echo 'Grade: C<br>';
	} else if ($grade >= 65 && $grade < 70) {
		echo 'Grade: D';
	} else {
		echo 'Grade: F';
	}

	// Switch Statements
	echo '<h2>Switch</h2>';

	$letterGrade = 'B';

	switch ($letterGrade) {
		case 'A':
			echo 'Amazing Job!';
			break;
		case 'B':
		case 'B+':
			echo 'Great Job!';
			break;
		case 'C':
		case 'C+':
			echo 'Good Job!';
			break;
		case 'D':
		case 'F':
			echo 'Try Again';
			break;
		default:
			echo 'No Data';
	}

	echo '<br></br>';
	$votingStatus = ($age >= 18) ? 'Can Vote' : 'Cannot Vote';
	echo $votingStatus;

	// While Loop
	echo '<h2>While</h2>';

	$count = 0;
	$numRolled = 0;

	while ($count < 100) {
		$number = mt_rand(1, 20);
		if ($number == 20) {
			$numRolled++;
		}
		$count++;
	}

	echo 'Number of Nat 20s rolled: '.$numRolled;

	// For Loops 
	echo '<h2>For Loops</h2>';

	$array = array();

	for ($index = 0; $index < 25; $index++) {
		$array[$index] = mt_rand(1, 20);
	}

	print_r($array);*/


?>
