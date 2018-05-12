<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MyMDB</title>

	<link rel="icon" type="image/x-icon" href="imdb-icon.ico">
	<link rel="stylesheet" type="text/css" href="bacon.css">
</head>
<body>
	<div class="main">
		<div class="top_heading">
			<div class="logo">
				<img src="imdb-logo.png">
			</div>

			<div class="validators">
			<a href="http://validator.w3.org/check/referer">
				<img src="http://www.w3.org/Icons/valid-xhtml11"
				alt="Validate"/>
			</a>
				<a href="http://jigsaw.w3.org/cssvalidator/
					check/referer">
							<img src="http://jigsaw.w3.org/css-validator/images/vcss"
								alt="Valid CSS!" /></a>
			</div>
		</div>


		<div class="form_part">
			<span>Actor's first/last name:</span>
			<form action="search.php" method="post" class="form-inputs">
				<input type="text" name="first">
				<input type="text" name="last">
				<button type='submit' id="go">GO</button>
			</form>
		</div>

		<div class="main_page">
			<h1>The One Degree of Kevin Bacon</h1>
			<p>Type in an actor's name to see if he/she was ever in a movie with Kevin Bacon!</p>
			<img src="kevin-bacon.jpg">
		</div>
	</div>

	<script type="text/javascript" src="bacon.js"></script>
</body>
</html>