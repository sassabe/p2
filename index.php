<!DOCTYPEhtml>
<htmml>
<head>
	<title>P2 Password Generator</title>
	<meta charset='utf-8'>
	<link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<?php
	require('password.php');
	?>
</head>
<body class="main">
	<h1>xkcd Password Generator</h1>
	<p class="password"><?php echo $password; ?></p>
	<div class="form_options">
		<form action="index.php" method="POST">
			<label for="number_of_words">Number of Words (2-9)</label>
			<input type="text" maxlength="1" name="number_of_words" id="number">
			<br>
			<input type="checkbox" name="add_number" value="number"></input><label for="add_number">Add a number</label><br>
			<input type="checkbox" name="add_symbol" value="symbol"></input><label for="add_symbol">Add a symbol</label><br>

			<button name="form" type="submit" value="submit" onclick="">Get Password</button>
		</form>
	</div>
	<div class="form_extras">
		<p><a href="http://xkcd.com/936/">xkcd password strength</a></p>
		<img src="images/unicorn-rhino.gif">
	</div>
</body>
</htmml>