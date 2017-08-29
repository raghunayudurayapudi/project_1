<?php 
	error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

  <script src="js/games_info1.js"></script>
  </head>
  <body>
	<div class="container" ng-app="mymodule" ng-controller="mycontroller">
		<table class="table table-striped table-hover">
			<thead>	
				<tr>
				<th>p_Id</th>
				<th>p_name</th>
				<th>plaform</th>
				<th>publisher</th>
				<th>developer</th>
				<th>rating</th>
				<th>rent_price</th>
				<th>buy_price</th>
				<th>Year_released</th>
				</tr>
			</thead>
			<tbody >
				<tr ng-repeat="x in games |orderBy:'rating':'true'">
					<td>{{x.p_Id}}</td>
					<td>{{x.p_name}}</td>
					<td>{{x.plaform}}</td>
					<td>{{x.publisher}}</td>
					<td>{{x.developer}}</td>
					<td>{{x.rating}}</td>
					<td>{{x.rent_price}}</td>
					<td>{{x.buy_price}}</td>
					<td>{{x.Year_released}}</td>
					<td>
						Hello world
				   </td>
				</tr>
			</tbody>
		</table>
	</div>
  </body>
 </html>
  