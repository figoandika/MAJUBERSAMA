<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    function pricing(){
        $data = [
            'products' => Product::all()
        ];
        return view('page.pricing', $data);
    }
}
