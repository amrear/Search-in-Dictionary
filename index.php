<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dictionary</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>

<body>
	<div class="container-fluid">
		<form method="get" action="/" class="form-inline">
			<input type="text" name="q" class="form-control" placeholder="Query">
			<button class="btn btn-primary">Search!</button>
		</form>
		<br>
		<ul>
			<?php
			function starts_with($haystack, $needle)
			{
			/* A function that checks if a string starts with another string or not.
			 * `$haystack` is the full string and `$needle` is the string thath has the same starting.
			 */
				$length = strlen($needle);
				return (substr($haystack, 0, $length) === $needle);
			}

			function word_printer($user_input)
			/* This function prints the words that are found in `<li>` tags */
			{
				$file = fopen("words.txt", "r");   // You can also change the file to whatever dictionary you wan't
				while (!feof($file)) {
					$word = fgets($file);
					if (starts_with($word, $user_input) == true) {
						echo "<li> $word </li>";
					}
				}
			}
			if (isset($_GET['q']) && !empty($_GET['q'])) {
				echo "<hr>";
				$q = $_GET['q'];
				echo "YOU SEARCHED FOR $q";
				word_printer($q);
			}
			?>
		</ul>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>

</html>