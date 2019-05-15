<div class="modal fade" id="stream-edit-{{$stream->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color: #000000">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Edit {{$stream->client}}</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="box box-info">
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="{{ route('stream.update', $stream->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        {{--                            Image--}}
                        <div class="form-group">
                            <label for="image" class="col-sm-2 control-label">Client Icon</label>
                            <div class="col-sm-10">
                                <div class="dropify-wrapper">
                                    <input type="file" id="input-file-now" class="dropify" name="icon" data-default-file="{{ asset('images/'.$stream->icon) }}">
                                    <button type="button" class="dropify-clear">Remove</button>
                                </div>

                            </div>
                        </div>
                        {{--                            Name--}}
                        <div class="form-group">
                            <label for="client" class="col-sm-2 control-label">Client Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="client" name="client" value="{{ $stream->client }}"
                                       placeholder="Enter Client Name...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="col-sm-2 control-label">Direct Link</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="link" name="link" value="{{ $stream->link }}"
                                       placeholder="Enter Direct Link...">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="channel" class="col-sm-2 control-label">Channel ID</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="channel" name="channel" value="{{ $stream->channel }}"
                                       placeholder="Enter Channel ID...">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('member.index') }}" type="submit" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-pencil"></i>
                            Update
                        </button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>
</div>