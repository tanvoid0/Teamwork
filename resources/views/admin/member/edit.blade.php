@extends('admin.includes.app')
@section('main-content')
    <section class="content-header">
        <h1>
            Update Member
        </h1>
    </section>
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Member Update Form</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="{{ route('member.update', $user->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="box-body">
                            {{--                            Image--}}
                            <div class="form-group">
                                <label for="image" class="col-sm-2 control-label">Profile Picture</label>
                                <div class="col-sm-10">
                                    <div class="dropify-wrapper">
                                        <input type="file" id="input-file-now" class="dropify" name="image" data-default-file="{{ asset('images/user/'.$user->image) }}">
                                        <button type="button" class="dropify-clear">Remove</button>
                                    </div>

                                </div>
                            </div>
                            {{--                            Name--}}
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                                           placeholder="Enter Name...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">phone</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}"
                                           placeholder="Enter Phone...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                                           placeholder="Enter Email...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Password</label>

                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                           placeholder="Enter password if you want to update...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lolid" class="col-sm-2 control-label">LoL Username</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lolid" name="lolid" value="{{ $user->lolid }}"
                                           placeholder="Enter League of Legends Username (Garena Server)">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="messenger" class="col-sm-2 control-label">Messenger Username</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="messenger" name="messenger" value="{{ $user->messenger }}"
                                           placeholder="Enter Messenger Username...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lane1" class="col-sm-2 control-label">Primary Role</label>

                                <div class="col-sm-10">
                                    <select class="form-control" id="lane1" name="lane1">
                                        <option value="top"
                                            @if($user->lane1 == 'top')
                                                selected
                                            @endif
                                        >Top</option>
                                        <option value="mid"
                                            @if($user->lane1 == 'mid')
                                                selected
                                            @endif
                                        >Mid</option>
                                        <option value="bot"
                                            @if($user->lane1 == 'bot')
                                                selected
                                            @endif
                                        >Bot</option>
                                        <option value="sp"
                                            @if($user->lane1 == 'sp')
                                                selected
                                            @endif
                                        >Support</option>
                                        <option value="jg"
                                            @if($user->lane1 == 'jg')
                                                selected
                                            @endif
                                        >Jungle</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lane2" class="col-sm-2 control-label">Secondary Role</label>

                                <div class="col-sm-10">
                                    <select class="form-control" id="lane2" name="lane2">
                                        <option value="top"
                                                @if($user->lane2 == 'top')
                                                selected
                                                @endif
                                        >Top</option>
                                        <option value="mid"
                                                @if($user->lane2 == 'mid')
                                                selected
                                                @endif
                                        >Mid</option>
                                        <option value="bot"
                                                @if($user->lane2 == 'bot')
                                                selected
                                                @endif
                                        >Bot</option>
                                        <option value="sp"
                                                @if($user->lane2 == 'sp')
                                                selected
                                                @endif
                                        >Support</option>
                                        <option value="jg"
                                                @if($user->lane2 == 'jg')
                                                selected
                                                @endif
                                        >Jungle</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address" class="col-sm-2 control-label">Address</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}"
                                           placeholder="Enter Address...">
                                </div>
                            </div>
                            @if(Auth::user()->admin > 0)
                                <div class="form-group">
                                    <label for="admin" class="col-sm-2 control-label">Admin Role</label>

                                    <div class="col-sm-10">
                                        <select class="form-control" id="admin" name="admin">
                                            <option value="0"
                                                    @if($user->admin == 0)
                                                    selected
                                                    @endif
                                            >Member</option>
                                            <option value="1"
                                                    @if($user->admin == 1)
                                                    selected
                                                    @endif
                                            >Officer</option>
                                            @if(Auth::user()->admin >1)
                                                <option value="2"
                                                        @if($user->admin == 2)
                                                        selected
                                                        @endif
                                                >Admin</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            @endif

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{ route('member.index') }}" type="submit" class="btn btn-default">Back</a>
                            <button type="submit" class="btn btn-info pull-right"><i class="fa fa-edit"></i>
                                Update Member
                            </button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>

        </div>
        <!-- /.row -->
        <!-- /.row (main row) -->

    </section>
@endsection