@extends('admin.includes.app')
@section('main-content')
    <section class="content-header">
        <h1>
            Streaming Channels
        </h1>
        <br>
    </section>
    <section class="content">
        @if(Auth::user()->admin >0 )
            <div class="row">

                <form class="form-horizontal" method="post" action="{{ route('info.update', $live->id) }}"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="stream" class="col-xs-2 control-label">Primary Client for Live Stream</label>

                        <div class="col-xs-2">
                            <select class="form-control" id="stream" name="stream">
                                @foreach($streams as $stream)
                                    <option value="{{ $stream->id }}"
                                            @if($stream->id == $live->id)
                                            selected
                                            @endif
                                    >{{ $stream->client }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xs-2">
                            <button type="submit" class="btn btn-info pull-right"><i class="fa fa-edit"></i>
                                Update Client
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        @endif
        <!-- Small boxes (Stat box) -->
        <div class="row">
        @php($i=0)
        @foreach($streams as $stream)
            <!-- ./col -->
                <div class="col-lg-2 col-xs-4">
                    <!-- small box -->
                    <div class="small-box bg-{{$color[$i++]}}">
                        <div class="inner">
                            <h3>{{ $stream->client }}</h3>
                            <p>Stream</p>
                        </div>
                        <div class="icon">
                            {{--                        <i class="ion ion-pie-graph"></i>--}}
                            <img src="{{ secure_asset('images/'.$stream->icon)}}" alt="" style="height: 70px; width:70px;">
                        </div>
                        <!-- Button trigger modal -->
                        <a target="_blank" href="{{ $stream->link }}" class="small-box-footer">Visit <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        @if(Auth::user()->admin > 0)
                            <a type="button" data-toggle="modal" data-target="#stream-edit-{{$stream->id}}"
                               class="small-box-footer">Edit <i class="fa fa-edit"></i></a>
                        @endif
                    <!-- Modal -->
                        @include('admin.stream.edit')
                    </div>
                </div>
                <!-- ./col -->
        @endforeach
        <!-- ./col -->
        </div>
        <!-- /.row -->

    </section>
@endsection