<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $layanan = $this->getLayanan();
        $dokter = $this->getDokter();
        $jadwal = $this->getJadwal();
        return view('home', compact('layanan', 'dokter', 'jadwal'));
    }

    public function layanan()
    {
        $layanan = $this->getLayanan();
        return view('layanan', compact('layanan'));
    }

    public function dokter()
    {
        $dokter = $this->getDokter();
        return view('dokter', compact('dokter'));
    }

    public function jadwal()
    {
        $jadwal = $this->getJadwal();
        return view('jadwal', compact('jadwal'));
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function daftar()
    {
        $layanan = $this->getLayanan();
        $dokter = $this->getDokter();
        return view('daftar', compact('layanan', 'dokter'));
    }

    public function storeDaftar(Request $request)
    {
        $request->validate([
            'nama'     => 'required|string|max:100',
            'no_hp'    => 'required|string|max:15',
            'layanan'  => 'required|string',
            'dokter'   => 'required|string',
            'tanggal'  => 'required|date|after_or_equal:today',
            'keluhan'  => 'nullable|string|max:500',
        ]);

        // Simpan ke session sebagai konfirmasi (nanti bisa disambung ke DB)
        session()->flash('success', 'Pendaftaran berhasil! Kami akan menghubungi Anda via WhatsApp.');
        return redirect()->route('daftar');
    }

    private function getLayanan()
    {
        return [
            ['icon' => '🩺', 'nama' => 'Poli Umum',      'deskripsi' => 'Pemeriksaan umum, konsultasi, dan pengobatan dasar untuk semua usia.',          'jadwal' => 'Senin – Sabtu',   'warna' => 'hijau'],
            ['icon' => '👶', 'nama' => 'Poli Anak',       'deskripsi' => 'Pemeriksaan tumbuh kembang, imunisasi, dan perawatan khusus anak.',              'jadwal' => 'Senin – Jumat',   'warna' => 'biru'],
            ['icon' => '🦷', 'nama' => 'Poli Gigi',       'deskripsi' => 'Perawatan gigi, cabut gigi, tambal gigi, dan kebersihan mulut.',                 'jadwal' => 'Selasa & Kamis',  'warna' => 'kuning'],
            ['icon' => '🤰', 'nama' => 'KIA / Bidan',     'deskripsi' => 'Pemeriksaan ibu hamil, layanan KB, dan persalinan normal.',                      'jadwal' => 'Setiap Hari',     'warna' => 'pink'],
            ['icon' => '💉', 'nama' => 'Laboratorium',    'deskripsi' => 'Cek darah, urine, gula darah, kolesterol, dan pemeriksaan laboratorium lainnya.', 'jadwal' => 'Senin – Sabtu',   'warna' => 'hijau'],
            ['icon' => '🏃', 'nama' => 'Fisioterapi',     'deskripsi' => 'Rehabilitasi fisik, terapi pemulihan cedera, dan latihan gerak.',                'jadwal' => 'Rabu & Jumat',    'warna' => 'ungu'],
        ];
    }

    private function getDokter()
    {
        return [
            ['inisial' => 'AR', 'nama' => 'dr. Ahmad Rizky',     'spesialis' => 'Dokter Umum',  'rating' => '5.0', 'pengalaman' => '10 tahun'],
            ['inisial' => 'SI', 'nama' => 'dr. Sari Indah',      'spesialis' => 'Dokter Anak',  'rating' => '4.9', 'pengalaman' => '8 tahun'],
            ['inisial' => 'BW', 'nama' => 'drg. Budi Wicaksono', 'spesialis' => 'Dokter Gigi',  'rating' => '4.8', 'pengalaman' => '12 tahun'],
            ['inisial' => 'NA', 'nama' => 'dr. Nina Aulia',      'spesialis' => 'KIA / Bidan',  'rating' => '5.0', 'pengalaman' => '7 tahun'],
            ['inisial' => 'RP', 'nama' => 'dr. Rudi Prasetyo',   'spesialis' => 'Fisioterapi',  'rating' => '4.7', 'pengalaman' => '9 tahun'],
            ['inisial' => 'DM', 'nama' => 'dr. Dewi Maharani',   'spesialis' => 'Dokter Umum',  'rating' => '4.9', 'pengalaman' => '6 tahun'],
        ];
    }

    private function getJadwal()
    {
        return [
            ['hari' => 'Senin',  'poli' => 'Poli Umum, Poli Anak',    'jam' => '08:00 – 14:00', 'buka' => true],
            ['hari' => 'Selasa', 'poli' => 'Poli Gigi, Poli Umum',    'jam' => '08:00 – 14:00', 'buka' => true],
            ['hari' => 'Rabu',   'poli' => 'Fisioterapi, KIA/Bidan',  'jam' => '09:00 – 15:00', 'buka' => true],
            ['hari' => 'Kamis',  'poli' => 'Poli Gigi, KIA/Bidan',    'jam' => '08:00 – 14:00', 'buka' => true],
            ['hari' => 'Jumat',  'poli' => 'Semua Poli',               'jam' => '08:00 – 11:00', 'buka' => true],
            ['hari' => 'Sabtu',  'poli' => 'Poli Umum, Laboratorium', 'jam' => '08:00 – 12:00', 'buka' => true],
            ['hari' => 'Minggu', 'poli' => '—',                        'jam' => '—',             'buka' => false],
        ];
    }
}