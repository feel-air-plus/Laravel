@extends('layouts.master')

@section('addCss')
<link rel="stylesheet" type="text/css" href="{{asset('css/otoiawase.css')}}">
@stop

@section('content')
<div class="panel panel-default content_body">
	<div class="panel-heading back_img" style="height:25px;">&nbsp;</div>
	<div class="panel-body form_body">
		<h2>Contact</h2>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
		{!! Form::open(['action' => ['OtoiawaseController@postConfirm'],'class'=>'form-horizontal']) !!}
			<div class="col-md-5">
				<div class="form-group">
					{!! Form::label('input-name','Name:',array('class'=>'col-sm-2 control-label')) !!}
					<div class="col-sm-5">
						{!! Form::text('name','',array('class'=>'form-control','id'=>'input-name','placeholder'=>'お名前')) !!}
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('input-mail','E-mail:',array('class'=>'col-sm-2 control-label')) !!}
					<div class="col-sm-10">
						{!! Form::text('email','',array('class'=>'form-control','id'=>'input-mail','placeholder'=>'メールアドレス')) !!}
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="form-group">
					{!! Form::label('input-subject','Subject:',array('class'=>'col-sm-2 control-label')) !!}
					<div class="col-sm-10">
						{!! Form::select('subject',array(''=>'選択してください','1'=>'お問い合わせ','2'=>'ご意見','3'=>'その他'),'',array('class'=>'form-control','id'=>'input-subject')) !!}
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('input-contact','Contact:',array('class'=>'col-sm-2 control-label')) !!}
					<div class="col-sm-10">
						{!! Form::textarea('body','',array('class'=>'form-control','rows'=>'5','id'=>'input-contact')) !!}
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						{!! Form::submit('Confirm', array('class'=>'btn btn-primary pull-right', 'name'=>'confirm')) !!}
					</div>
				</div>
			</div>
		{!! Form::close() !!}
	</div>
	<div class="panel-footer back_img" style="height:25px;">&nbsp;</div>
</div>
@stop
