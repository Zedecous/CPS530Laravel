<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		<style media="screen">
			body { background-color: lightblue; }

			div.header {
			  background-color: lightblue;
			  padding: 100px;
			  text-align: center;
			  font-size: 50px;
			}
		</style>
	</head>


	<body>
		<div class="header">
			<h1>CPS 530 <br> Final Assignment</h1>
		</div>

		<!--  MENU  -->
		<div class="huge ui inverted fluid six item menu">
			<a href="{{ route('home')}}" class="item">Overview</a>
			<a href="{{ route('installation')}}" class="item">Installation</a>
			<a href="{{ route('tutorial')}}" class="item">Tutorial</a>
			<a href="{{ route('demo')}}" class="active item">Demo</a>
			<a href="{{ route('experience')}}" class="item">Review</a>
			<a href="{{ route('credits')}}" class="item">Team</a>
		</div>

		<div class="ui stackable four column grid">
		  <div style="background-color: #40c9a9;" class="two column row"> <!-- NAMES OF FRAMEWORKS-->
		    <div class="column"><h1 style="text-align: center;">SEMANTIC UI</h1></div>
		    <div class="red column"><h1 style="text-align: center;">LARAVEL</h1></div>
		  </div>

			<div style="background-color: #40c9a9;" class="column"> <!--  COLUMN 1  -->
				<div class="ui raised link centered card"> <!-- 1ST POST IN COLUMN 1-->
					<div class="content">
						<a class="header">Popularity</a>
						<div class="meta"> <span class="date">Joined in 2013</span> </div>
						<div class="description">
							<br> Semantic UI is one of the newer frameworks. It is often compared to Bootstrap. Although it is popular, it is not as popular as Bootstrap.
						</div>
					</div>
					<div class="extra content">
						<a> <i class="chart line icon"></i> Popularity </a>
					</div>
				</div>
				<div class="ui raised link centered card"> <!-- 2ND POST IN COLUMN 1-->
					<div class="content">
						<a class="header">Which developers mostly use it? </a>
						<div class="meta"> <span class="date">Joined in 2013</span> </div>
						<div class="description">
							<br> It is best for beginners because classes are named closely to how a human would speak. It is also used by developer with a background in Javascript that want a variety of themes and components to work with. It is for developers who want a light-weight framework.
						</div>
					</div>
					<div class="extra content">
						<a> <i class="user circle icon"> </i> Developers	</a>
					</div>
				</div>
				<div class="ui raised link centered card"> <!-- 3RD POST IN COLUMN 1-->
					<div class="content">
						<a class="header">Which websites use it?</a>
						<div class="meta"> <span class="date">Joined in 2013</span> </div>
						<div class="description">
							<br> This is best for building simple, clean and modern websites. Semantics UI is used for the SnapChat website.
						</div>
					</div>
					<div class="extra content">
						<a> <i class="file icon"></i> Websites	</a>
					</div>
				</div>
			</div>

			<div style="background-color: #40c9a9;" class="column"> <!--  COLUMN 2  -->
				<div class="ui raised link centered card"> <!-- 1ST POST IN COLUMN 2-->
					<div class="content">
						<a class="header">Strengths</a>
						<div class="meta"> <span class="date">Joined in 2013</span> </div>
						<div class="description"> <br>
							<p>- user-friendly HTML and CSS</p>
							<p>- easy to learn and implement</p>
							<p>- has a large variety of themes and components (3000+ theming variables and 50+ UI components)</p>
							<p>- has many unique components like Flag, Rail, Reveal, Advertisement, Card, Feed, Statistic, Rating</p>
							<p>- it can integrate with other tools: Ember.js, Angular.js and React</p>
							<p>- provides documentation for components accompanied with examples and source code</p>
						</div>
					</div>
					<div class="extra content">
						<a> <i class="thumbs up icon"></i> Strengths	</a>
					</div>
				</div>
				<div class="ui raised link centered card"> <!-- 2ND POST IN COLUMN 2-->
					<div class="content">
						<a class="header">Weaknesses</a>
						<div class="meta"> <span class="date">Joined in 2013</span> </div>
						<div class="description"> <br>
							<p>- difficult installation</p>
							<p>- prior knowledge of JavaScript is necessary to build more complex websites</p>
						</div>
					</div>
					<div class="extra content">
						<a> <i class="thumbs down icon"></i> Weaknesses	</a>
					</div>
				</div>
			</div>


			<div class="red column"> <!--  COLUMN 3  -->
				<div class="ui raised link centered card"> <!-- 1ST POST IN COLUMN 3-->
					<div class="content">
						<a class="header">Popularity</a>
						<div class="meta"> <span class="date">Joined in 2011</span> </div>
						<div class="description">
							<br> Laravel is one of the newer frameworks. It is already quite popular and is gaining even more popularity. Among PHP frameworks, it is the framework of choice for most developers.
						</div>
					</div>
					<div class="extra content">
						<a> <i class="chart line icon"></i>	Popularity </a>
					</div>
				</div>
				<div class="ui raised link centered card"> <!-- 2ND POST IN COLUMN 3-->
					<div class="content">
						<a class="header">Which developers mostly use it? </a>
						<div class="meta"> <span class="date">Joined in 2011</span> </div>
						<div class="description">
							<br> Laravel is used by developers who have a background in PHP. It is also used by beginners since the framework is easy to learn and is accompanied by detailed documentation.
						</div>
					</div>
					<div class="extra content">
						<a> <i class="user circle icon"></i> Developers	</a>
					</div>
				</div>
				<div class="ui raised link centered card"> <!-- 3RD POST IN COLUMN 3-->
					<div class="content">
						<a class="header">Which websites use it?</a>
						<div class="meta"> <span class="date">Joined in 2011</span> </div>
						<div class="description">
							<br> This is best for almost any type of website because it is easy to learn and provides strong security. Laravel is used by the websites for 9GAG, Swat.io and Packet.
						</div>
					</div>
					<div class="extra content">
						<a> <i class="file icon"></i> Websites	</a>
					</div>
				</div>
			</div>

			<div class="red column"> <!-- COLUMN 4  -->
				<div class="ui raised link centered card"> <!-- 1ST POST IN COLUMN 4-->
					<div class="content">
						<a class="header">Strengths</a>
						<div class="meta"> <span class="date">Joined in 2011</span> </div>
						<div class="description"> <br>
							<p>- easy to learn and use</p>
							<p>- provides clear documentation</p>
							<p>- has a variety of powerful tools for large, robust applications</p>
 							<p>- quick application building and quick execution of web applications</p>
							<p>- highly secure open source framework</p>
							<p>- has many built-in security features like protection against Cross-Site Scripting (XSS), Cross-Site Request Forgery (CSRF) and SQL injections</p>
							<p>- offers many features: Artisan command line tool, object-oriented libraries, Model View Controller (MVC) Architecture support, Eloquent ORM (Object Relational Mapping) support, template engine, unit-testing and security</p>
						</div>
					</div>
					<div class="extra content">
						<a> <i class="thumbs up icon"></i> Strengths	</a>
					</div>
				</div>

				<!-- 2ST POST IN COLUMN 4-->
				<div class="ui raised link centered card">
					<div class="content">
						<a class="header">Weaknesses</a>
						<div class="meta"> <span class="date">Joined in 2011</span> </div>
						<div class="description"> <br>
							<p>- it is light-weight, so there is less built-in support</p>
							<p>- still has a few bugs</p>
							<p>- difficult to transfer legacy systems to Laravel</p>
						</div>
					</div>
					<div class="extra content">
						<a> <i class="thumbs down icon"></i> Weaknesses	</a>
					</div>
				</div>
			</div>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" charset="utf-8"></script>
	</body>
</html>
