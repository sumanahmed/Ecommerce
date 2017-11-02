<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){

        return view('front.checkout.checkout-content');
    }

    public function saveCustomerInfo(Request $request){
        $this->validate($request, [
            'first_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|max:10|min:6',
            'phone_number' => 'required|size:11|regex:/(01)[0-9]{9}/',
            'address' => 'required'
        ]);

      $customer = new Customer();
      $customer->first_name  = $request->first_name;
      $customer->last_name  = $request->last_name;
      $customer->email  = $request->email;
      $customer->password  = $request->password;
      $customer->phone_number  = $request->phone_number;
      $customer->address  = $request->address;
      $customer->save();
      return redirect('/shipping-info');
    }

    public function showShippingInfo(){
        return view('front.checkout.shipping-info');
    }

}














