@extends('layouts.main')

@section('container')

{{-- flash message berhasil login. Bikin yang ada waktu trus dipojok. Kalau pakai ini jika halaman redirect nya ttp di
home maka tiap akses home bakal muncul trs flash message nya --}}
{{-- @if (auth()->user()->nama)
<div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
    Login berhasil
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif --}}

<h1>Halaman Home</h1>

@endsection