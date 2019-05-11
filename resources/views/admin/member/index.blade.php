@extends('admin.includes.app')
@section('main-content')
    <section class="content-header">
        <h1>
            Members
        </h1>
    </section>
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="box">
                    @if(Auth::user()->admin > 0)
                        <div class="box-header">
                            <a href="{{ route('member.create') }}" class="btn btn-success"><i class="fa fa-plus"></i>
                                Add
                                Member</a>
                        </div>
                @endif
                <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable"
                                           role="grid" aria-describedby="example1_info"
                                           style="font-size:20px; font-weight: bold;">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Lane</th>
                                            <th>Social</th>
                                            @if(Auth::user()->admin > 1)
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr class="
                                                    @if($user->ban)
                                                    danger
@elseif($user->admin >0)
                                                    info
@endif
                                                    ">
                                                <td>{{$user->name}}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                                <td>
                                                    <i><span><img src="{{ secure_asset('images/'.$user->lane1.'.png')}}"
                                                                  alt="" style="width: 20px; height:20px;"
                                                                  data-toggle="tooltip" data-placement="top"
                                                                  title="{{ $user->lane1 }}"></span></i>
                                                    |
                                                    <i><span><img src="{{ secure_asset('images/'.$user->lane2.'.png')}}"
                                                                  alt="" style="width: 20px; height:20px;"
                                                                  data-toggle="tooltip" data-placement="top"
                                                                  title="{{ $user->lane2 }}"></span></i>
                                                </td>
                                                <td>
                                                    <a href="https://sg.op.gg/summoner/userName={{ $user->lolid }}"
                                                       target="_blank" data-toggle="tooltip" data-placement="top"
                                                       title="Summoner Biography">
                                                        <i><span><img src="{{ secure_asset('images/lol.png')}}" alt=""
                                                                      style="width: 20px; height:20px;"></span></i>
                                                    </a>
                                                    |
                                                    <a href="https://www.messenger.com/t/{{ $user->messenger }}"
                                                       target="_blank" data-toggle="tooltip" data-placement="top"
                                                       title="Chat in Messenger">
                                                        <i><span><img src="{{ secure_asset('images/messenger.png')}}" alt=""
                                                                      style="width: 20px; height:20px;"></span></i>
                                                    </a>
                                                </td>
                                                @if(Auth::user()->admin > 1)
                                                    <td>
                                                        <a href="{{ route('member.edit', $user->id) }}"
                                                           class="btn btn-info"
                                                           data-toggle="tooltip"
                                                           data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                                        <form id="delete-form-{{ $user->id }}" method="post"
                                                              action="{{ route('member.destroy', $user->id) }}" style="display:
                                                    none;">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                        </form>

                                                        <a href="#" class="btn btn-danger" data-toggle="tooltip"
                                                           data-placement="top" title="Remove" onclick="
                                                                swal({
                                                                title: 'Delete {{$user->name}}?',
                                                                text: 'Delete Permanently!',
                                                                icon: 'warning',
                                                                buttons: true,
                                                                dangerMode: true,
                                                                })
                                                                .then((willDelete) => {
                                                                if (willDelete) {

                                                                swal('Poof! Summoner Removed!', {
                                                                icon: 'success',
                                                                });
                                                                document.getElementById('delete-form-{{ $user->id }}').submit();
                                                                } else {
                                                                swal('Summoner is still alive!');
                                                                event.preventDefault();
                                                                }
                                                                });
                                                                ">
                                                            <i class="fa fa-trash-o"></i>
                                                        </a>

                                                        <form id="ban-form-{{ $user->id }}" method="get"
                                                              action="{{ url('admin/ban/'.$user->id) }}" style="display:
                                                    none;">
                                                            {{ csrf_field() }}
                                                        </form>

                                                        @if($user->ban)
                                                            <a href="#" class="btn btn-success" data-toggle="tooltip"
                                                               data-placement="top" title="Remove Ban" onclick="
                                                                    swal({
                                                                    title: 'Unblock {{$user->name}}?',
                                                                    text: 'You can Ban him/her later!',
                                                                    icon: 'success',
                                                                    buttons: true,
                                                                    dangerMode: false,
                                                                    })
                                                                    .then((willDelete) => {
                                                                    if (willDelete) {

                                                                    swal('Poof! Trash summoner unblocked!', {
                                                                    icon: 'success',
                                                                    });
                                                                    document.getElementById('ban-form-{{ $user->id }}').submit();
                                                                    } else {
                                                                    swal('Trash is trash anyway!');
                                                                    event.preventDefault();
                                                                    }
                                                                    });
                                                                    "><i class="fa fa-check"></i></a>
                                                        @else
                                                            <a href="#" class="btn btn-warning" data-toggle="tooltip"
                                                               data-placement="top" title="Ban Summoner" onclick="
                                                                    swal({
                                                                    title: 'Ban {{$user->name}}?',
                                                                    text: 'You can pardon him/her later!',
                                                                    icon: 'warning',
                                                                    buttons: true,
                                                                    dangerMode: true,
                                                                    })
                                                                    .then((willDelete) => {
                                                                    if (willDelete) {

                                                                    swal('Poof! Trash summoner banned!', {
                                                                    icon: 'warning',
                                                                    });
                                                                    document.getElementById('ban-form-{{ $user->id }}').submit();
                                                                    } else {
                                                                    swal('Pardon summoner this time!');
                                                                    event.preventDefault();
                                                                    }
                                                                    });
                                                                    "><i class="fa fa-ban"></i></a>
                                                        @endif
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Lane</th>
                                            <th>Social</th>
                                            @if(Auth::user()->admin > 1)
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

        </div>
        <!-- /.row -->
        <!-- /.row (main row) -->

    </section>
@endsection