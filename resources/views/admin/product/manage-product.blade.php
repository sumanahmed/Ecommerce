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
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Product Name</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Product Code</th>
                                <th>Product Price</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($products as $product)
                                <tr class="odd gradeX">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->category_name }}</td>
                                    <td>{{ $product->brand_name }}</td>
                                    <td>{{ $product->product_code }}</td>
                                    <td>{{ $product->product_price }}</td>
                                    <td>{{ $product->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <a href="{{ url('/view-product/'.$product->id) }}" class="btn btn-info btn-xs" title="View Category"><i class="fa fa-eye"></i></a>
                                        @if($product->publication_status == 1)
                                            <a href="{{ url('/unpublished-product/'.$product->id) }}" class="btn btn-success btn-xs" title="Published Category"> <i class="fa fa-arrow-up"></i></a>
                                        @else
                                            <a href="{{ url('/published-product/'.$product->id) }}" class="btn btn-warning btn-xs" title="Unublished Category"> <i class="fa fa-arrow-down"></i></a>
                                        @endif
                                        <a href="{{ url('/edit-product/'.$product->id) }}" class="btn btn-info btn-xs" title="Edit Category"><i class="fa fa-edit"></i></a>
                                        <a href="{{ url('/delete-product/'.$product->id) }}" class="btn btn-danger btn-xs" title="Delete Category"><i class="fa fa-remove"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
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