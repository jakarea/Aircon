
	<footer id="footer"><!--Footer-->		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Phone Help</a></li>
								<li><a href="#">Order With Phone</a></li>
								<li><a href="#">Transport</a></li>
								<li><a href="#">24x7 Service</a></li>								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>AC Type</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Window Ac</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Brands</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Aircon</a></li>
								<li><a href="#">Mitsubishi</a></li>
								<li><a href="#">LG</a></li>
								<li><a href="#">Aircon</a></li>
								<li><a href="#">Haier</a></li>
								<li><a href="#">Chigo</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Aircon</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>								
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © {{date("Y")}} A-IRCON Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://tse.com.bd">The Software Engineers</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
    {{HTML::script('assets/frontend/js/jquery.js')}}
	{{HTML::script('assets/frontend/js/bootstrap.min.js')}}
	{{HTML::script('assets/frontend/js/jquery.scrollUp.min.js')}}
	{{HTML::script('assets/frontend/js/price-range.js')}}
    {{HTML::script('assets/frontend/js/jquery.prettyPhoto.js')}}
    {{HTML::script('assets/frontend/js/main.js')}}
    {{HTML::script('assets/frontend/js/underscore-min.js')}}

    <script type="text/javascript">
    	var menu = {{$acbrand}};
    	function sabina(objss){
    		var ids = '#'+objss;
    	// 	// alert(objss);
    	_.each(menu, function(bbb){
    		var a = '#'+bbb.group_name;    		
    		$(a).addClass('collapse');
    	});

    		$(ids).removeClass('collapse');
    	// $(objss).removeClass('collapse');
    }    
    </script>
</body>
</html>