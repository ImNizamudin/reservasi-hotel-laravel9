@extends('layouts.main')

@section('container')

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<h1 class="text-center">My Booking Lists</h1>
<h3 class="text-center">{{ $user->nama }}</h3>

<div class="row">
    @foreach ($booking_lists as $booking)
    <div class="col-md-12">
        <div class="card border-dark mb-3" style="max-width: 20rem;">
            <div class="card-header text-center">{{ $booking->status }}</div>
            <div class="card-body">
                <h5 class="card-title text-center">
                    {{ $booking->tipeKamars->nama }} x {{ $booking->jml_kamar }}
                </h5>
                <h4 class="card-text">{{ $booking->nama_pemesan }}</h4>
                <p class="card-text">Tanggal Check-in : {{ $booking->tgl_checkin }}</p>
                <p class="card-text">Tanggal Check-in : {{ $booking->tgl_checkout }}</p>
                <p class="card-text">Total biaya : @rupiah($booking->total)</p>
                <p class="card-text">Pay by : {{ $booking->PayBy }}</p>
                <strong class="card-text">Booking ID : {{ $booking->kode_booking }}</strong>
                <a href="/mybookinglist-print/{{ $booking->id }}" class="btn btn-primary">Simpan Bukti</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div>


<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/jquery.animateNumber.min.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="/js/scrollax.min.js"></script>
<script src="/js/google-map.js"></script>
<script src="/js/main.js"></script>

@endsection