@extends('layouts.dashboard')

@section('page-title')
	{{HTML::screenHeading('Category', route('inv_item_brand.index'))}}
@overwrite

@section('main')
	<div class="tse-form col-md-6 col-md-offset-3">
		<h1>Create Category</h1>

		<div class="main-form">
			{{ Former::horizonal_open()->action(route('inv_item_brand.store'))->method('POST') }}

			@include("inv_item_brands.fields")
			
		    {{ Former::maction('Save', 'Clear')  }}

			{{ Former::close() }}
		</div>
	</div>
@stop