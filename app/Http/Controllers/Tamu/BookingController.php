<?php

namespace App\Http\Controllers\Tamu;

use App\Http\Controllers\Controller;
use App\Models\TipeKamar;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    /**  ada dua jalur untuk memboking kamar
     * 1. dari tipekamar pilih kamar mana, trus booking now, lalu page booking -> kamar auto terselect(inputan)
     * 2. dari btn / aksi membuat boking, klik lalu diarahkan ke page booking -> memilih kamar di select(inputan)
     */

    public function createID(TipeKamar $id)
    {
        return view('booking.index', [
            "title" => "Booking",
            "tipe_kamar" => $id,
        ]);
    }

    public function create()
    {
        return view('booking.index');
    }

    public function store(Request $request)
    {
        return $request;
    }
}
