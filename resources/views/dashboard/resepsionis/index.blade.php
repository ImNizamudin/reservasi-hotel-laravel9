@extends('dashboard.layouts.main')

@section('container')

<style>
    .group {
        display: flex;
        line-height: 28px;
        align-items: center;
        position: relative;
        max-width: 190px;
    }

    .input {
        width: 100%;
        height: 40px;
        line-height: 28px;
        padding: 0 1rem;
        padding-left: 2.5rem;
        border: 2px solid transparent;
        border-radius: 8px;
        outline: none;
        background-color: #fff;
        color: #0d0c22;
        transition: .3s ease;
    }

    .input::placeholder {
        color: #9e9ea7;
    }

    .input:focus,
    input:hover {
        outline: none;
        border-color: rgba(234, 76, 137, 0.4);
        background-color: #fff;
        box-shadow: 0 0 0 4px rgb(234 76 137 / 10%);
    }

    .icon {
        position: absolute;
        left: 1rem;
        fill: #9e9ea7;
        width: 1rem;
        height: 1rem;
    }
</style>

<div style="margin-top: -80px; margin-left: 30px;" class="group">
    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
        <g>
            <path
                d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
            </path>
        </g>
    </svg>
    <input style="width: 300px;" placeholder="Search" type="search" class="input">
</div>

<div style="margin-left: 30px;"
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kode Booking</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-lg-6" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card text-center mb-3">
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

{{-- <div style="margin-left: 30px;" class="table-responsive col-lg">
    <a href="/admin/fasilitas-kamar/create" class="btn btn-primary mb-3"><span><svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" width="20" height="20">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path>
            </svg></span>Tambah Kode Booking</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama Fasilitas</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead> --}}
        {{-- <tbody>
            @foreach ($fkamars as $fkamar)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if ($fkamar->img)
                    <div style="max-height: 350px; max-width: 300px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $fkamar->img) }}" class="img-fluid mt-4"
                            alt="{{ $fkamar->nama }}">
                    </div>
                    @else
                    <img src="https://source.unsplash.com/300x200?hotel-room" class="img-fluid mt-4"
                        alt="Kamar {{ $fkamar->nama }}">
                    @endif
                </td>
                <td>{{ $fkamar->nama }}</td>
                <td class="text-center">
                    <a href="/admin/fasilitas-kamar/{{ $fkamar->id }}/edit" class="badge bg-warning"><span
                            data-feather="edit"></span></a>
                    <form action="/admin/fasilitas-kamar/{{ $fkamar->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Anda Yakin?')"><span
                                data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody> --}}
    </table>
</div>

@endsection