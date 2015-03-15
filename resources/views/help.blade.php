@extends('layouts.master')

@section('addCss')
<link rel="stylesheet" type="text/css" href="{{asset('css/help.css')}}">
@stop

@section('content')
<div class="panel panel-default content_body">
	<p>画面遷移一覧とwikiです！追加・変更は自由です！</p>
	<article>
		<section>
			<h2>画面遷移一覧</h2>
			<p>
				<ul>
					<li><a href="/">ログイン</a></li>
					<li><a href="/otoiawase">お問い合わせ</a></li>
					<li></li>
				</ul>
			</p>
		</section>
		<section>
			<h2>wiki</h2>
			<table class="table table-striped">
				<tr>
					<td>
						<dl>
							<dt>コントローラーの階層化方法(コントローラを移動して分かりやすくしたい)</dt>
							<dd class="wiki-dd">
								例)LoginControllerをLoginディレクトリに移動したい場合<br>
								1.Loginフォルダを作成<br>
								2.LoginフォルダにLoginControllerに移動する<br>
								3.LoginControllerを開いてnamespaceの指定ディレクトリに\Loginを追加<br>
								4.routes.phpを開いて、LoginControllerに\Loginを追加<br>
								5.コマンドラインを開いてプロジェクトは以下に移動し、$ composer dump-autoload を実行する
							</dd>
						</dl>
					</td>
				</tr>
				<tr>
					<td>
						<dl>
							<dt></dt>
							<dd></dd>
						</dl>
					</td>
				</tr>
				<tr>
					<td>
						<dl>
							<dt></dt>
							<dd></dd>
						</dl>
					</td>
				</tr>
			</table>
		</section>
	</article>
</div>
@stop
