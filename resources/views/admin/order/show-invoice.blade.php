@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <style>
            .invoice-box {
                max-width: 800px;
                margin: auto;
                padding: 30px;
                border: 1px solid #eee;
                box-shadow: 0 0 10px rgba(0, 0, 0, .15);
                font-size:    16px;
                line-height: 24px;
                font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                color: #555;
            }

            .invoice-box table {
                width: 100%;
                line-height: inherit;
                text-align: left;
            }

            .invoice-box table td {
                padding: 5px;
                vertical-align: top;
            }

            .invoice-box table tr td:nth-child(2) {
                text-align: right;
            }

            .invoice-box table tr.top table td {
                padding-bottom: 20px;
            }

            .invoice-box table tr.top table td.title {
                font-size: 45px;
                line-height: 45px;
                color: #333;
            }

            .invoice-box table tr.information table td {
                padding-bottom: 40px;
            }

            .invoice-box table tr.heading td {
                background: #eee;
                border-bottom: 1px solid #ddd;
                font-weight: bold;
            }

            .invoice-box table tr.details td {
                padding-bottom: 20px;
            }

            .invoice-box table tr.item td{
                border-bottom: 1px solid #eee;
            }

            .invoice-box table tr.item.last td {
                border-bottom: none;
            }

            .invoice-box table tr.total td:nth-child(2) {
                border-top: 2px solid #eee;
                font-weight: bold;
            }

            @media only screen and (max-width: 600px) {
                .invoice-box table tr.top table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }

                .invoice-box table tr.information table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }
            }

            /** RTL **/
            .rtl {
                direction: rtl;
                font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            }

            .rtl table {
                text-align: right;
            }

            .rtl table tr td:nth-child(2) {
                text-align: left;
            }
        </style>
        <br/>
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td >
                                    Invoice #: 0000{{ $order->id }}<br>
                                    Order Date: {{ $order->created_at }}<br>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    <h3>Billing Info</h3>
                                    <hr/>
                                    {{ $customer->first_name.' '.$customer->last_name }}<br>
                                    {{ $customer->email }}<br>
                                    {{ $customer->phone_number }}<br>
                                    {{ $customer->address }}
                                </td>

                                <td>
                                    <h3>Shipping Info</h3>
                                    <hr/>
                                    {{ $shipping->full_name }}<br>
                                    {{ $shipping->email }}<br>
                                    {{ $shipping->phone_number }}<br>
                                    {{ $shipping->address }}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class="heading">
                    <td>Item</td>
                    <td> Price</td>
                    <td> Quantity</td>
                    <td> Total Price</td>
                </tr>
                @php($sum = 0)
                @foreach($products as $product)
                <tr class="item">
                    <td>{{$product->product_name}}</td>
                    <td>TK. {{$product->product_price}}</td>
                    <td>{{$product->product_quantity}}</td>
                    <td>TK. {{ $total = $product->product_price*$product->product_quantity}}</td>
                </tr>
                    @php( $sum = $sum+$total)
                @endforeach
                <tr class="total">
                    <td colspan="3"></td>
                    <td>
                        Total: BDT. {{ $sum }}
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection