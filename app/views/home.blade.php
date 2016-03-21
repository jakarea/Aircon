@extends('layouts.dashboard')

@section('page-title')
	<h1>Dashboard</h1>
@overwrite

@section('main')
	<div class="tse-form col-md-10 col-md-offset-1">
		<div class="box">
		    <div class="box-header">
		        <h3 class="box-title">Dashboard</h3>
		        <div class="box-tools pull-right">

                </div>
		    </div><!-- /.box-header -->	

		    <div class="box-body">
			    <p> Welcome To GM ENTERPRISE Inventory Management System </p>

			    <div class="row">
			    	<div class="col-md-3 col-sm-6">
					    <div class="small-box bg-aqua">
		                    <div class="inner"> <h3> BDT 5,50,543 </h3> <p> Todays Sales </p></div>
		                    <div class="icon"> <i class="ion ion-bag"></i> </div>
		                    <a href="#" class="small-box-footer"> More info <i class="fa fa-arrow-circle-right"></i> </a>
		                </div>
			    	</div>
			    	<div class="col-md-3 col-sm-6">
					    <div class="small-box bg-green">
		                    <div class="inner"> <h3> 49 </h3> <p> Stock Out Products </p></div>
		                    <div class="icon"> <i class="ion ion-stats-bars"></i> </div>
		                    <a href="#" class="small-box-footer"> More info <i class="fa fa-arrow-circle-right"></i> </a>
		                </div>
			    	</div>
			    	<div class="col-md-3 col-sm-6">
					    <div class="small-box bg-yellow">
		                    <div class="inner"> <h3> 2,04,500 </h3> <p> Todays Collection </p></div>
		                    <div class="icon"> <i class="ion ion-person-add"></i> </div>
		                    <a href="#" class="small-box-footer"> More info <i class="fa fa-arrow-circle-right"></i> </a>
		                </div>
			    	</div>
			    	<div class="col-md-3 col-sm-6">
					    <div class="small-box bg-red">
		                    <div class="inner"> <h3> 50,000 </h3> <p> Todays Payments </p></div>
		                    <div class="icon"> <i class="ion ion-pie-graph"></i> </div>
		                    <a href="#" class="small-box-footer"> More info <i class="fa fa-arrow-circle-right"></i> </a>
		                </div>
			    	</div>
			    </div>
		    </div><!-- /.box-body -->

			
			<div class="box-footer clearfix">
			</div>

		</div> <!-- .box -->
	</div>
@stop