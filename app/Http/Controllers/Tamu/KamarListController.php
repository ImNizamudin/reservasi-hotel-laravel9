<?php

namespace App\Http\Controllers\Tamu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KamarListController extends Controller
{
    public function index()
    {
        return view('kamar',[
            "title" => "Kamar"
        ]);
    }
}
