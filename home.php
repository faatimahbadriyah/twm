<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style type="text/css">
		a:hover {
			text-decoration: none;
			color: grey;
		}
		label {
			padding-top: 2%;
		}
	</style>
</head>
<body>
	<div class="container-login100">
	    <div class="row">
		    <div class="col-md-6">
		    	<a href="javascript:;" data-toggle="modal" data-target="#pModal">
		    		<center style="padding: 5%; border: 2px solid grey; border-radius: 70px; background-color: #fff">
			    		<img src="images/production.png" alt="production" width="50%">
			    		<h1 style="margin-top: 3%">Production Control</h1>
			    	</center>
		    	</a>
		    </div>
		    <div class="col-md-6">
		    	<a href="javascript:;" data-toggle="modal" data-target="#cModal">
		    		<center style="padding: 5%; border: 2px solid grey; border-radius: 70px; background-color: #fff">
			    		<img src="images/stock.png" alt="stock" width="50%">
			    		<h1 style="margin-top: 3%">Capacity</h1>
			    	</center>
		    	</a>
		    </div>  
	    </div>
	    
	    <!-- Production Modal -->
		<div class="modal fade" id="pModal">
		  <div class="modal-dialog">
		    <div class="modal-content">

		        <!-- Modal Header -->
		        <div class="modal-header">
			        <h4 class="modal-title">Add Production</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>

	        	<form action="addProduct.php" method="POST">
			        <!-- Modal body -->
			        <div class="modal-body validate-form">
				        <div class="wrap-input100 validate-input">
				        	<label>Modal Name</label>
							<input class="input100" type="text" name="modalName" style="padding: 0 20px 0 20px;">
						</div>
						<div class="wrap-input100 validate-input">
							<label>Order Date</label>
							<input class="input100" type="date" name="orderDate" style="padding: 0 20px 0 20px;">
						</div>
						<div class="wrap-input100 validate-input">
							<label>Quantity</label>
							<input class="input100" type="number" name="quantity" style="padding: 0 20px 0 20px;">
						</div>
						<div class="wrap-input100 validate-input">
							<label>IPW Date</label>
							<input class="input100" type="date" name="ipwDate" style="padding: 0 20px 0 20px;">
						</div>
						<div class="wrap-input100 validate-input">
							<label>Trial Date</label>
							<input class="input100" type="date" name="trialDate" style="padding: 0 20px 0 20px;">
						</div>
				    </div>

			        <!-- Modal footer -->
			        <div class="modal-footer">
				        <div class="container-login100-form-btn">
							<input class="login100-form-btn" type="submit" value="Save">
						</div>
			        </div>
			    </form>
		    </div>
		  </div>
		</div>

		<!-- Capacity Modal -->
		<div class="modal fade" id="cModal">
		  <div class="modal-dialog">
		    <div class="modal-content">

		        <!-- Modal Header -->
		        <div class="modal-header">
			        <h4 class="modal-title">Manage Today's Capacity</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>

		        <!-- Modal body -->
		        <div class="modal-body">
					<div class="wrap-input100 validate-input">
						<label>Capacity (pcs)</label>
						<input class="input100" type="number" name="qty" style="padding: 0 20px 0 20px;">
					</div>
			    </div>

		        <!-- Modal footer -->
		        <div class="modal-footer">
			        <div class="container-login100-form-btn">
						<a class="login100-form-btn" href="#">
							Save
						</a>
					</div>
		        </div>

		    </div>
		  </div>
		</div>
	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script src="js/main.js"></script
</body>
</html>