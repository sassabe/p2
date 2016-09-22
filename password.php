<?php

#Create 2 arrays
#Array for words
$wordsArray = [
	'unicorn',
	'poop',
	'grass',
	'popcorn',
	'cupcake',
	'mystical',
	'purple',
	'puppy',
	'jumping',
	'eating'
	];

$symbolsArray = [
	'!',
	'@',
	'#',
	'$',
	'%'
	];

#variables
	$error = NULL;
	$password = "";
	$number_of_words = 9;


		
#GENERATE PASSWORD: 

# gather number from form 
if (isset($_POST['number_of_words']) && ($_POST['number_of_words'] > 2)) {
	$number_of_words = $_POST['number_of_words'];
} else {
	$number_of_words = 2; //placesaver password with two words
}

#Create place-saver array to collect all array values
$randomWords = array_rand($wordsArray, $number_of_words);

# Create password by looping through arrays using place saver array
foreach ($randomWords as $key => $value) {
	$password .= $wordsArray[$value]. "-";
}

# remove ending hyphen
$password = substr($password, 0, -1);

# add number if checked
if (isset($_POST ["add_number"])) {
		$password = $password.rand(0,9);
	} 
# add symbol if checked
if (isset($_POST ["add_symbol"])) {
	 	$password .= $symbolsArray[rand(0,5)];
	 }


# VALIDATE INPUT

#check if user enters a numeric value; if not, warn with error message.
$number = $_POST['number_of_words'];
$form_result = $_POST['form'];
if (isset($form_result)){
if (is_numeric($number) && $number >=2) {
	echo 'The number you entered is ' . $number. '. This is a valid number.';
}else {
	echo '<div class="error">Please enter only numbers between 2 and 9.</div>';
}
}