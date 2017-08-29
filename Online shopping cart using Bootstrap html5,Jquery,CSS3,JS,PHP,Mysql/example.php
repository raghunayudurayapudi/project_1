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

  <script src="js/movies_info.js"></script>
  <script src="js/game_info.js"></script>

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
							function search_info(){
								var x=document.getElementById("Myform").elements[0].value;
	 console.log(x);
	obj ={"table1":x};
	dbParam = JSON.stringify(obj);
    console.log(dbParam);
	xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		console.log('succesful');
        document.getElementById("product").innerHTML = this.responseText;
    }
	};
	xmlhttp.open("GET", "searching.php?w=" + dbParam, true);	
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
      <li class="active"><a href="#" onclick="product_info()">Home</a></li>
      <li><a href="#" onclick="movies_info()">Movies</a></li>
      <li><a href="#" id="movies_info" onclick="games_info()">Games</a></li>
	  <li><a href="#">Contact US</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li><a href="#" role="button" style="margin-right: 20px;padding: 10px;margin-top: 3px;background-color: #c0c1d4;border-color: #bfb3b3;" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#signup" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#" role="button" style="margin-right: 20px;padding: 10px;margin-top: 3px;"class="btn btn-danger btn-sm" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Admin_login</a></li>
	  <li><a href="#" role="button" style="margin-right: 20px;padding: 10px;margin-top: 3px;"class="btn btn-danger btn-sm" data-toggle="modal" data-target="#login1"><span class="glyphicon glyphicon-log-in"></span> UserLogin</a></li>
    </ul>
  </div>
</nav>
	<div class="container-fluid  main">
	<!--searching the documents-->
	<div class="row" style="padding:0px;font-size:20px;color:#337ab7; margin-top:20px;">
	<form class="col-sm-12" style="padding:0px;" id="Myform"><!--search form for the books and journals-->
				<div class="input-group"><!--search bar-->
						<input type="text" class="form-control" placeholder="Search">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit" onclick="search_info()">
							<i class="glyphicon glyphicon-search"></i>Search
						</button>
						</div>
				</div>
				<div class="radio-inline">
					<label><input type="radio" value="movies" name="filter">Movies</label>
				</div>
				<div class="radio-inline">
					<label><input type="radio" value="games" name="filter">Games</label>
				</div>
				<div class="radio-inline">
					<label><input type="radio" value="Adventure" name="filter">Adventure</label>
				</div>
				<div class="radio-inline">
					<label><input type="radio" value="Shooting" name="filter">Shooting</label>
			   </div>
	</form>

	
	</div><!--End of the search box-->
	<div id="product" class="row" style="padding:0px;margin-top:30px;"  >
</div>
<!-- login model for the users -->
<!-- end of the login model-->

	<div id="login" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">x</button>
					<h4>LOGIN</h4>
				</div>
	
			<div class="modal-body">
				<form action="Admin_login.php" method="post">
					<div class="form-group">
						<input type="number" class="form-control" name="email" placeholder="SSN" required="true">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password " required="true">
					</div>
					<br> 
					 <?php echo $_GET['m']."<br>";?>
					<button type="submit" class="btn btn-primary"> LogIn</button>
				</form>
			</div>
			</div>
		</div>
	</div>
	<!--modal for the user Login-->
	<div id="login1" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">x</button>
					<h4> USER LOGIN</h4>
				</div>
	
			<div class="modal-body">
				<form action="user_login.php" method="post">
					<div class="form-group">
						<input type="number" class="form-control" name="user_id" placeholder="user id" required="true">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password " required="true">
					</div>
					<br> 
					 <?php echo $_GET['m']."<br>";?>
					<button type="submit" class="btn btn-primary"> LogIn</button>
				</form>
			</div>
			</div>
		</div>
	</div>
		<!--end of the user login-->
		
	<div id="signup" class="modal fade" role="dialog"><!--this is the modal for the siginup-->
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">x</button>
					<h4>Signup</h4>
				</div>
				<div class="modal-body">
					<h2> ENTER CUSTOMER DETAILS</h2><br>
	 <form  action="customer_table.php" method="POST">
							<div class="form-group">
								<input class="form-control" autocomplete="on" type="number" placeholder="cust Id" name="user_id" required = "false"><!--not requried of the user_id -->
								<?php echo $_GET['m0'];?>
							</div>
							<div class="form-group">
								<input class="form-control"  autocomplete="on" placeholder="First Name"  name="f_name" required = "true">
								
							</div>
							<div class="form-group">
								<input class="form-control" autocomplete="on"  placeholder="Last Name"  name="l_name" required = "true">
								
							</div>
							<div class="form-group">
								<input class="form-control" size=1 autocomplete="on" placeholder="Sex"  name="sex" required = "true">
								
							</div>
							<div class="form-group">
								<input class="form-control" autocomplete="on" type="date" placeholder="Birth Date"  name="B_date" required = "true">
							</div>
							<div class="form-group">
								<input class="form-control" autocomplete="on"  placeholder="street name" name="street_name" required = "true">
							</div>
							<div class="form-group">
								<input class="form-control" autocomplete="on"  placeholder="city"  name="city" required = "true">
								
							</div>
							<div class="form-group">
								<select name="state" class="form-control"  autocomplete="on">
										<option value="Texas">Texas</option>
											<option value="Ohio">Ohio</option>
											<option value="California">California</option>
											<option value="Kanssas">Kanssas</option>
									</select>
								
							</div>
							<div class="form-group">
								<select name="country" class="form-control" autocomplete="on" >
										<option value="USA">USA</option>
										<option value="USA">INDIA</option>
									</select>
								
							</div>
							<div class="form-group">
								<input class="form-control" autocomplete="on" type="number"  placeholder="zipcode" name="zipcode" required = "true">	
							</div>
							<div class="form-group">
								<input class="form-control"   autocomplete="on" placeholder="Phone Number" type="name="phone" required = "true">
								<?php echo $_GET['m']."<br>";?>
							</div>
							<div class="form-group">
								<input class="form-control"  autocomplete="on" type="email"  placeholder="email" name="email" required = "true">	
							</div>
							<div class="form-group">
								<input class="form-control" autocomplete="on"   placeholder="billing" name="billing" required = "true">	
							</div>
						  <button type="submit" name="submit" autocomplete="on"  class="btn btn-info ">Submit</button>
						  <br><br>
						  <?php echo $_GET['m1'];?>
						</form>
				</div>
			</div>
		</div>
	</div><!--end of the modal signup-->
</div>
</body>
</html>
