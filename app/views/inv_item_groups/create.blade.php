@extends('layouts.dashboard')

@section('page-title')
	{{HTML::screenHeading('Item Group', route('inv_item_group.index'))}}
@overwrite

@section('main')
	<div class="tse-form col-md-6 col-md-offset-3">
		<h1>Create Item Group</h1>

		<div class="main-form">
			{{ Former::horizonal_open()->action(route('inv_item_group.store'))->method('POST') }}

			@include("inv_item_groups.fields")
			
		    {{ Former::maction('Save', 'Clear')  }}

			{{ Former::close() }}
		</div>
	</div>
@stop