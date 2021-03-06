<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Demo</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		<style media="screen">
			body { background-color: lightblue; }
		</style>
	</head>


	<body>
		<div class="huge ui inverted fluid six item menu">
			<a href="page1.html" class="item">Overview</a>
			<a href="page2.html" class="item">Installation</a>
			<a href="page3.html" class="item">Tutorial</a>
			<a href="page4.html" class="active item">Demo</a>
			<a href="page5.html" class="item">Review</a>
			<a href="page6.html" class="item">Team</a>
		</div>

		<div class="ui stackable two column grid">
		  <div style="background-color: #FFFFFF;" class="one column row">
		    <div class="column">
					<h1 style="text-align: center;">@yield('recipeTitle')</h1> <!-- ADD TITLE OF RECIPE HERE-->
				</div>
		  </div>

			<div  class="one column row"> <!-- ADD IMAGE HERE-->
					<img class="ui centered big image" src="@yield('foodImage')">
		  </div>

			<div  class="one black column row"></div>

			<div style="background-color: #FFFFFF; text-align: center;" class="column">
				<h2>INGREDIENTS</h2><br>
				<!-- ADD INGREDIENTS HERE-->
        @yield('ingredients')

			</div>

			<div style="text-align: center;" class="column">
				<h2>RECIPE</h2><br>
				<!--  ADD DIRECTIONS HERE -->
        @yield('instructions')

			</div>

			<div  class="one column row">
				<div class="huge fluid ui black buttons">
					<button class="ui labeled icon button">	<i class="left chevron icon"></i>  Previous Recipe  </button>
					<button class="ui toggle button"> <i class="heart icon"></i>  Save  </button>
					<button class="ui right labeled icon button">  Next Recipe  <i class="right chevron icon"></i> </button>
				</div>
		  </div>


		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" charset="utf-8"></script>
	</body>
</html>
