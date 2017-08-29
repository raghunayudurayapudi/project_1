<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['custid']))
{
	header('location:example.php');
}
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

  <script src="js/movies_info.js"></script>

			<script>
			function product_info(){
	 document.getElementById("product").innerHTML="Welcome";
	obj ={"table1":"products","table2":"movies","table4":"games","limit":10};
	dbParam = JSON.stringify(obj);
	xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("product").innerHTML = this.responseText;
    }
	};
	xmlhttp.open("GET", "products.php?w=" + dbParam, true);	
	xmlhttp.send();
}
			</script>
		<script>
			function orders_info(){
	 document.getElementById("product").innerHTML="Welcome";
	obj ={"table1":"orders"};
	dbParam = JSON.stringify(obj);
	xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("product").innerHTML = this.responseText;
    }
	};
	xmlhttp.open("GET", "order_veiw.php?w=" + dbParam, true);	
	xmlhttp.send();
}
			</script>
		
			
<style>
.navbar-inverse .navbar-nav>li>a {
    color: #293b98;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    border-top: 3px solid #181819;
}
#movie1,#movie_info1{
	color:red;
}
body {margin:0;}
.main {
   /* Used in this example to enable scrolling */
  position:relative
}
.main::after {
    content : "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    background-image: url(images/background1.jpg); 
	background-attachment:fixed;
	background-repeat:no-repeat;
    width: 100%;
    height: 100%;
    opacity : 0.3;
    z-index: -1;
}

.modal-backdrop {
background-color:#a09797;
}
</style>
</head>
<body >

<nav class="navbar navbar-inverse" style="margin-bottom:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BMGR</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#" onclick="product_info()">Veiw Products</a></li>
	  <li><a href="#" onclick="movies_info()">Movies</a></li>
      <li><a href="#">Games</a></li>
	  <li><a href="#" onclick="orders_info()">veiw Orders</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
     <li data-toggle="modal" data-target="#loginModal"><a href="cust_logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
	<div class="container-fluid  main">
	<!--searching the documents-->
	<div>
	 <?php echo $_GET['m'];?>
	</div>
	<div class="row" style="padding:0px;font-size:20px;color:#337ab7; margin-top:20px;">
	<form class="col-sm-12" style="padding:0px;" ><!--search form for the books and journals-->
				<div class="input-group"><!--search bar-->
						<input type="text" class="form-control" placeholder="Search">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit" onsubmit="">
							<i class="glyphicon glyphicon-search"></i>Search
						</button>
						</div>
				</div>
				<div class="radio-inline">
					<label><input type="radio" value="Books" name="filter">Movies</label>
				</div>
				<div class="radio-inline">
					<label><input type="radio" value="Journals" name="filter">Games</label>
				</div>
				<div class="radio-inline">
					<label><input type="radio" value="Author" name="filter">Adventure</label>
				</div>
				<div class="radio-inline">
					<label><input type="radio" value="DocId" name="filter">Shooting</label>
			   </div>
	</form>

	
	</div><!--End of the search box-->
	<div id="product" class="row" style="padding:0px;margin-top:30px;" >
	
			</div>

	
</div>
<!-- login model for the users -->
<!-- end of the login model-->



</body>
</html>