var app = angular.module('webDevIntro', ['ngRoute']);

app.config([ '$routeProvider', function($routeProvider){

	$routeProvider
		.when('/home', {
			templateUrl: 'views/home.html',
			controller: 'DefaultController'
		})
		.when('/basic-elements', {
			templateUrl: 'views/basic-elements.html',
			controller: 'DefaultController'
		})
		.when('/lists-and-styling', {
			templateUrl: 'views/lists-and-styling.html',
			controller: 'DefaultController'
		})
		.otherwise({
			redirectTo: '/home'
		});

}]);