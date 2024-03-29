@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">26</div>
                            <div>Category Info </div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                    <a href="{{ route('manage-category') }}"> <span class="pull-left">View Details</span></a> 
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"></div>
                            <div>Brand Info</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                    <a href="{{ route('manage-category') }}"><span class="pull-left">View Details</span> </a> 
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                           
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"></div>
                            <div> Product Info</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                    <a href="{{ route('manage-product') }}"><span class="pull-left">View Details</span> </a>  
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                          
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"></div>
                            <div>Manage Order</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
            
            <a href="{{ route('manage-order') }}"> <span class="pull-left">View Details</span> </a>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
   
         
@endsection