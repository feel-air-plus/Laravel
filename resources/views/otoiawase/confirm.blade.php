@extends('layouts.master')

@section('addCss')
<link rel="stylesheet" type="text/css" href="{{asset('css/otoiawase.css')}}">
@stop

@section('content')
<div class="panel panel-default content_body">
	<div class="panel-heading back_img" style="height:25px;">&nbsp;</div>
	<div class="panel-body form_body">
		<h2>Contact</h2>
		{!! Form::open(['action' => ['OtoiawaseController@postComplete'],'class'=>'form-horizontal']) !!}
			<div class="col-md-5">
				<div class="form-group">
					<dl>
						<dt class="col-sm-2 text_normal">Name:</dt>
						<dd class="col-sm-8 text_bold">{{ $name }}</dd>
					</dl>
					{!! Form::hidden('name', $name) !!}
				</div>
				<div class="form-group">
					<dl>
						<dt class="col-sm-2 text_normal">E-mail:</dt>
						<dd class="col-sm-8 text_bold">{{ $email }}</dd>
					</dl>
					{!! Form::hidden('email', $email) !!}
				</div>
			</div>
			<div class="col-md-7">
				<div class="form-group">
					<dl>
						<dt class="col-sm-2 text_normal">Subject:</dt>
						<dd class="col-sm-8 text_bold">{{ \Config::get('const.OTOIAWASE_SUBJECT.'.$subject) }}</dd>
					</dl>
					{!! Form::hidden('subject', $subject) !!}
				</div>
				<div class="form-group">
					<dl>
						<dt class="col-sm-2 text_normal">Contact:</dt>
						<dd class="col-sm-8 text_bold form_textarea">{!! str_replace(PHP_EOL, "<br>", e($body)) !!}</dd>
					</dl>
					{!! Form::hidden('body', $body) !!}
				</div>
				<div class="form-group">
					<div class="col-sm-offset-8 col-sm-2">
						{!! Form::submit('Back', array('class'=>'btn btn-primary pull-right', 'name'=>'back')) !!}
					</div>
					<div class="col-sm-2">
						{!! Form::submit('Send', array('class'=>'btn btn-primary pull-right', 'name'=>'send')) !!}
					</div>
				</div>
			</div>
		{!! Form::close() !!}
	</div>
	<div class="panel-footer back_img" style="height:25px;">&nbsp;</div>
</div>
@stop
