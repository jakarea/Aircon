@extends('layouts.dashboard')

@section('page-title')
	{{HTML::screenHeading('Unit', route('inv_unit.index'))}}
@overwrite

@section('main')
	<div class="tse-form col-md-6 col-md-offset-3">
		<h1>Create Unit</h1>

		<div class="main-form">
			{{ Former::horizonal_open()->action(route('inv_unit.store'))->method('POST') }}

			@include("inv_units.fields")
			
		    {{ Former::maction('Save', 'Clear')  }}

			{{ Former::close() }}
		</div>
	</div>
@stop