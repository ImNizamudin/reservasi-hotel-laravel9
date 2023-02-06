<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookingList;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('dashboard.laporan.index', [
            "booking_lists" => BookingList::with(['tipeKamars'])->latest()->where('status', 'SUKSES')->get()
        ]);
    }
}
