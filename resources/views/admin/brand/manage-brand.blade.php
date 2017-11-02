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
                                <th>Brand ID</th>
                                <th>Brand Name</th>
                                <th>Brand Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($allBrands as $allBrand)
                                <tr class="odd gradeX">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $allBrand->id }}</td>
                                    <td>{{ $allBrand->brand_name }}</td>
                                    <td>{{ $allBrand->brand_description }}</td>
                                    <td>{{ $allBrand->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        @if($allBrand->publication_status == 1)
                                            <a href="{{ url('/unpublished-brand/'.$allBrand->id) }}" class="btn btn-success btn-xs" title="Published Brand"> <i class="fa fa-arrow-up"></i></a>
                                        @else
                                            <a href="{{ url('/published-brand/'.$allBrand->id) }}" class="btn btn-warning btn-xs" title="Unublished Brand"> <i class="fa fa-arrow-down"></i></a>
                                        @endif
                                        <a href="{{ url('/edit-brand/'.$allBrand->id) }}" class="btn btn-info btn-xs" title="Edit Brand"><i class="fa fa-edit"></i></a>
                                        <a href="{{ url('/delete-brand/'.$allBrand->id) }}" onclick="return confirm('Are you sure to delet?');" class="btn btn-danger btn-xs" title="Delete Brand"><i class="fa fa-remove"></i></a>
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