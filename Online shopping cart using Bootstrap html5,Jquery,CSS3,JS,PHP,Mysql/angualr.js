  <script>

		var myapp=angular.module("mymodule",[]).controller("mycontroller",function($scope,$http){
	console.log('hello world');
	
	$http.get("games_info.php")
    .then(  function (response) { 
	$scope.games = response.data.records;
	console.log($scope.games[0]);
	
	});
	$scope.display=function(){
													var x=document.getElementById("product");
													x.innerHTML="<table class=' table table-responsive table-hover' style='font-size:15px;color:#337ab7;font-family: cursive;'>"+
		"<thead><tr><th>Game_id</th><th>Game_name</th><th>platform</th><th>Publisher</th><th>Developer</th><th>Rating</th><th>Rent_price</th>"+
		"<th>Buy_price</th><th>Buy/Rent</th></tr></thead>"+
		"<tbody><tr ng-repeat='game in games'><td>{{game.p_Id}}</td><td>{{game.p_name}}</td><td>{{game.plaform}}</td><td>{{game.publisher}}</td>"+
		"<td>{{game.developer}}</td><td>{{game.rating}}</td><td>{{game.rent_price}}</td><td>{{game.buy_price}}</td><td><a href='#' class='btn btn-primary'>Rent</a><a href='#' class='btn btn-primary'>Buy</a></td></tr>"+
		"</tbody>"
		+"</table>";
											};

});


	</script>