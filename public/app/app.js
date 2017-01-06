var app = angular.module('my-app',[]).constant('API', 'http://localhost/angularjs-laravel53/');
//UserController
app.controller('UserController', function($scope,$http,API)
{
	//get data
 	$http.get(API + 'list').then(successCallback,errorCallback);
		function successCallback(response)
		{
			var data = response.data;
		  	$scope.user = data;
		}
		function errorCallback(response)
		{
			alert('fail');
		}
});