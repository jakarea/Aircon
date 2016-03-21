@extends('layouts.dashboard')

@section('page-title')
	{{HTML::screenHeading('Unit', route('menus.index'))}}
@overwrite

@section('main')

	<div class="col-md-6 col-md-offset-3">
		@if(Session::get('message'))
					<div class="alert alert-dismissable alert-danger">
			  			<button type="button" class="close" data-dismiss="alert">×</button>
			  				<strong>You Can Not Delete This Unit!</strong> This Unit is already engaged.
					</div>
		@endif
	</div>
	<div class="tse-form col-md-6 col-md-offset-3">
		<div class="box">
		    <div class="box-header">
		        <h3 class="box-title">All Unit</h3>
		        <div class="box-tools pull-right">
                    	{{ Former::inline_open(route('menus.index'))->method('GET') }}
							{{ Former::text('unit_name')->placeholder('Unit Name') }}
						{{ Former::submit('Search') }}
						{{Former::close()}}
                </div>
		    </div><!-- /.box-header -->	

		    <div class="box-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Menu</th>
							<th>Sub Menu</th>						
							<th>Actions</th>
						</tr>
					</thead>

					@foreach($menus as $menu)
					<tr>
						<td>{{$menu->group->group_name}}</td>						
						<td>{{$menu->category->category_name}}</td>						
						
						<td class="action">
							{{ HTML::tableAction(
								route('menus.index'), $menu->id) }}
						</td>
					</tr>
					@endforeach

				</table>
		    </div><!-- /.box-body -->

			
			<div class="box-footer clearfix">
				{{ $menus->links(); }}
			</div>

		</div> <!-- .box -->
	</div>
@stop