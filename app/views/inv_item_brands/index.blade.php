@extends('layouts.dashboard')

@section('page-title')
	{{HTML::screenHeading('Item Category', route('inv_item_brand.index'))}}
@overwrite

@section('main')

	<div class="col-md-6 col-md-offset-3">
		@if(Session::get('message'))
					<div class="alert alert-dismissable alert-danger">
			  			<button type="button" class="close" data-dismiss="alert">×</button>
			  				<strong>You Can Not Delete This category!</strong> This Category is already engaged.
					</div>
		@endif
	</div>
	<div class="tse-form col-md-6 col-md-offset-3">
		<div class="box">
		    <div class="box-header">
		        <h3 class="box-title">All Item Category</h3>
		        <div class="box-tools pull-right">
                    	{{ Former::inline_open(route('inv_item_brand.index'))->method('GET') }}
							{{ Former::text('category_name')->placeholder('Category Name') }}
						{{ Former::submit('Search') }}
						{{Former::close()}}
                </div>
		    </div><!-- /.box-header -->	

		    <div class="box-body">
				<table class="table table-bordered">
					<thead>
						<tr>						
							<th>Category Name</th>						
							<th>Actions</th>
						</tr>
					</thead>
					@foreach($invitembrands as $invitembrand)
					<tr>
						
						<td>{{$invitembrand->category_name}}</td>
						
						
						<td class="action">
							{{ HTML::tableAction(
								route('inv_item_brand.index'), $invitembrand->category_id) }}
						</td>
					</tr>
					@endforeach

				</table>
		    </div><!-- /.box-body -->

			
			<div class="box-footer clearfix">
				{{ $invitembrands->links(); }}
			</div>

		</div> <!-- .box -->
	</div>
@stop