$(document).ready(function(){
		$("#movies_info").click(function(){
        $("#product").html("<table class=' table table-responsive table-hover' style='font-size:15px;color:#337ab7;font-family: cursive;'>"+
		"<thead><tr><th>Game_id</th><th>Game_name</th><th>platform</th><th>Publisher</th><th>Developer</th><th>Rating</th><th>Rent_price</th>"+
		"<th>Buy_price</th><th>Buy/Rent</th></tr></thead>"+
		"<tbody><tr ng-repeat='game in games'><td>{{game.p_Id}}</td><td>{{game.P_name}}</td><td>{{plaform}}</td><td>{{game.publisher}}</td>"+
		"<td>{{game.developer}}</td><td>{{game.rating}}</td><td>{{game.rent_price}}</td><td>{{game.buy_price}}</td><td><a href='#' class='btn btn-primary'>Rent</a><a href='#' class='btn btn-primary'>Buy</a></td></tr>"+
		"</tbody>"
		+"</table>");
});
});