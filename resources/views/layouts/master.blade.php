<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{$title or 'feel-air-plus'}}</title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/common.css')}}">
		@yield('addCss')
		@yield('add')
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="contcontainer-fluidainer">
			@if ($is_header)
				<header>
			@yield('header')
				</header>
			@endif
			<div class="row-fluidainer">
				@if ($is_sidemenu)
					<div class="col-md-3">
					@yield('sidemenu')
					</div>
					<div class="col-md-9">
						<div class="container-fluid">
						@yield('content')
						</div>
					</div>
				@else
					<div class="col-md-12">
						<div class="container-fluid">
						@yield('content')
						</div>
					</div>
				@endif
			</div>
			<footer class="footer">
			@yield('footer')
			</footer>
		</div>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
		@yield('addJs2')
	</body>
</html>