<!DOCTYPE html>
<html>
	<head>
		<title>main project</title>
		<link rel="stylesheet" type="text/css" href="http://localhost/main project/car images/style2.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
	</head>
	<body>



<?php include 'menu.php'; ?>
	


<section>
		<div class="jumbotron">
				<h1>Contact Us</h1>
				<p>Give your doubt</p>
			</div>
			
			<div class="py-4">
				<h1 class="text-center">Contact Us</h1>
				<div class="w-50 m-auto">
					<form action="userinfo.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" autocomplete="off" class="form-control-range">
							
						</div>
						<div class="form-group">
							<label>Email Id</label>
							<input type="text" name="email" autocomplete="off" class="form-control-range">
							
						</div>
						<div class="form-group">
							<label>Mobile No.</label>
							<input type="text" name="mobile" autocomplete="off" class="form-control-range">
							
						</div>
						<div class="form-group">
							<label>Comments</label>
							<textarea class="form-control" name="comments"></textarea>
							
						</div>
						<button type="submit" class="btn btn-success">Submit</button>
					</form>
				</div>
			</div>
		</section>


		<footer>
			<p class="p-3 bg-dark text-white">@vintagecarsenterprises       +91 99999 00000 12</p>
      	</footer>



			<!---bootsrap part---
		-------
		------>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<!----bootsrap part finished-------
		-----------
		------>
	</body>
</html>