@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Home Offer</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="well">
                    <h1 class="text-center text-success">{{ Session::get('message') }}</h1>
                        <form action="{{ url('/new-offer') }}" method="POST" id="myform" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="big_image" class="col-sm-3">Big Image</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" name="big_image" id="big_image" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="big_image_percent" class="col-sm-3">Big Image Percent</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="big_image_percent" id="big_image_percent" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="big_image_title" class="col-sm-3">Big Image Title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="big_image_title" id="big_image_title" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mid_image" class="col-sm-3">Mid Image</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" name="mid_image" id="mid_image" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mid_image_title" class="col-sm-3">Mid Image Title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="mid_image_title" id="mid_image_title" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="small_one_image" class="col-sm-3">Small One Image</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" name="small_one_image" id="small_one_image" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="small_one_title" class="col-sm-3">Small One Title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="small_one_title" id="small_one_title" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="small_two_image" class="col-sm-3">Small Two Image</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" name="small_two_image" id="small_two_image" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="small_two_title" class="col-sm-3">Small Two Title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="small_two_title" id="small_two_title" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3"></label>
                                <div class="col-sm-9">
                                    <input class="btn btn-block btn-success" type="submit" name="button" value="ADD Offer Information">
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection