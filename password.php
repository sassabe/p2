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
	$add_number ="no";
	$add_symbol ="no";
	$count = $_POST['number_of_words'];
	$max_words = count($wordsArray) -1;
	$number_of_words = 5;
	
	

#If user doesn't select a number, generate error message 
#Error message not showing up, need to fix

if (isset($_POST['submit'])){
	if (!isset($_POST['number_of_words'])) {
		$error = "Please select a number :)";
	} 
}
	
#get data from form
$formData = $_POST;
if (!empty($formData['number_of_words'])) {
	$number_of_words = intval($formData['number_of_words']);
}

#function - only working for 1 word...
	for ($i = 0; $i <$number_of_words; $i++) {
		if ($i == 0) {
			if ($number_of_words == 2) {
				$password = ($wordsArray [rand (1, $max_words)]);}

			}

		}
# not working...
		
	if ($add_number == "yes") {
		$password = $password.rand(0,9);
	} 
	 if ($add_symbol == "yes") {
	 	$password = $password.rand($symbolsArray);
	 }






