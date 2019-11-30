<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css"> 
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.js"></script>
	</head>
	<body>
		<title>page 1</title>
		<p>Page 1. A summary snapshot presentation of the chosen frontend Framework: Popularity, strengths, weaknesses, which developers mostly use it and for what kind of websites. A summary snapshot presentation of the chosen backend Framework: Popularity, strengths, weaknesses, which developers mostly use it and for what kind of websites.</p>
		<form action="{{ route('installation')}}" method="get">
				<input type="submit" class="ui submit basic button" value="Go to page 2" />
		</form>
		<form action="{{ route('tutorial')}}" method="get">
			<input type="submit" value="Go to page 3" />
		</form>
		<form action="{{ route('demo')}}" method="get">
				<input type="submit" value="Go to page 4" />
		</form>
		<form action="{{ route('experience')}}" method="get">
				<input type="submit" value="Go to page 5" />
		</form>
		<form action="{{ route('credits')}}" method="get">
				<input type="submit" value="Go to page 6" />
		</form>
	</body>
</html>

