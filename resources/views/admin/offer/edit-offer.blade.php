@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Update Add</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="well">
                    <h1 class="text-center text-success">{{ Session::get('message') }}</h1>
                    @foreach($adds as $add)
                    <form name="brandEditForm" action="{{ url('/update-add') }}" method="POST" id="myform" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="big_image" class="col-sm-3">Big Image</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" name="big_image" id="big_image" >
                                <img src="{{ $add->big_image }}" alt="" width="80" height="60">
                                <input class="form-control" type="hidden" name="add_id" id="add_id" value="{{ $add->id }}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="big_image_percent" class="col-sm-3">Big Image Percent</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="big_image_percent" id="big_image_percent" value="{{ $add->big_image_percent }}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="big_image_title" class="col-sm-3">Big Image Title</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="big_image_title" id="big_image_title" value="{{ $add->big_image_title }}" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mid_image" class="col-sm-3">Big Image</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" name="mid_image" id="mid_image" >
                                <img src="{{ $add->mid_image }}" alt="" width="80" height="60">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mid_image_title" class="col-sm-3">Mid Image Title</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="mid_image_title" id="mid_image_title" value="{{ $add->mid_image_title }}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="small_one_image" class="col-sm-3">Small One Image</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" name="small_one_image" id="small_one_image" >
                                <img src="{{ $add->small_one_image }}" alt="" width="80" height="60">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="small_one_title" class="col-sm-3">Small One Title</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="small_one_title" id="small_one_title" value="{{ $add->small_one_title }}" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="small_two_image" class="col-sm-3">Small Two Image</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" name="small_two_image" id="small_two_image" >
                                <img src="{{ $add->small_two_image }}" alt="" width="80" height="60">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="small_two_title" class="col-sm-3">Small Two Title</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="small_two_title" id="small_two_title" value="{{ $add->small_two_title }}" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <input class="btn btn-block btn-success" type="submit" name="button" value="Update ADD Information">
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection