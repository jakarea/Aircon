@extends('layouts.dashboard')

@section('page-title')
	{{HTML::screenHeading('Item Category', route('inv_item_brand.index'))}}
@overwrite

@section('main')
	<div class="tse-form col-md-6 col-md-offset-3">
		<h1>Edit Category</h1>

		<div class="main-form">
			{{ Former::horizonal_open()
				->action(route('inv_item_brand.update', [$invitembrand->category_id]))->method('PUT') }}
			
			{{ Former::populate($invitembrand) }}

			@include("inv_item_brands.fields")

			{{ Former::maction('update') }}

			{{ Former::close() }}
		</div>
	</div>
@stop