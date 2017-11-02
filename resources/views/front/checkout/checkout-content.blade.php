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
                <h3 class="tittle1">You have to login to complete your valuable order. If you are not registered then please register first.</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel-body">
                            <h1 class="text-success text-center">Login Form</h1>
                            <hr>
                            <form action="" method="post" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email" class="col-sm-3">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" id="" class="form-control" />
                                        {{ $errors->has('email') ? $errors->first('email') : ' ' }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-3">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" id="" class="form-control" />
                                        {{ $errors->has('password') ? $errors->first('password') : ' ' }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <input type="submit" name="btn" id="" class="btn btn-success btn-block" value="Login" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel-body">
                            <h1 class="text-success text-center">Registration Form</h1>
                            <hr>
                            <form class="form-horizontal" action="{{ url('/new-customer') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label col-sm-3">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="first_name" class="form-control"/>
                                        {{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="last_name" class="form-control"/>
                                        {{ $errors->has('last_name') ? $errors->first('last_name') : ' ' }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control"/>
                                        {{ $errors->has('email') ? $errors->first('email') : ' ' }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control"/>
                                        {{ $errors->has('password') ? $errors->first('password') : ' ' }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="phone_number" class="form-control"/>
                                        {{ $errors->has('phone_number') ? $errors->first('phone_number') : ' ' }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Address</label>
                                    <div class="col-sm-9">
                                        <textarea name="address" class="form-control" style="resize: vertical"></textarea>
                                        {{ $errors->has('address') ? $errors->first('address') : ' ' }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Registration"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--new-arrivals-->
        <!--single-->
    </div>
@endsection