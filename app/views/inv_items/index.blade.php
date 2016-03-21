@extends('layouts.dashboard')

@section('page-title')
	{{HTML::screenHeading('Item', route('invitems.index'))}}
@overwrite

@section('main')
	<div class="col-md-6 col-md-offset-3">
		@if(Session::get('message'))
					<div class="alert alert-dismissable alert-danger">
			  			<button type="button" class="close" data-dismiss="alert">×</button>
			  				<strong>You Can Not Delete This Group!</strong> This Group is already engaged.
					</div>
		@endif
	</div>
	<div class="tse-form col-md-8 col-md-offset-2">
		<div class="box">
		    <div class="box-header">
		        <h3 class="box-title">All Item </h3>
		        <div class="box-tools pull-right">
                    	{{ Former::inline_open(route('invitems.index'))->method('GET') }}
							{{ Former::text('item_heading')->placeholder('Item title') }}
						{{ Former::submit('Search') }}
						{{Former::close()}}
                </div>
		    </div><!-- /.box-header -->	

		    <div class="box-body">
				<table class="table table-bordered">
					<thead>
						<tr>						
							<th>Item Name</th>						
							<th>Item Brand</th>
							<th>Item Type</th>
							<th>Item Price</th>
							<th>Actions</th>
						</tr>
					</thead>

					@foreach($invitems as $item)
					<tr>
						
						<td>{{$item->item_heading}}</td>
						<td>{{$item->group->group_name}}</td>						
						<td>{{$item->category->category_name}}</td>
						<td>{{$item->item_price}}</td>												
						<td class="action">
							{{ HTML::tableAction(
								route('invitems.index'), $item->item_id) }}
						</td>
					</tr>
					@endforeach

				</table>
		    </div><!-- /.box-body -->

			
			<div class="box-footer clearfix">
				{{ $invitems->links(); }}
			</div>

		</div> <!-- .box -->
	</div>
@stop