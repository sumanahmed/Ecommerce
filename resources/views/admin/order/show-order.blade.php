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
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Order Total</th>
                                <th>Order Status</th>
                                <th>Payment Type</th>
                                <th>Payment Status</th>
                                <th>Order Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($orders as $order)
                                <tr class="odd gradeX">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->first_name.' '.$order->last_name }}</td>
                                    <td>TK. {{ $order->order_total }}</td>
                                    <td>{{ $order->order_status }}</td>
                                    <td>{{ $order->payment_type }}</td>
                                    <td>{{ $order->payment_status }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>
                                        <a href="{{ url('/view-order-details/'.$order->id) }}" class="btn btn-success btn-xs" title="View Order Details"> <i class="fa fa-eye"></i></a>
                                        <a href="{{ url('/view-order-invoice/'.$order->id) }}" class="btn btn-warning btn-xs" title="View Order Invoice"> <i class="fa fa-arrow-down"></i></a>
                                        <a href="{{ url('/download-invoice/'.$order->id) }}" class="btn btn-info btn-xs" title="Download Invoice"><i class="fa fa-download"></i></a>
                                        <a href="{{ url('/edit-category/'.$order->id) }}" class="btn btn-primary btn-xs" title="Edit Order"><i class="fa fa-edit"></i></a>
                                        <a href="{{ url('/delete-category/'.$order->id) }}" class="btn btn-danger btn-xs" title="Delete Order"><i class="fa fa-remove"></i></a>
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