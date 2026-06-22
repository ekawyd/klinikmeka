@extends('layouts.app')
@section('title', 'Beranda – Klinik KDKMP')

@section('content')

{{-- HERO --}}
<section class="hero">
    <div class="container hero-inner">
        <div class="hero-text">
            <span class="hero-badge">🏥 Klinik Kesehatan Terpercaya</span>
            <h1>Kesehatan Anda,<br><span>Prioritas Kami</span></h1>
            <p>Klinik KDKMP hadir memberikan pelayanan kesehatan terbaik dengan dokter berpengalaman, fasilitas modern, dan layanan ramah untuk seluruh keluarga Anda.</p>
            <div class="hero-btn-group">
                <a href="{{ route('daftar') }}" class="btn btn-white">Daftar Sekarang</a>
                <a href="{{ route('layanan') }}" class="btn btn-outline-white">Lihat Layanan</a>
            </div>
        </div>
        <div class="hero-card">
            <p class="hc-label">Jadwal Hari Ini</p>
            <div class="hc-item"><span class="dot dot-green"></span><span>dr. Ahmad Rizky</span><span class="hc-time">08:00</span></div>
            <div class="hc-item"><span class="dot dot-blue"></span><span>dr. Sari Indah</span><span class="hc-time">10:00</span></div>
            <div class="hc-item"><span class="dot dot-yellow"></span><span>drg. Budi W.</span><span class="hc-time">13:00</span></div>
            <div class="hc-item"><span class="dot dot-green"></span><span>dr. Nina Aulia</span><span class="hc-time">15:00</span></div>
        </div>
    </div>
</section>

{{-- STATS --}}
<section class="stats-bar">
    <div class="container stats-grid">
        <div class="stat-item"><div class="stat-num">1.200+</div><div class="stat-lbl">Pasien Dilayani</div></div>
        <div class="stat-item"><div class="stat-num">8</div><div class="stat-lbl">Dokter & Spesialis</div></div>
        <div class="stat-item"><div class="stat-num">12</div><div class="stat-lbl">Layanan Tersedia</div></div>
        <div class="stat-item"><div class="stat-num">6</div><div class="stat-lbl">Hari Operasional</div></div>
    </div>
</section>

{{-- LAYANAN --}}
<section class="section">
    <div class="container">
        <div class="section-head">
            <h2>Layanan Kami</h2>
            <p>Kami menyediakan berbagai layanan kesehatan komprehensif untuk Anda dan keluarga.</p>
        </div>
        <div class="layanan-grid">
            @foreach ($layanan as $item)
            <div class="layanan-card layanan-{{ $item['warna'] }}">
                <div class="lcard-icon">{{ $item['icon'] }}</div>
                <h3>{{ $item['nama'] }}</h3>
                <p>{{ $item['deskripsi'] }}</p>
                <span class="lcard-badge">{{ $item['jadwal'] }}</span>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-2">
            <a href="{{ route('layanan') }}" class="btn btn-green">Semua Layanan →</a>
        </div>
    </div>
</section>

{{-- DOKTER --}}
<section class="section bg-soft">
    <div class="container">
        <div class="section-head">
            <h2>Tim Dokter Kami</h2>
            <p>Ditangani oleh dokter berpengalaman dan berdedikasi tinggi.</p>
        </div>
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

{{-- CTA --}}
<section class="cta-section">
    <div class="container cta-inner">
        <div>
            <h2>Siap Mendaftar?</h2>
            <p>Daftarkan diri Anda sekarang dan dapatkan pelayanan terbaik dari kami.</p>
        </div>
        <div class="cta-btns">
            <a href="{{ route('daftar') }}" class="btn btn-white">Daftar Online</a>
            <a href="https://wa.me/62xxxxxxxxxx" target="_blank" class="btn btn-outline-white">
                💬 WhatsApp Kami
            </a>
        </div>
    </div>
</section>

@endsection