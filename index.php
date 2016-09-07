
<html>

	<head>
		<meta charset="utf-8"/>
		<title> Hello </title>
		<!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
                      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
                      crossorigin="anonymous">
		<!-- The main CSS file -->
		<link href="./style.css" rel="stylesheet" />
	<body ng-app>

		<!-- The navigation menu will get the value of the "active" variable as a class.
			 The $event.preventDefault() stops the page from jumping when a link is clicked. -->

		<nav class="{{active}}" ng-click="$event.preventDefault()">

			<!-- When a link in the menu is clicked, we set the active variable -->

			<a href="#" class="home" ng-click="active='home'">Home</a>
	
			<a href="#" class="about" ng-click="active='about'">About</a>
			<a href="#" class="contact" ng-click="active='contact'">Contact</a>
		</nav>

		<!-- ng-show will show an element if the value in the quotes is truthful,
			 while ng-hide does the opposite. Because the active variable is not set
			 initially, this will cause the first paragraph to be visible. -->


		<p ng-show="active">You chose <b>{{active}}</b></p>

		<!-- Include AngularJS from Google's CDN -->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
	</body>
</html>
