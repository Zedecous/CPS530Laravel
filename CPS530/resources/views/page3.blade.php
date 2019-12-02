<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Tutorial</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		<style media="screen">
			body { background-color: lightblue; }
		</style>
	</head>


	<body>
		<div class="huge ui inverted fluid six item menu">
			<a href="{{ route('home')}}" class="item">Overview</a>
			<a href="{{ route('installation')}}" class="item">Installation</a>
			<a href="{{ route('tutorial')}}" class="item">Tutorial</a>
			<a href="{{ route('demo')}}" class="active item">Demo</a>
			<a href="{{ route('experience')}}" class="item">Review</a>
			<a href="{{ route('credits')}}" class="item">Team</a>
		</div>

		<div class="ui stackable three column padded grid">

			<div style="background-color: #40c9a9;" class="one column row">
		    <div class="column"><h1 style="text-align: center;">SEMANTIC UI</h1></div>
		  </div>

			<div style="background-color: #40c9a9;" class="column"> <!--   COLUMN 1   -->
				<h3>1. Create a Menu</h3>
				<p>First, specify the number of menu items needed. In this case, we are going to use three.
						This divides the menu bar up into three equal parts.
				</p>
				<pre style="border: 1px solid black;">
 &lt;div class="ui three item menu"&gt;
  &lt;a class="item"&gt;Overview&lt;/a&gt;
  &lt;a class="item"&gt;Tutorial&lt;/a&gt;
  &lt;a class="item"&gt;Demo&lt;/a&gt;
 &lt;/div&gt;</pre>
				<p>This code creates a horizontal menu with three menu items: overview, tutorial and demo.</p>
				<div class="ui three item menu">
				  <a class="item">Overview</a>
				  <a class="item">Tutorial</a>
				  <a class="item">Demo</a>
				</div>
				<p>Now you can customize your menu. </p>
				<p>To make a menu that takes up the size of the container use "fluid".
					This is more for vertical menus because horizontal menus automatically do this.
				</p>
				<pre style="border: 1px solid black;"> &lt;div class="ui fluid vertical menu"&gt;</pre>
				<p>To change the size of the menu bar use "mini", "tiny", "small", "large", "huge" or "massive".
					In this case, we are going to use "mini" to make a smaller menu than the one above.
				</p>
				<pre style="border: 1px solid black;"> &lt;div class="ui mini menu"&gt;</pre>
				<div class="ui mini three item menu">
				  <a class="item">Overview</a>
				  <a class="item">Tutorial</a>
				  <a class="item">Demo</a>
				</div>
				<p>To invert the color of the menu like the one at the top of this page use "inverted".</p>
				<pre style="border: 1px solid black;">&lt;div class="ui inverted menu"&gt;</pre>
				<div class="ui inverted three item menu">
				  <a class="item">Overview</a>
				  <a class="item">Tutorial</a>
				  <a class="item">Demo</a>
				</div>
			</div>


			<div style="background-color: #40c9a9;" class="column"> <!--   COLUMN 2   -->
				<h3>2. Create a Button</h3>
				<p></p>
				<pre style="border: 1px solid black;"> &lt;button class="ui button"&gt;<br>  Button <br> &lt;/button&gt;</pre>
				<p>This code creates a simple button.</p>
				<button class="ui button">
				  Button
				</button>
				<p><br>To change the size of the button use "mini", "tiny", "small", "medium", "large", "big", "huge" or "massive".
					In this case we are going to use "massive" to create a really big button.
				</p>
				<pre style="border: 1px solid black;">&lt;button class="massive ui button"&gt;</pre>
				<button class="massive ui button">
				  Button
				</button>
				<p><br>To change the colour of the button use one of the built-in colours: red, orange, yellow, olive, green,
					teal, blue, violet, purple, pink, brown, grey or black. We are going to create a violet button.
				 </p>
				 <pre style="border: 1px solid black;">&lt;button class="ui violet button"&gt;</pre>
				 <button class="ui violet button">
 				  Button
 				</button>
				<p><br>Finally, we are going to create a button with an icon by using "labeled icon button".
				There are hundreds of icons already built into the framework, you can find all of them in the Semantic UI documention.
				</p>
				<pre style="border: 1px solid black;">&lt;button class="ui labeled icon button"&gt;</pre>
				<p>To add an icon:</p>
				<pre style="border: 1px solid black;">&lt;i class="left chevron icon"&gt;&lt;/i&gt;</pre>
				<div class="ui black buttons">
					<button class="ui labeled icon button">	<i class="left chevron icon"></i>  Previous </button>
					<button class="ui button"> <i class="heart icon"></i>  Save  </button>
					<button class="ui right labeled icon button">  Next <i class="right chevron icon"></i> </button>
				</div>
			</div>


			<div style="background-color: #40c9a9;" class="column"> <!--   COLUMN 3   -->
				<h3>3. Create a Card.</h3>
				<p>Now we are going to create a card like the ones on the home page. This feature is unique to Semantic UI.
					First we create a basic card.
				</p>
				<pre style="border: 1px solid black;">
&lt;div class="ui card"&gt;
 &lt;div class="content"&gt;
  &lt;div class="header"&gt;Popularity&lt;/div&gt;
  &lt;div class="meta"&gt;Joined in 2013&lt;/div&gt;
  &lt;div class="description"&gt;
    &lt;p&gt;Both frameworks are popular.&lt;/p&gt;
  &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</pre>
				<p>This code creates the card below: </p>
				<div class="ui card">
					<div class="content">
						<div class="header">Popularity</div>
						<div class="meta">Joined in 2013</div>
						<div class="description">
							<p>Both frameworks are popular.</p>
						</div>
					</div>
				</div>
				<p>We are going to add the "chart line" icon to the card. To add the icon we are going to need the following code: </p>
				<pre style="border: 1px solid black;">
 &lt;div class="extra content"&gt;
  &lt;i class="chart line icon"&gt;&lt;/i&gt;
  Popularity
 &lt;/div&gt;</pre>
				<p>When we add the icon to the card, we get the complete card.</p>
				<div class="ui card">
					<div class="content">
						<div class="header">Popularity</div>
						<div class="meta">Joined in 2013</div>
						<div class="description">
							<p>Both frameworks are popular.</p>
						</div>
					</div>
					<div class="extra content">
						<i class="chart line icon"></i>
						Popularity
					</div>
				</div>
			</div>
		</div>

		<div class="ui stackable one column padded grid">

			<div style="background-color: #40c9a9;" class="one column row">
		    <div class="red column"><h1 style="text-align: center;">LARAVEL</h1></div>
		  </div>

			<!--  LARAVEL TUTORIAL -->
			<p>Laravel can be used so that there was no repetition between pages. </p>

			<p>You can use blade templates to have one file act as the template and the other file inherits it.</p>
			<br>
			<p>For example: Here is the code to our first page on the scrambled egg tutorial</p>
			<br>
				<code>



				@section('recipeTitle', 'Scrambled Eggs')
				@section('foodImage', 'https://x9wsr1khhgk5pxnq1f1r8kye-wpengine.netdna-ssl.com/wp-content/uploads/Scrambled-with-Milk-930x620.jpg')

				@section('ingredients')
				  <p>4 Eggs<p>
				  <p>1/4 cup milk</p>
				  <p>Salt and pepper</p>
				  <p>2 tsp. butter</p>
				@endsection

				@section('instructions')
				  <p>Beat eggs, milk, salt and pepper in medium bowl until blended</p>
				  <p>Heat butter in large nonstick skillet over medium heat until hot. Pour in egg mixture. As eggs begin to set, gentry pull the eggs across the pan with a spatula, forming large soft curds.</p>
				  <p>Continue cooking - pulling, lifting and folding eggs - until thickened and no visible liquid egg remains. Do not stir constantly. REMOVE from heat. Serve IMMEDIATELY</p>
				@endsection

				@section('previous')
				  http://142.93.159.119:8000/demo1
				@endsection
				@section('next')
				  http://142.93.159.119:8000/demo2
				@endsection
			</code>

			<p>This file shows that it extends page4, which it's actual filename is page4.blade.php. On that page4 template, there are sections that allow you to substitute values or code into the html code to avoid repetition.</p>
			<p>For example, lets look at the section on ingredients in the page4.blade.php</p>
			<xmp>
				<div style="background-color: #FFFFFF; text-align: center;" class="column">
				<h2>INGREDIENTS</h2><br>
        @yield('ingredients')
			</div>
			</xmp>
			<p>The yield keyword above allows us to substitute html code in there using our section keywords in the other files. This allows us to not have any unecessary repetition in the files if they all follow the same page format</p>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" charset="utf-8"></script>
	</body>
</html>
