@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<div class="container mt-4">
    <h1>Galeri</h1>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('images/WhatsApp Image 2025-05-12 at 14.25.44 (2).jpeg') }}" class="img-fluid mb-3" alt="Gambar 1" style="height: 250px; width: 100%; object-fit: cover;">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/WhatsApp Image 2025-05-12 at 14.25.44.jpeg') }}" class="img-fluid" alt="Gambar 2" style="height: 250px; width: 100%; object-fit: cover;">
        </div>
         <div class="col-md-4">
            <img src="{{ asset('images/WhatsApp Image 2025-05-12 at 14.25.44 (1).jpeg') }}" class="img-fluid" alt="Gambar 3" style="height: 250px; width: 100%; object-fit: cover;">
        </div>
    </div>
</div>@endsection