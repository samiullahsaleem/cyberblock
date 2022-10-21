<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3> Addition | Mathematical operation </h3>
				
			</div>
			<div class="card-body">
				<form   name="addition"  method="POST"  action="getvalue.php"  >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="number1" placeholder="Please Enter 1st number">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" name="number2" placeholder="Please Enter Second Number ">
					</div>
					
					<div class="form-group">
						<input type="submit" value="Submit" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


</body>

<script>

   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>  
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <!------ Include the above in your HEAD tag ---------->



</script>

</html>
