@extends('layouts.dashboard')

@section('page-title')
	{{HTML::screenHeading('Item', route('invitems.index'))}}
@overwrite

@section('main')
	<div class="tse-form col-md-10 col-md-offset-1">
		<h1>Edit Item</h1>

		<div class="main-form">
			{{ Former::horizonal_open()
				->action(route('invitems.update', [$invitem->item_id]))->method('PUT') }}
			
			{{ Former::populate($invitem) }}

			@include("inv_items.fields")

			{{ Former::maction('update') }}

			{{ Former::close() }}
		</div>
	</div>
@stop