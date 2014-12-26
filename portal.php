<html>
<head>
<link href="dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<script src="dist/js/jq.js" type="text/javascript"></script>
<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>

<style>
.navbar-natural{
  background-color: #ffffff;
  border-bottom: 1px solid #c01911;
}
.logo{
background-color: #c01911 ;
color: #fff;
border: none;
}
.logo:hover{
  background-color: #ec2c22;
  color: #fff;
  border: none;
}
.valueweb{
  margin-top: 65px;
}
.dont-cros{
margin-right: 20px;
}
.top-dont-cros{
	margin-top: 50px;
}
</style>
</head>
<body >
<div class="container-fluid">
<?php include 'navbar.php';?>
<div class=" valueweb col-md-12">	
	<div class="col-md-offset-4 col-md-4">
		<form class="top-dont-cros">
			<h3 class="text-center"> Portal Masuk</h3>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <div class="checkbox">
		 
		      <a href="#">Lupa Password</a>

		   
		  </div>
		  <button type="submit" class="btn btn-danger col-md-offset-2 col-md-8">Masuk</button>
		</form>
	</div>


</div> 
<!-- navend -->
</div>
</body>
</html>