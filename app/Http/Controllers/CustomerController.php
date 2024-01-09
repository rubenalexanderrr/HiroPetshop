<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; // model yang diimpor

class CustomerController extends Controller
{
    public function getCustomers()
    {
        $customers = Customer::all();

        return view('payment')->with(compact('customers'));
    }

    public function createCustomer()
    {
        return view('customer.form');
    }


    public function insertCustomer(Request $request)
    {
        $customer = new Customer();

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->number = $request->number;
        $customer->payment = $request->payment;
        $customer->delivery = $request->delivery;

        $customer->save();

        return redirect('/cat');
    }

    public function showFormUpdate($customer_id)
    {
        $customer = Customer::find($customer_id);

        return view('edit')->with(compact('customer'));
    }

    public function updateCustomer(Request $request, $customer_id)
    {
        $customer = Customer::find($customer_id);

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->number = $request->number;
        $customer->payment = $request->payment;
        $customer->delivery = $request->delivery;

        $customer->save();

        return redirect('/admin/payment');
    }

    public function deleteCustomer($customer_id)
    {
        Customer::where('id', $customer_id)->delete();

        return redirect('/admin/payment');
    }
}
