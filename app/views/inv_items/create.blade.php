@extends('layouts.dashboard')

@section('page-title')
	{{HTML::screenHeading('Item', route('invitems.index'))}}
@overwrite

@section('main')
	<div class="tse-form col-md-10 col-md-offset-1">
		<h1>Create Item</h1>

		<div class="main-form">
			{{ Former::horizonal_open()
				->action(route('invitems.store'))
				->enctype('multipart/form-data')
				->method('POST')
			 }}

			@include("inv_items.fields")
			
		    {{ Former::maction('Save', 'Clear')  }}

			{{ Former::close() }}
		</div>
	</div>
@stop