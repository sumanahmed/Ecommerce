@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add New slider</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="well">
                    <h1 class="text-center text-success">{{ Session::get('message') }}</h1>
                    <form  action="{{ url('/new-slider') }}" method="POST" id="myform" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="slider_img" class="col-sm-3">Slider Image</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" name="slider_img" id="slider_img" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="publication_status" class="col-sm-3">Publication Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="publication_status" id="publication_status" required>
                                    <option>---Select Publication Status---</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <input class="btn btn-block btn-success" type="submit" name="button" value="Save Slider Information">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection