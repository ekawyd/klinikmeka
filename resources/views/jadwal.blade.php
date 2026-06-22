@extends('layouts.app')
@section('title', 'Jadwal – Klinik KDKMP')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Jadwal Praktek</h1>
        <p>Jadwal praktek dokter dan operasional klinik kami.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="jadwal-table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Poli / Layanan</th>
                        <th>Jam Operasional</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jadwal as $j)
                    <tr>
                        <td><strong>{{ $j['hari'] }}</strong></td>
                        <td>{{ $j['poli'] }}</td>
                        <td>{{ $j['jam'] }}</td>
                        <td>
                            @if($j['buka'])
                                <span class="badge-buka">Buka</span>
                            @else
                                <span class="badge-tutup">Tutup</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection