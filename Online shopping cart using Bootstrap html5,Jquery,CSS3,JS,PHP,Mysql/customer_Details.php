<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['ssn']))
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
	xmlhttp.open("GET", "products_employee.php?w=" + dbParam, true);	
	xmlhttp.send();
}
			</script>
</head>
<body>

<nav class="navbar navbar-inverse" style="margin-bottom:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BMGR</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="#" onclick="product_info()">Veiw Products</a></li>
      <li class="active"><a href="customer_Details.php" target="_self"> add coustomer</a></li>
	  <li><a href="#" >Customer orders</a></li>
      <li><a href="#">Add Games</a></li>
	  <li><a href="#">Add Movies</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
     <li data-toggle="modal" data-target="#loginModal"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
	<div class="container-fluid  main">
	<!--searching the documents-->
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
	<div style="margin-left:300px; margin-right:500px;">
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
								<input class="form-control"   autocomplete="on" placeholder="Phone Number" type="number" maxlength="10" name="phone" required = "true">
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
<!-- login model for the users -->
<!-- end of the login model-->

</div>

</body>
</html>