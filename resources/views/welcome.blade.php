@extends('layout.index')

@section('content')
<div class="content-body">
    @if (session('errors'))
    <div class="mb-4 font-medium text-sm text-green-600 alert alert-danger">
        {{ session('errors') }}
    </div>
    @endif
    @if (session('success'))
    <div class="mb-4 font-medium text-sm text-green-600 alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="row">

        <div class="col-md-12">
            <ul class="topstats clearfix">
                <li class="arrow"></li>
                <li class="col-xs-6 col-lg-2">
                    <span class="title"><i class="fa fa-dot-circle-o"></i> Utilisateurs</span>
                    <h3>{{$nbre_user}}</h3>
                    <!-- <span class="diff"><b class="color-down"><i class="fa fa-caret-down"></i> 26%</b> from yesterday</span> -->
                </li>
                <li class="col-xs-6 col-lg-2">
                    <span class="title"><i class="fa fa-calendar-o"></i> Chambres</span>
                    <h3>#</h3>
                    <!-- <span class="diff"><b class="color-up"><i class="fa fa-caret-up"></i> 26%</b> from last week</span> -->
                </li>
                <li class="col-xs-6 col-lg-2">
                    <span class="title"><i class="fa fa-shopping-cart"></i> Boissons</span>
                    <h3 class="color-up">#</h3>
                    <!-- <span class="diff"><b class="color-up"><i class="fa fa-caret-up"></i> 26%</b> from last month</span> -->
                </li>
                <!-- <li class="col-xs-6 col-lg-2">
                        <span class="title"><i class="fa fa-users"></i> Visitors</span>
                        <h3>960</h3>
                        <span class="diff"><b class="color-down"><i class="fa fa-caret-down"></i> 26%</b> from yesterday</span>
                    </li>
                    <li class="col-xs-6 col-lg-2">
                        <span class="title"><i class="fa fa-eye"></i> Page View</span>
                        <h3 class="color-up">46.230</h3>
                        <span class="diff"><b class="color-down"><i class="fa fa-caret-down"></i> 26%</b> from yesterday</span>
                    </li>
                    <li class="col-xs-6 col-lg-2">
                        <span class="title"><i class="fa fa-clock-o"></i> Avarage Time</span>
                        <h3 class="color-down">2:10<small>min</small></h3>
                        <span class="diff"><b class="color-up"><i class="fa fa-caret-up"></i> 26%</b> from last week</span>
                    </li> -->
            </ul>
        </div>
       
        <!-- <div class="r1_graph2 db_box">
                <span class='bold'>2332</span>
                <span class='float-right'><small>USERS ONLINE</small></span>
                <div class="clearfix"></div>
                <span class="db_linesparkline">Loading...</span>
            </div>


            <div class="r1_graph3 db_box hidden-xs">
                <span class='bold'>342/123</span>
                <span class='float-right'><small>ORDERS / SALES</small></span>
                <div class="clearfix"></div>
                <span class="db_compositebar">Loading...</span>
            </div>

        </div>
        <div class="col-lg-4 col-md-5 col-12">

            <div class="r1_graph1 db_box">
                <span class='bold'>98.95%</span>
                <span class='float-right'><small>SERVER UP</small></span>
                <div class="clearfix"></div>
                <span class="db_dynamicbar">Loading...</span>
            </div>


            <div class="r1_graph2 db_box">
                <span class='bold'>2332</span>
                <span class='float-right'><small>USERS ONLINE</small></span>
                <div class="clearfix"></div>
                <span class="db_linesparkline">Loading...</span>
            </div>


            <div class="r1_graph3 db_box hidden-xs">
                <span class='bold'>342/123</span>
                <span class='float-right'><small>ORDERS / SALES</small></span>
                <div class="clearfix"></div>
                <span class="db_compositebar">Loading...</span>
            </div>

        </div>
        <div class="col-lg-4 col-md-5 col-12">

            <div class="r1_graph1 db_box">
                <span class='bold'>98.95%</span>
                <span class='float-right'><small>SERVER UP</small></span>
                <div class="clearfix"></div>
                <span class="db_dynamicbar">Loading...</span>
            </div>


            <div class="r1_graph2 db_box">
                <span class='bold'>2332</span>
                <span class='float-right'><small>USERS ONLINE</small></span>
                <div class="clearfix"></div>
                <span class="db_linesparkline">Loading...</span>
            </div>


            <div class="r1_graph3 db_box hidden-xs">
                <span class='bold'>342/123</span>
                <span class='float-right'><small>ORDERS / SALES</small></span>
                <div class="clearfix"></div>
                <span class="db_compositebar">Loading...</span>
            </div> -->

    </div>

</div> <!-- End .row -->
</div>
@endsection