@include('frontenddashboard.frontdash')
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        @foreach($acbrand as $brand)
                            <div class="panel panel-default" onclick="javascript:sabina('{{$brand->group_name}}')">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            {{$brand->group_name}}
                                        </a>
                                    </h4>
                                </div>

                                    <div id="{{$brand->group_name}}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                @foreach($category as $actype)
                                            <li><a href="{{route('alis.index', ['category'=>$actype->category_id,'group'=>$brand->item_group_id])}}">{{$actype->category_name}} </a></li>                                            
                                @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach        
                                
                            
                        </div><!--/category-products-->
                                                                
                    </div>
                </div>

<!-- end menu -->
<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{asset($item->item1)}}" alt="" />
								<h3>ZOOM</h3>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="{{asset('assets/frontend/images/product-details/new.jpg')}}" class="newarrival" alt="" />
								<h2>{{ $item->item_heading }}</h2>
								<p>Web ID: {{$item->item_id}}</p>								
								<span>
									<input id="bigbutton" type="submit" value="TK {{number_format ($item->item_price,2)}}" />																				
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Phone:</b> 01911049451</p>
								<p><b>Brand:</b> {{$item->group->group_name}}</p>								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Product Description</a></li>																
							</ul>
						</div>
						<div class="tab-content">														
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>										
										<li><a href=""><i class="fa fa-clock-o"></i>{{date("h:i:sa")}}</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>{{date("F j, Y")}}</a></li>
									</ul>
									<p>{{$item->item_description}}</p>																		
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->

					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Product Specification</a></li>																
							</ul>
						</div>
						<div class="tab-content">														
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>										
										<li><a href=""><i class="fa fa-clock-o"></i>{{date("h:i:sa")}}</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>{{date("F j, Y")}}</a></li>
									</ul>
									<table class="table table-striped">										    
										    <tbody>
										      <tr>
										        <td>BTU</td>										        
										        <td>{{$item->btu}}</td>
										      </tr>
										      <tr>
										        <td>Coverage</td>										        
										        <td>{{$item->coverage}}</td>
										      </tr>
										      <tr>
										        <td>Filter Type</td>										        
										        <td>{{$item->filter_type}}</td>
										      </tr>
										      <tr>
										        <td>Cool Speed</td>										        
										        <td>{{$item->cool_speed}}</td>
										      </tr>	
										      <tr>
										        <td>Air Control</td>										        
										        <td>{{$item->air_control}}</td>
										      </tr>
										      <tr>
										        <td>Remote Control</td>										        
										        <td>{{$item->remote_control}}</td>
										      </tr>					
										      <tr>
										        <td>Timer</td>										        
										        <td>{{$item->timer}}</td>
										      </tr>
										      <tr>
										        <td>Energy Efficient</td>										        
										        <td>{{$item->energy_efficient}}</td>
										      </tr>
										      <tr>
										        <td>Temperature Adjustment</td>										        
										        <td>{{$item->temparature_adjustment}}</td>
										      </tr>
										      <tr>
										        <td>Power Consumption</td>										        
										        <td>{{$item->power_consumtion}}</td>
										      </tr>
										      <tr>
										        <td>Warranty</td>										        
										        <td>{{$item->warranty}}</td>
										      </tr>														      										      										      										     										      										      										      										      
										    </tbody>
										  </table>																		
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->

					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Similar Product</a></li>																
							</ul>
						</div>
						<div class="tab-content">														
							<div class="tab-pane fade active in" id="reviews" >
							@foreach($similarProduct as $product)
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset($product->item_features_image)}}" alt="" />
												<h2>TK {{number_format ($product->item_price,2)}}</h2>
												<p>{{$product->item_heading}}</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-eye-slash"></i>Detail</button>
											</div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
						</div>
					</div><!--/category-tab-->
					
					
					
				</div>
			</div>
		</div>
	</section>

@include('frontfooter.fronfoot')

