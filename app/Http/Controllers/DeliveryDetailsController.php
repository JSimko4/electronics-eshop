<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryDetailsController extends Controller
{
    //
    public function showForm () {
        return view('delivery');
    }
}
