<?php

namespace App\Http\Controllers\Resepsionis;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BookingListController extends Controller
{
    public function index()
    {
        return view('resepsionis.index');
    }
}
