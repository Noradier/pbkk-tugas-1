<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();

        return view('welcome', ['customers' => $customers]);
    }
}
