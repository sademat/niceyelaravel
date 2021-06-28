<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CustomerController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()){
            $data=Http::get('http://localhost:3000/customers')->json();
           return $data;
        }
        return view('customerlist');
    }
}
