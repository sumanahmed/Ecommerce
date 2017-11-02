@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add New Category</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="well">
                <h1 class="text-center text-success">{{ Session::get('message') }}</h1>
                <form  action="{{ url('/new-category') }}" method="POST" id="myform" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="category_name" class="col-sm-3">Category Name</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="category_name" id="category_name" placeholder="Type category name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category_description" class="col-sm-3">Category Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="10" name="category_description" id="category_description" placeholder="Type category description" style="resize: vertical;" required></textarea>
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
                            <input class="btn btn-block btn-success" type="submit" name="button" value="Save Category Information">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection