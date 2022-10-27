<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Reset Password</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
    <style>
        .form-control:focus {
  border-color: darkred;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px darkred;
}
    </style>
</head>
<body style="background-color: white;" class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
					<img src="{{asset('img/logo.png')}}" alt="logo" id="brand-identity" class="mx-auto d-block m-5"><!--Brand Identity-->
					
						<div class="card-body">
							<h4 class="card-title">Reset Password</h4>
							<form method="POST" action="/reset-password" class="my-login-validation">
								@csrf
								<div class="form-group">
									<label for="new-password">Password</label>
									<input id="new-password" type="password" class="form-control" name="password" required autofocus data-eye>
                            @error('password')
                                        <div class="error f-16 d-block f-bold text-danger">{{ $message }}</div>
                            @enderror
									<label for="new-password">Confirm Password</label>
									<input id="new-password" type="password" class="form-control" name="password_confirmation" required autofocus data-eye>
                            @error('password')
                                        <div class="error f-16 d-block f-bold text-danger">{{ $message }}</div>
                            @enderror

									<input type="hidden" name="token" value="{{ request()->route('token')}}">
									<input type="hidden" name="email" value="{{ request()->get('email') }}">
									
									<div class="form-text text-muted">
										Make sure your password is strong and easy to remember
									</div>
								</div>

								<div class="form-group m-0">
									<button style="background-color:darkred;border:darkred;" type="submit" class="btn btn-primary btn-block">
										Reset Password
									</button>
								</div>
							</form>
						</div>
					<div class="footer">
                        <br>
						<center>Copyright &copy; 2021 &mdash; dailyBazaar</center> 
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>