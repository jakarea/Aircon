<?php


//macro to create 
Former::macro('maction', function($submit="submit", $reset="clear")
{
	return '<div class="form-group">
				<div class="col-lg-offset-4 col-sm-offset-4 col-lg-8 col-sm-8">
					<span class="waves-effect waves-button waves-input-wrapper">
						<input class="btn-large btn-primary btn" type="submit" value="'.ucfirst($submit).'">
					</span>
					<span class="waves-effect waves-button waves-input-wrapper">
						<input class="btn-large btn-inverse btn" type="reset" value="'.ucfirst($reset).'">
					</span>
				</div>
			</div>';
});


HTML::macro('screenHeading', function($model="department", $base="#/"){
	return '<h1>'. ucfirst($model).
				'<div class="btn-group" role="group" style="margin-left:100px">
					<a data-pjax class="btn btn-default" href="'.$base.'/create">
						<i class="fa fa-save"></i> New
					</a>
					<a data-pjax class="btn btn-default" href="'.$base.'">
						<i class="fa fa-list"></i> All
					</a>
				</div>
			</h1>';
});


HTML::macro('tableAction', function($base, $id){
	return '<a data-pjax class="btn btn-primary btn-xs pull-left"
				href="'.$base.'/'.$id.'/edit">
				<i class="fa fa-edit"></i> Edit
			</a>'
			.Form::open(array("method" => "DELETE", "url" => $base.'/'.$id))
				.Form::submit("delete", array("class" => "btn btn-danger btn-xs"))
			.Form::close();
});

Former::macro('bahead', function($name, $value="", $id="", $autofocus=false){
	$id = !empty($id) ? $id : $name;
	$autofocus = $autofocus ? "autofocus" : "";
	
	return '<div class="form-group">
				<label for="'.$name.'" class="control-label col-lg-4 col-sm-4">'.str_replace("_", " ",$name).'</label>
				<div class="col-lg-8 col-sm-8">
					<input '.$autofocus.' class="form-control typeahead" id="'.$id.'" type="text" name="'.$name.'" value="'.$value.'">
				</div>
			</div>';
});