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
	$error ="";
	$password = "";
	//$intValue ="";
	//$count = $_POST['number_of_words'];
	//$max_words = count($wordsArray) -1;
	$number_of_words = 5;
# validation for number of words
if (isset($_POST['number_of_words'])) {
	$number_of_words = $_POST['number_of_words'];
/* 
	if(is_int($intValue) && (1 <= $intValue) OR ($intValue <= 5)) {
	 //valid
		$number_of_words = $intValue;
	} else{
		$error = "Please enter a number between 2 and 5";
		return;
	//invalid
	}*/
} else {
	$number_of_words = 5;
}	

#Generate password: 

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
if (isset($_POST ["add_symbol"])) {
	 	$password .= $symbolsArray[rand(0,5)];
	 }

#Check if value is between 2 and 5


# Validate input  not working

#if user does not enter a numeric value, warn with error message.
/*foreach($_POST as $key => $value) {

if (!ctype_digit($value)) {
	$error = "Please enter a number between 2 and 5";
	return;
}
#if user does not enter anything, warn with error message.
	if (!empty($value)) {
	$error = "Please enter a number between 2 and 5";
	return;
}

}*/
?>

