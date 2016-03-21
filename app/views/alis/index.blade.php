@include('frontenddashboard.frontdash')
<section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                                
                                
                                    <img src="{{asset('assets/frontend/images/home/image1.jpg')}}" class="girl img-responsive" alt="" />
                                    
                                
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>A</span>-IRCON</h1>
                                    <h2>100% Garenty</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('assets/frontend/images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{asset('assets/frontend/images/home/pricing.png')}}"  class="pricing" alt="" />
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>A</span>-IRCON</h1>
                                    <h2>Free Counciling</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('assets/frontend/images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{asset('assets/frontend/images/home/pricing.png')}}" class="pricing" alt="" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
<section>
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
                                  <?php $submenu = Menu::with('category')->where('menu_id',$brand->item_group_id)->get(); ?>      
                                @foreach($submenu as $actype)
                                            <li><a href="{{route('alis.index', ['group'=>$brand->item_group_id])}}">{{$actype->category->category_name}} </a></li>                                            
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
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						
		@foreach($allItem as $kkk)				
					<div class="product">
                        <div class="productThumb">
                            <a href="{{route('alis.show', [$kkk->item_id] )}}">                                
                             <img src="{{asset($kkk->item_features_image)}}" alt="Carrier MSBC18-HBT 1.5 Ton Wall Mounted Split AC" title="Carrier MSBC18-HBT 1.5 Ton Wall Mounted Split AC">
                            </a>
                        </div>
                        <div class="productDesc">
                            <h3 class="productTitle">
                                <a href="{{route('alis.show', [$kkk->item_id] )}}">{{$kkk->item_heading}}</a>
                            </h3>
                            <div class="productRow smlGapBottom">
                                <label>Stall</label><span>:</span><span>Brand Bazaar</span>
                            </div>
                            <div class="productRow">
                                <label>Item</label><span>:</span><span><strong>Split AC</strong></span>
                            </div>
                        </div>
                        <div class="home_prices">
                            <div class="price">
                                <div class="full">Price</div>
                                <div class="smlGapBottom">
                                    <strong>{{ number_format($kkk->item_price,2) }}</strong></div>                                
                            </div>
                        </div>
                    </div>
					
			@endforeach	

            <div class="box-footer clearfix">
                {{ $allItem->links(); }}
            </div>
            @include('frontfooter.brand')
				
			</div>
		</div>
	</section>
@include('frontfooter.fronfoot')