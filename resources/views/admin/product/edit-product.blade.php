@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Update Product</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="well">
                    <h1 class="text-center text-success">{{ Session::get('message') }}</h1>
                    <form name="editProductForm"  action="{{ url('/update-product') }}" method="POST" id="myform" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="category_id" class="col-sm-3"> Product Category</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id" id="category_id" required>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="brand_id" class="col-sm-3"> Product Brand</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="brand_id" id="brand_id" required>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_name" class="col-sm-3">Prodcut Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="product_name" id="product_name" value="{{ $products->product_name }}">
                                <input class="form-control" type="hidden" name="product_id" id="product_name" value="{{ $products->id }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_code" class="col-sm-3">Prodcut Code</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="product_code" id="product_code" value="{{ $products->product_code }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_quantity" class="col-sm-3">Prodcut Quantity</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="number" name="product_quantity" id="product_quantity" value="{{ $products->product_quantity }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_price" class="col-sm-3">Prodcut Price</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="number" name="product_price" id="product_price" value="{{ $products->product_price }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="short_description" class="col-sm-3"> Product short Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" name="short_description" id="short_description" style="resize: vertical;" required>{{ $products->short_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="long_description" class="col-sm-3">Product Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control long_description" rows="10" name="long_description" id="long_description" style="resize: vertical;" required>{{ $products->long_description }}</textarea>
                                <script> CKEDITOR.replace( 'long_description' ); </script>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_image" class="col-sm-3">Product Featured Image</label>
                            <div class="col-sm-9">
                                <img src="{{ asset($products->product_image) }}" alt="" width="50" height="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_image" class="col-sm-3">Update Prodcut Image</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" name="product_image" id="product_image" required>

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
                                <input class="btn btn-block btn-success" type="submit" name="button" value="Update Product Information">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <script>
        document.forms['editProductForm'].elements['category_id'].value='{{ $products->category_id }}';
        document.forms['editProductForm'].elements['brand_id'].value='{{ $products->brand_id }}';
        document.forms['editProductForm'].elements['publication_status'].value='{{ $products->publication_status }}';
    </script>
@endsection