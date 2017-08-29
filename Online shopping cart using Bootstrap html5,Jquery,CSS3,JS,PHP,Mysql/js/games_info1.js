var myapp=angular.module("mymodule",[]).controller("mycontroller",function($scope,$http){
	console.log('hello world');
	$http.get("games_info.php")
    .then(  function (response) { 
	$scope.games = response.data.records;
	console.log($scope.games[0]);});

});