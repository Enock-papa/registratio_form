
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Registration Page</title>
</head>
<body>

<div class="container" style="width: 50%;">
	<div class="jumbotron">
		<div class="card" style="border-radius: 40px 0px;">
			<div class="text-center text-muted p-5">
				<div class="col-md-12">
			<h1>My Restration Form</h1>

			<form action="insert.php" method="POST" style="border-radius: 40px 0px">
			<div class="input-group mb-3">
  
  <input type="text" class="form-control" required placeholder="FirstName" aria-label="f_name" aria-describedby="basic-addon1" name="firstName">
</div>
			<div class="input-group mb-3">
  
  <input type="text" class="form-control" required placeholder="LastName" aria-label="L_name" aria-describedby="basic-addon1" name="lastName">
</div>
			<div class="input-group mb-3">
  
  <input type="text" class="form-control" size="10" required placeholder="TelephoneNo." aria-label="T_No" aria-describedby="basic-addon1" name="Tel_No">
</div>

				<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="Username" required aria-label="Username" aria-describedby="basic-addon1" name="username">
</div>

<div class="input-group mb-3">
  <input type="text" name="email" class="form-control" required placeholder="Email address" aria-label="Recipient's username" aria-describedby="basic-addon2" na>
  
</div>
<div class="input-group mb-3">
  
  <input type="password" id="password" name="password" required class="form-control" placeholder="Password" aria-describedby="basic-addon1">
</div>
			<div class="input-group mb-3">
  
  <input type="password" id="password" class="form-control" required placeholder="ConfirmPassword" aria-label="pass" aria-describedby="basic-addon1" name="pass_con">
</div>

<div class="btn btn primary">
<input type="checkbox" name="showp" onclick="myClick()">  ShowPassword
</div>

	<div class="row">
							<div class="col-md-12">
								<input style="width: 30%;" value="Sign Up" type="submit" name="signup_button"class="btn btn-primary btn-lg">
							</div>
						</div>
</form>
</div>
</div>
</div>
</div>


	
<script type="text/javascript">
	function myClick(){

		var y = document.getElementById('password');

		if(y.type === 'password'){

			y.type = "text";

	}
	else{

		y.type = "password";
	}
}

$(window).on('load', function() {
  $('#mdb-preloader').delay(1000).fadeOut(300);
});

</script>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
