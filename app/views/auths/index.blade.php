<!doctype html>
<html>
<head>
{{HTML::style('assets/build/build.css')}}
{{HTML::style('assets/css/login.css')}}
{{HTML::script('assets/build/build.js')}}
</head>
<body>
<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
		<form role="form" method="POST">
			<fieldset>
				<h2>Please Log In</h2>
				
				@if(Session::has('message'))
					<div class="alert-warning">{{Session::get('message')}}</div>
				@endif

				<hr class="colorgraph">
				<div class="form-group">
                    <input type="username" name="username" id="username" class="form-control input-lg" value="{{Session::get('_old_input.username')}}" placeholder="username">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
				</div>			
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Log In">
					</div>
					
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>
</body>
</html>