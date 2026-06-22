@extends('layouts.app')
@section('title', 'Dokter – Klinik KDKMP')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Tim Dokter Kami</h1>
        <p>Ditangani oleh dokter berpengalaman dan berdedikasi tinggi.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="dokter-grid">
            @foreach ($dokter as $d)
            <div class="dokter-card">
                <div class="d-avatar">{{ $d['inisial'] }}</div>
                <h3>{{ $d['nama'] }}</h3>
                <p class="d-spesialis">{{ $d['spesialis'] }}</p>
                <p class="d-exp">⏱ {{ $d['pengalaman'] }} pengalaman</p>
                <div class="d-rating">⭐ {{ $d['rating'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection