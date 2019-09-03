<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
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
		/** page structure **/
		#wrapper {
		  display: block;
		  background: #fff;
		  margin: 0 auto;
		  padding: 10px 17px;
		  -webkit-box-shadow: 2px 2px 3px -1px rgba(0,0,0,0.35);
		}

		#keywords {
		  margin: 0 auto;
		  font-size: 1.2em;
		  margin-bottom: 15px;
		}

		#keywords thead {
		  cursor: pointer;
		  background: #c9dff0;
		}

		#keywords thead tr th { 
		  font-weight: bold;
		  padding: 12px 30px;
		  padding-left: 42px;
		}

		#keywords thead tr th span { 
		  padding-right: 20px;
		  background-repeat: no-repeat;
		  background-position: 100% 100%;
		}

		#keywords thead tr th.headerSortUp, #keywords thead tr th.headerSortDown {
		  background: #acc8dd;
		}

		#keywords tbody tr { 
		  color: #555;
		}

		#keywords tbody tr td {
		  text-align: center;
		  padding: 15px 10px;
		}

		#keywords tbody tr td.lalign {
		  text-align: left;
		}
	</style>
</head>
<body>
	<div class="container-login100">
	    <div class="row" >
		    <div class="col-md-12">		    	
			    <center style="padding-bottom: 3%;"><h1>PRODUCTION LIST</h1></center>
			</div>
		    <div class="col-md-12" style="font-size: 12px">
			    <div id="wrapper">	
					<div class="col-md-12"  style="padding-bottom: 3%;">		    	
					    <button button class="btn btn-primary">
					    	<span>
								<i class="fa fa-edit" aria-hidden="true"></i>
								Edit
							</span>
					    </button>	    	
					    <button button class="btn btn-primary">
					    	<span>
								<i class="fa fa-trash" aria-hidden="true"></i>
								Delete
							</span>
					    </button>	    	
					    <button button class="btn btn-primary">
					    	<span>
								<i class="fa fa-print" aria-hidden="true"></i>
								Print
							</span>
					    </button>
					</div>		  
					<table id="keywords" cellspacing="0" cellpadding="0">
					    <thead>
					      <tr>
					        <th><span>No.</span></th>
					        <th><span>Modal Name</span></th>
					        <th><span>Order Date</span></th>
					        <th><span>Quantity</span></th>
					        <th><span>IPW Date</span></th>
					        <th><span>Trial Date</span></th>
					        <th><span>IWM ETS</span></th>
					        <th><span>Validate</span></th>
					      </tr>
					    </thead>
					    <tbody>
					    	<?php for ($i=0; $i < 5; $i++) { ?>					    		
						        <tr>
							      	<td><?php echo ($i+1); ?></td>
							        <td class="lalign">Modal A</td>
							        <td>20/08/2020</td>
							        <td>110</td>
							        <td>22/08/2020</td>
							        <td>25/09/2020</td>
							        <td></td>
							        <td>
							        	<button class="btn btn-info">
							        		finish
							        	</button>
							        	<button class="btn btn-success">
							        		in process
							        	</button>
							        </td>
						        </tr>
					    	<?php } ?>
					    </tbody>
					</table>
				</div> 
			</div>
	    </div>
	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		});
		$(function(){
			$('#keywords').tablesorter(); 
		});
	</script>
	<script src="js/main.js"></script
</body>
</html>