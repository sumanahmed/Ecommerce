<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Download PDF</title>
</head>
<body>
<div class="main">
    <div class="invoice-section" style="width: 700px; height: 100px;">
        <div class="invoice" style="float: left;width: 500px">
            <p>Invoice No : {{ '0000'.$order->id }}</p>
            <p>Order Date : {{ $order->created_at }}</p>
        </div>
        <div class="logo" style="width: 500px;width: 200px; float: right;">
            <img src="" alt="Company Logo" />
        </div>
    </div>
    <div class="info-section" style="width: 700px; height: 300px">
        <div class="billing-info" style="float: left;width: 350px">
            <h2>Billing Info</h2>
            <hr/>
            <p>{{ $customer->first_name.' '.$customer->last_name }}</p>
            <p>{{ $customer->email }}</p>
            <p>{{ $customer->phone_number }}</p>
            <p>{{ $customer->address }}</p>
        </div>
        <div class="shipping-info" style="float: right;width: 350px">
            <h2>Shipping Info</h2>
            <hr/>
            <p>{{ $shipping->full_name }}</p>
            <p>{{ $shipping->email }}</p>
            <p>{{ $shipping->phone_number }}</p>
            <p>{{ $shipping->address }}</p>
        </div>
    </div>


    <div class="item-section">
        <h2>Product Details</h2>
        <table style="width: 700px; min-height: 100px; text-align: center;" border="1">
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->product_name }}</td>
                <td>TK. {{ $product->product_price }}</td>
                <td>{{ $product->product_quantity }}</td>
                <td>TK. {{ $product->product_price*$product->product_quantity }}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="contact-section" style="width: 700px; height: 50px;">
        <div class="contact">
            <p>Thanks <strong>{{ $customer->first_name.' '.$customer->last_name }}</strong> for your valueable order</p>
            <p>If any query, contact with us</p>
            <p>Email: companyemail@gmail.com</p>
            <p>Phone : 0176xxxxxx</p>
            <p>All process managed by <strong>Company name</strong></p>
        </div>
    </div>

</div>

</body>
</html>