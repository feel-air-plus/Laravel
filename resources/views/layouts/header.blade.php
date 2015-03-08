@section('header')
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<!-- 画面サイズが小さい時に表示されるボタン -->
			<!-- data-targetにcollapseを指定したdivのidを指定すること -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-id">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<h1 style="margin:0px;"><a class="navbar-brand" href="#">{{$h1 or 'feel-air-plus'}}</a></h1>
		</div>
		<div class="collapse navbar-collapse" id="collapse-id">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">コンテンツ１</a></li>
				<li><a href="#">コンテンツ２</a></li>
				<li><a href="#">コンテンツ３</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
@stop
