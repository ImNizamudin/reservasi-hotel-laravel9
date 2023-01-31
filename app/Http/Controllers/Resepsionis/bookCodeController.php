<?php

namespace App\Http\Controllers\Resepsionis;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class bookCodeController extends Controller
{
    public function index()
    {
        return view('resepsionis.kode-booking.index',[
            "title" => "Booking Code"
        ]);
    }
}
