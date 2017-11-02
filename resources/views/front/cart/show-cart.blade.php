@extends('front.master')
@section('title')
    Cart
@endsection
@section('content')
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Cart</span></h3>
        </div>
    </div>
    <!--banner-->
    <div class="content">
        <div class="new-arrivals-w3agile">
            <div class="container">
                <h3 class="text-center">Cart History</h3>
                <table class="table table-bordered">
                    <tr>
                        <th>SL NO</th>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @php($sum=0)
                    @foreach($cartProducts as $cartProduct)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $cartProduct->id }}</td>
                            <td>{{ $cartProduct->name }}</td>
                            <td><img src="{{ asset($cartProduct->options->image) }}" alt="" height="50" width="50"/></td>
                            <td>TK. {{ $cartProduct->price }}</td>
                            <td>
                                <form action="{{ url('/update-cart-product') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="number" name="qty" value="{{ $cartProduct->qty }}">
                                    <input type="hidden" name="rowId" value="{{ $cartProduct->rowId }}">
                                    <input type="submit" name="btn" value="Update">
                                </form>
                            </td>
                            <td>TK. {{ $total = $cartProduct->price*$cartProduct->qty }}</td>
                            <td>
                                <a href="{{ url('/delete-cart-product/'.$cartProduct->rowId) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to Delete ?');"/>
                                <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                        @php($sum = $sum+$total)
                    @endforeach
                </table>
                <table class="table table-bordered">
                    <tr>
                        <th>Sub Total</th>
                        <td>BDT {{ $sum }}</td>
                    </tr>
                    <tr>
                        <th>Discount</th>
                        <td>BDT {{ $discount = 0 }}</td>
                    </tr>
                    <tr>
                        <th>Tax</th>
                        <td>BDT {{ $tax = 0 }}</td>
                    </tr>
                    <tr>
                        <th>Grand Total</th>
                        <td>BDT {{ $grandTotal = ($sum-$discount)+$tax }}</td>
                    </tr>
                </table>
                <a href="{{ url('/') }}" class="btn btn-success">Continue Shopping</a>
                <a href="{{ url('/checkout') }}" class="btn btn-success">Checkout</a>
            </div>
        </div>
        <!--new-arrivals-->
        <!--single-->
    </div>
@endsection