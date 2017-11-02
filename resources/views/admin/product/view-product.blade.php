@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                @if($message = Session::get('message'))
                    <h1 class="page-header">{{ $message }}</h1>
                @endif
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DataTables Advanced Tables
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <tr>
                                <th>Product ID</th>
                                <td>{{ $products->id }}</td>
                            </tr>
                            <tr>
                                <th>Category Name</th>
                                <td>{{ $products->category_name }}</td>
                            </tr>
                            <tr>
                                <th>Brand Name</th>
                                <td>{{ $products->brand_name }}</td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>{{ $products->product_name }}</td>
                            </tr>
                            <tr>
                                <th>Product Code</th>
                                <td>{{ $products->product_code }}</td>
                            </tr>
                            <tr>
                                <th>Product Price</th>
                                <td>{{ $products->product_price }}</td>
                            </tr>
                            <tr>
                                <th>Product Quantity</th>
                                <td>{{ $products->product_quantity }}</td>
                            </tr>
                            <tr>
                                <th>Product Short Description</th>
                                <td>{{ $products->short_description }}</td>
                            </tr>
                            <tr>
                                <th>Product Long Description</th>
                                <td>{{ $products->long_description }}</td>
                            </tr>
                            <tr>
                                <th>Product Image</th>
                                <td><img src="{{ asset($products->product_image) }}" alt="" width="50" height="50"></td>
                            </tr>
                            <tr>
                                <th>Publication Status</th>
                                <td>{{ $products->publication_status ==1 ? 'Published':'Unpublished' }}</td>
                            </tr>
                        </table>

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
@endsection