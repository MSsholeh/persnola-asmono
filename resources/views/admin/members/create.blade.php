@extends('admin.default')

@section('page-header')
	Member <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['Admin\MemberController@store'],
			'files' => true
		])
	!!}

		@include('admin.members.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
