@extends('layouts.app')
@section('title', 'Daftar Online – Klinik KDKMP')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Pendaftaran Online</h1>
        <p>Isi formulir di bawah untuk mendaftar. Kami akan konfirmasi via WhatsApp.</p>
    </div>
</section>

<section class="section">
    <div class="container form-wrap">

        @if(session('success'))
        <div class="alert-success">
            ✅ {{ session('success') }}
        </div>
        @endif

        @if($errors->any())
        <div class="alert-error">
            ❌ Mohon lengkapi form dengan benar.
        </div>
        @endif

        <form action="{{ route('daftar.store') }}" method="POST" class="form-card">
            @csrf

            <div class="form-row">
                <div class="form-group">
                    <label>Nama Lengkap *</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Contoh: Budi Santoso" required>
                    @error('nama')<span class="form-error">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label>No. HP / WhatsApp *</label>
                    <input type="text" name="no_hp" value="{{ old('no_hp') }}" placeholder="Contoh: 08123456789" required>
                    @error('no_hp')<span class="form-error">{{ $message }}</span>@enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Pilih Layanan / Poli *</label>
                    <select name="layanan" required>
                        <option value="">-- Pilih Layanan --</option>
                        @foreach ($layanan as $l)
                        <option value="{{ $l['nama'] }}" {{ old('layanan') == $l['nama'] ? 'selected' : '' }}>
                            {{ $l['icon'] }} {{ $l['nama'] }}
                        </option>
                        @endforeach
                    </select>
                    @error('layanan')<span class="form-error">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label>Pilih Dokter *</label>
                    <select name="dokter" required>
                        <option value="">-- Pilih Dokter --</option>
                        @foreach ($dokter as $d)
                        <option value="{{ $d['nama'] }}" {{ old('dokter') == $d['nama'] ? 'selected' : '' }}>
                            {{ $d['nama'] }} ({{ $d['spesialis'] }})
                        </option>
                        @endforeach
                    </select>
                    @error('dokter')<span class="form-error">{{ $message }}</span>@enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Tanggal Kunjungan *</label>
                    <input type="date" name="tanggal" value="{{ old('tanggal') }}" min="{{ date('Y-m-d') }}" required>
                    @error('tanggal')<span class="form-error">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label>Keluhan / Catatan</label>
                    <input type="text" name="keluhan" value="{{ old('keluhan') }}" placeholder="Opsional">
                </div>
            </div>

            <button type="submit" class="btn btn-green btn-full">
                ✅ Kirim Pendaftaran
            </button>
        </form>
    </div>
</section>
@endsection