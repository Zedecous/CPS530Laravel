<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
		<style>
			
			body {
    			font-family: 'Roboto';
			}
			#code_box {
				background-color: rgb(251, 231, 255);
				padding: 10px ;
				border: 2px solid black ;
				display: inline-block;
				margin-right: 100px;
			}
		</style>
		<!--semanticUI stuff-->
		<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css"> <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
		<script src="semantic/dist/semantic.min.js"></script>
	</head>
	<body>
		<title>page 2</title>
		<h1>Installing the Front/Backend Frameworks</h1>
		<h4>
			This section demonstrates how the two frameworks we chose were installed.
		</h4>
		<h2>
			Frontend: Semantic UI
		</h2>
		<ol>
			<li>
				Install NodeJS<br>
				<div id="code_box">
					<code>
						apt-get install curl<br>
						curl --silent --location https://deb.nodesource.com/setup_6.x | bash -<br>
						apt-get install --yes nodejs
					</code>
				</div>
			</li>
			<li>
				Install Gulp<br>
				<div id="code_box">
					<code>
						npm install -g gulp
					</code>
				</div>
			</li>
			<li>
				Include the following code your HTML<br>
				<div id="code_box">
					<code>
						&lt;link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css"&gt;<br>
						&lt;script
							src="https://code.jquery.com/jquery-3.1.1.min.js"<br>
							integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="<br>
							crossorigin="anonymous"&gt;&lt;/script&gt;<br>
						&lt;script src="semantic/dist/semantic.min.js"&gt;&lt;/script&gt;<br>
					</code>
				</div>
			</li>
		</ol>
		<h2>Backend: Laravel</h2>
		<ol>
			<li>
				Install Apache2<br>
				<div id="code_box">
					<code>
						sudo apt update<br>
						sudo apt install apache2
					</code>
				</div>
			</li>
			<li>
				<ol type="a">
					<li>
						Install PHP 7.2 and Related Modules<br>
						<div id="code_box">
							<code>
									sudo apt install php7.2 libapache2-mod-php7.2 php7.2-mbstring php7.2-xmlrpc php7.2-soap php7.2-gd php7.2-xml php7.2-cli php7.2-zip<br>
							</code>
						</div>
					</li>
					<li>
						after PHP is installed, open the default PHP-FPM file. Make the following changes<br>
						<div id="code_box">
							<code>
								memory_limit = 256M<br>
								upload_max_filesize = 64M<br>
								cgi.fix_pathinfo=0
							</code>
						</div>
					</li>
				</ol>
			</li>
			<li>
				<ol type="a">
					<li>
						Install Composer to Download Laravel<br>
						<div id="code_box">
							<code>
									curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
							</code>
						</div>
					</li>
					<li type="a">
						Next you need to change into the directory where you want to make the Laravel project, and create it. In our case the name of the project is CPS530<br>
						<div id="code_box">
							<code>
									cd /var/www/public_html<br>
									sudo composer create-project laravel/laravel CPS530 --prefer-dist
							</code>
						</div>
						<br>this will create a folder with the name "CPS530" under public_html
					</li>
				</ol>
			</li>
			<li>Configure Apache2<br>Create a file, <code>/etc/apache2/sites-available/laravel.conf</code>. Then add the following lines to the file with the following changes:<br>
				<ul><li>MyProject -&gt your project directory</li><li>example.com -&gt your domain name</li></ul><br>
				<div id="code_box">
						<code>
								&ltVirtualHost *:80&gt<br>   
									ServerAdmin admin@example.com<br>
										DocumentRoot /var/www/html/CPS530/public<br>
										ServerName example.com<br>
									
									&ltDirectory /var/www/html/CPS530/public&gt<br>
										Options +FollowSymlinks<br>
										AllowOverride All<br>
										Require all granted<br>
									&lt/Directory&gt<br>
									
										ErrorLog ${APACHE_LOG_DIR}/error.log<br>
										CustomLog ${APACHE_LOG_DIR}/access.log combined<br>
									&lt/VirtualHost&gt
						</code>
					</div>
			</li>
			<li>Enable the Laravel and Rewrite Module<br>Run the following commands<br>
				<div id="code_box">
					<code>
						sudo a2ensite laravel.conf<br>
						sudo a2enmod rewrite
					</code>
				</div>
			</li>
			<li>Restart Apache2 with the following command:
				<div id="code_box">
					<code>
						sudo systemctl restart apache2.service
					</code>
				</div>
			</li>
		</ol>
		<form action="{{ route('home')}}">
				<input type="submit" value="Go to main page" />
		</form>
	</body>
</html>