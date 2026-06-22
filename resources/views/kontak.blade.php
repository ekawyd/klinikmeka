@extends('layouts.app')
@section('title', 'Kontak – Klinik KDKMP')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Hubungi Kami</h1>
        <p>Kami siap membantu Anda. Jangan ragu untuk menghubungi kami.</p>
    </div>
</section>

<section class="section">
    <div class="container" style="max-width:700px">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:2rem">
            <div class="layanan-card">
                <div class="lcard-icon">📍</div>
                <h3>Alamat</h3>
                <p>Jl. Kesehatan No. 1, Kota Anda, Provinsi Anda</p>
            </div>
            <div class="layanan-card">
                <div class="lcard-icon">📞</div>
                <h3>Telepon</h3>
                <p>(0xxx) xxx-xxxx<br>Senin – Sabtu, 08:00 – 15:00</p>
            </div>
            <div class="layanan-card">
                <div class="lcard-icon">💬</div>
                <h3>WhatsApp</h3>
                <p><a href="https://wa.me/62xxxxxxxxxx" style="color:#1a6b4a">+62 xxx-xxxx-xxxx</a></p>
            </div>
            <div class="layanan-card">
                <div class="lcard-icon">✉️</div>
                <h3>Email</h3>
                <p>klinik.kdkmp@email.com</p>
            </div>
        </div>
        <div style="text-align:center">
            <a href="https://wa.me/62xxxxxxxxxx" class="btn btn-green">💬 Chat via WhatsApp</a>
        </div>
    </div>
</section>
@endsection