@extends('layouts.dashboard')

@section('page-title')
	{{HTML::screenHeading('Unit', route('menus.index'))}}
@overwrite

@section('main')
	<div class="tse-form col-md-6 col-md-offset-3">
		<h1>Create Unit</h1>

		<div class="main-form">
			{{ Former::horizonal_open()->action(route('menus.store'))->method('POST') }}
				<div class="row">
			<div class="col-md-10 col-md-offset-1">
			<table class="table table-form table-bordered addrowtable" id="items-table">
				<thead>
					<tr class="thead">												
						<th>MENU</th>
						<th>SUB MENU</th>
					</tr>
				</thead>

				<tbody>

				</tbody>						
						
			</table>			
				<button type="button" class="btn btn-primary btn-xs addrow pull-right" id="add-row" >Add Detail</button>
				</div> 
			</div>
								
		    {{ Former::maction('Save', 'Clear')  }}

			{{ Former::close() }}
		</div>
	</div>
@stop
@section('footer')
<script type="text/template" id="new-item-row">
<tr id="<%=uid%>">	
	<td class="full">
		<select data-tab="2" name="currentItem[<%= uid %>][menu_id]"  class="unit-id quickedit" >
		<% _.each(menu, function(menu){
			%>
			<option value="<%=menu.item_group_id%>"><%=menu.group_name%></option>	
			<%
		})%>
		</select>
	</td>
	<td class="full">
		<select data-tab="2" name="currentItem[<%= uid %>][submenu_id]"  class="unit-id quickedit" >
		<% _.each(submenu, function(submenu){
			%>
			<option value="<%=submenu.category_id%>"><%=submenu.category_name%></option>	
			<%
		})%>
		</select>
	</td>		
</tr>	
</script>
<script type="text/javascript">
var menu = {{$menu}}
var submenu = {{$submenu}}
	$("#add-row").on('click', function(){
		var template = _.template($("#new-item-row").html());
		var uid = _.uniqueId('new-');
		var row = template({'uid': uid, 'menu':menu,'submenu':submenu});
		$("#items-table tbody").append(row);		
	});
</script>
@stop