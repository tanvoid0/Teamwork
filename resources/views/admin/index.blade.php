@extends('admin.includes.app')
@section('main-content')
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
    </section>
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- ./col -->
            <div class="col-lg-2 col-xs-4">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{ count($all) }}</h3>

                        <p>Total Players</p>
                    </div>
                    <div class="icon">
{{--                        <i class="ion ion-pie-graph"></i>--}}
                        <img src="{{ secure_asset('images/lol.png')}}" alt="" style="height: 70px; width:70px;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-2 col-xs-4">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ count($top) }}</h3>

                        <p>Top Players</p>
                    </div>
                    <div class="icon">
                        <img src="{{ secure_asset('images/top.png')}}" alt="" style="height: 70px; width:70px;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-2 col-xs-4">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ count($mid) }}</h3>

                        <p>Mid Players</p>
                    </div>
                    <div class="icon">
                        <img src="{{ secure_asset('images/mid.png')}}" alt="" style="height: 70px; width:70px;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-2 col-xs-4">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{ count($bot) }}</h3>

                        <p>Bot Players</p>
                    </div>
                    <div class="icon">
                        <img src="{{ secure_asset('images/bot.png')}}" alt="" style="height: 70px; width:70px;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-2 col-xs-4">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{ count($sp) }}</h3>

                        <p>Support Players</p>
                    </div>
                    <div class="icon">
                        <img src="{{ secure_asset('images/sp.png')}}" alt="" style="height: 70px; width:70px;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <!-- ./col -->
            <div class="col-lg-2 col-xs-4">
                <!-- small box -->
                <div class="small-box bg-orange">
                    <div class="inner">
                        <h3>{{ count($jg) }}</h3>

                        <p>Jungle Players</p>
                    </div>
                    <div class="icon">
                        <img src="{{ secure_asset('images/jg.png')}}" alt="" style="height: 70px; width:70px;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

    </section>
@endsection