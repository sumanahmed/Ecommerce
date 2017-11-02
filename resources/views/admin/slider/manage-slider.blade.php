@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                @if($message = Session::get('message'))
                    <h1 class="page-header text-success">{{ $message }}</h1>
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
                                <th>Slider Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($sliders as $slider)
                                <tr class="odd gradeX">
                                    <td>{{ $i++ }}</td>
                                    <td><img src="{{ asset( $slider->slider_img ) }}" alt="" width="100" height="50"></td>
                                    <td>{{ $slider->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        @if($slider->publication_status == 1)
                                            <a href="{{ url('/unpublished-slider/'.$slider->id) }}" class="btn btn-success btn-xs" title="Published Slider"> <i class="fa fa-arrow-up"></i></a>
                                        @else
                                            <a href="{{ url('/published-slider/'.$slider->id) }}" class="btn btn-warning btn-xs" title="Unublished Slider"> <i class="fa fa-arrow-down"></i></a>
                                        @endif
                                        <a href="{{ url('/edit-slider/'.$slider->id) }}" class="btn btn-info btn-xs" title="Edit Slider"><i class="fa fa-edit"></i></a>
                                        <a href="{{ url('/delete-slider/'.$slider->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to Delete?');" title="Delete Slider"><i class="fa fa-remove"></i></a>
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