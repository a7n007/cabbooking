<!DOCTYPE html>
<html>
<head>
	<link href="feedback.css" rel="stylesheet">
	<title>FEED BACK</title>
</head>
<body>
	<body>
		<div class="wrap">
			<h2>Feedback form!</h2>
			<p>Say me 'Hello':</p>
			<form action="insertfb.php" method="post">
				<input type="text"  required name="name" placeholder="You name">
				<input type="email" required  name="email" placeholder="email">
				<textarea name="exp" required  cols="30" rows="10" placeholder="Experience "></textarea>
				<button class="btn" type="submit" onclick=window.location.href='index.php'>Submit</button>
			</form>
		</div>
	</body>
</body>
</html>
