@extends('layouts.dashboard')

@section('page-title')
	{{HTML::screenHeading('Item Group', route('inv_item_group.index'))}}
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
	<div class="tse-form col-md-6 col-md-offset-3">
		<div class="box">
		    <div class="box-header">
		        <h3 class="box-title">All Item Group</h3>
		        <div class="box-tools pull-right">
                    	{{ Former::inline_open(route('inv_item_group.index'))->method('GET') }}
							{{ Former::text('group_name')->placeholder('Group Name') }}
						{{ Former::submit('Search') }}
						{{Former::close()}}
                </div>
		    </div><!-- /.box-header -->	

		    <div class="box-body">
				<table class="table table-bordered">
					<thead>
						<tr>						
							<th>Group Name</th>						
							<th>Actions</th>
						</tr>
					</thead>

					@foreach($invitemgroups as $invitemgroup)
					<tr>
						
						<td>{{$invitemgroup->group_name}}</td>
												
						
						<td class="action">
							{{ HTML::tableAction(
								route('inv_item_group.index'), $invitemgroup->item_group_id) }}
						</td>
					</tr>
					@endforeach

				</table>
		    </div><!-- /.box-body -->

			
			<div class="box-footer clearfix">
				{{ $invitemgroups->links(); }}
			</div>

		</div> <!-- .box -->
	</div>
@stop