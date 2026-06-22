<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Klinik KDKMP')</title>
    <link rel="stylesheet" href="{{ asset('css/klinik.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

{{-- NAVBAR --}}
<nav class="navbar">
    <div class="container nav-inner">
        <a href="{{ route('home') }}" class="nav-brand">
            <div class="nav-logo">KD</div>
            <span>Klinik <strong>KDKMP</strong></span>
        </a>
        <button class="nav-toggle" id="navToggle">&#9776;</button>
        <ul class="nav-menu" id="navMenu">
            <li><a href="{{ route('home') }}"    class="{{ request()->routeIs('home')    ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ route('layanan') }}" class="{{ request()->routeIs('layanan') ? 'active' : '' }}">Layanan</a></li>
            <li><a href="{{ route('dokter') }}"  class="{{ request()->routeIs('dokter')  ? 'active' : '' }}">Dokter</a></li>
            <li><a href="{{ route('jadwal') }}"  class="{{ request()->routeIs('jadwal')  ? 'active' : '' }}">Jadwal</a></li>
            <li><a href="{{ route('kontak') }}"  class="{{ request()->routeIs('kontak')  ? 'active' : '' }}">Kontak</a></li>
        </ul>
        <a href="{{ route('daftar') }}" class="btn-daftar">Daftar Online</a>
    </div>
</nav>

{{-- CONTENT --}}
@yield('content')

{{-- FOOTER --}}
<footer class="footer">
    <div class="container footer-inner">
        <div class="footer-col">
            <div class="footer-brand">
                <div class="nav-logo">KD</div>
                <span>Klinik KDKMP</span>
            </div>
            <p>Memberikan pelayanan kesehatan berkualitas dengan tenaga medis berpengalaman dan fasilitas modern.</p>
        </div>
        <div class="footer-col">
            <h4>Layanan</h4>
            <ul>
                <li><a href="#">Poli Umum</a></li>
                <li><a href="#">Poli Anak</a></li>
                <li><a href="#">Poli Gigi</a></li>
                <li><a href="#">KIA / Bidan</a></li>
                <li><a href="#">Laboratorium</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Informasi</h4>
            <ul>
                <li><a href="{{ route('jadwal') }}">Jadwal Praktek</a></li>
                <li><a href="{{ route('dokter') }}">Tim Dokter</a></li>
                <li><a href="{{ route('daftar') }}">Daftar Online</a></li>
                <li><a href="{{ route('kontak') }}">Kontak Kami</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Kontak</h4>
            <p>📍 Jl. Kesehatan No. 1<br>Kota Anda</p>
            <p>📞 (0xxx) xxx-xxxx</p>
            <p>🕐 Senin – Sabtu<br>08:00 – 15:00 WIB</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© {{ date('Y') }} Klinik KDKMP. Semua hak dilindungi.</p>
    </div>
</footer>

<script>
document.getElementById('navToggle').addEventListener('click', function() {
    document.getElementById('navMenu').classList.toggle('open');
});
</script>
</body>
</html>