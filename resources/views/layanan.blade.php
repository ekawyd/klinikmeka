@extends('layouts.app')
@section('title', 'Layanan – Klinik KDKMP')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Layanan Kami</h1>
        <p>Berbagai layanan kesehatan komprehensif untuk Anda dan keluarga.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="layanan-grid">
            @foreach ($layanan as $item)
            <div class="layanan-card layanan-{{ $item['warna'] }}">
                <div class="lcard-icon">{{ $item['icon'] }}</div>
                <h3>{{ $item['nama'] }}</h3>
                <p>{{ $item['deskripsi'] }}</p>
                <span class="lcard-badge">🕐 {{ $item['jadwal'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection