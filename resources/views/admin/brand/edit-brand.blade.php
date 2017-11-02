@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add New Brand</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="well">
                    <h1 class="text-center text-success">{{ Session::get('message') }}</h1>
                    <form name="brandEditForm" action="{{ url('/update-brand') }}" method="POST" id="myform" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="brand_name" class="col-sm-3">Brand Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="brand_name" id="brand_name" value="{{ $brandById->brand_name }}" required>
                                <input class="form-control" type="hidden" name="brand_id" id="brand_name" value="{{ $brandById->id }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="brand_description" class="col-sm-3">Brand Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="10" name="brand_description" id="brand_description" style="resize: vertical;" required>{{ $brandById->brand_description }}</textarea>
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
                                <input class="btn btn-block btn-success" type="submit" name="button" value="Save Brand Information">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <script>
        document.forms['brandEditForm'].elements['publication_status'].value = '{{ $brandById->publication_status }}';
    </script>
@endsection