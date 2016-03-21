@extends('layouts.dashboard')

@section('page-title')
	{{HTML::screenHeading('Item Group', route('inv_unit.index'))}}
@overwrite

@section('main')
	<div class="tse-form col-md-6 col-md-offset-3">
		<h1>Edit Unit</h1>

		<div class="main-form">
			{{ Former::horizonal_open()
				->action(route('inv_unit.update', [$invunit->unit_id]))->method('PUT') }}
			
			{{ Former::populate($invunit) }}

			@include("inv_units.fields")

			{{ Former::maction('update') }}

			{{ Former::close() }}
		</div>
	</div>
@stop