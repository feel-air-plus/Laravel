<html>
	<head>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{{$title or 'feel-air-plus'}}}</title>
		<link rel="stylesheet" type="text/css" href="{{{asset('css/app.css')}}}">
		<link rel="stylesheet" type="text/css" href="{{{asset('css/common.css')}}}">

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}
			.p {
				font-size: 12px;
			}
			.container {
				width: auto;
			}
		</style>
	</head>

  <body>

    <div class="jumbotron">
    	<div class="container-fluid">
    		<div class="row-fluid">
    			<div class="col-md-6 col-md-offset-2">
        			<h1>Feel Air Plus</h1>
        			<p>Welcome to Feel Air Plus pages</p>
        			<p><a class="btn btn-primary btn-lg" href="/auth/register" role="button">Regist User(Free) &raquo;</a></p>
        		</div>

				<div class="col-md-4">
					<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="col-md-8 col-md-offset-3">
							<p style="font-size:15px">If you have an account,input here</p>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">E-Mail</label>
							<div class="col-md-8">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Password</label>
							<div class="col-md-8">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8 col-md-offset-3">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8 col-md-offset-3">
								<button type="submit" class="btn btn-success" style="margin-right: 15px;">
									Login
								</button>

								<a href="/password/email">Forgot Your Password?</a>
							</div>
						</div>
						</br>

						<div class="form-group">
							<div class="col-md-9 col-md-offset-3">
								<p style="font-size:15px">If you have an social account,authorize here</p>
								<div class="btn-toolbar">
									<a class="btn btn-info " style="margin-right: 10px;" href="/twitter/login">Twiiter</a>
									<a class="btn btn-primary" style="margin-right: 10px;" href="/facebook/login">Facebook</a>
									<a class="btn btn-default" style="margin-right: 10px;" href="/github/login">Github</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>

	<div class="container-fluid">
		<div class="row-fluid">
		<div class="col-md-4">
			<h2>Contents</h2>
			<p>This is a contents area.This is a contents area.This is a contents area.This is a contents area.This is a contents area.This is a contents area.</p>
			<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		</div>
		<div class="col-md-4">
			<h2>Contents</h2>
			<p>This is a contents area.This is a contents area.This is a contents area.This is a contents area.This is a contents area.This is a contents area.</p>
			<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		</div>
		<div class="col-md-4">
			<h2>Contents</h2>
			<p>This is a contents area.This is a contents area.This is a contents area.This is a contents area.This is a contents area.This is a contents area.</p>
			<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		</div>
		</div>
	</div>



		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</body>
</html>
