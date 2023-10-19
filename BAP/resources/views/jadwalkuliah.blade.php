<?php
use App\Models\mahasiswa;
?>

@extends('layouts.app2')
@section('title', 'Profil')
@section('content')
@section('br1', 'Mahasiswa')
@section('br2', 'Mahasiswa')
<div>
    <p style="text-align:center; font-size: 48px; margin-top:36px; font-weight: bold">DATA MAHASISWA</p>
    <div class="d-flex justify-content-center">
        <table style="width:70%; margin-bottom: 24px">
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Tahun Masuk</th><?php
                use App\Models\jadwalKuliah;
                ?>
                
                @extends('layouts.app2')
                @section('title', 'Jadwal Kuliah')
                @section('content')
                @section('br1', 'Jadwal Kuliah')
                @section('br2', 'Jadwal Kuliah')
                <div>
                    <p style="text-align:center; font-size: 48px; margin-top:36px; font-weight: bold">DATA PEMBAYARAN</p>
                    <div class="d-flex justify-content-center">
                        <table style="width:70%; margin-bottom: 24px">
                            <tr>
                                <th>ID</th>
                                <th>Kode Matakuliah</th>
                                <th>Kode Term</th>
                                <th>Kode Dosen</th>
                                <th>Day</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Ruangan</th>
                            </tr>
                            <tr>
                                @foreach ($jadwalKuliahs as $jadwalKuliah) 
                                    <tr>
                                        <td>{{$jadwalKuliah->id}}</td>
                                        <td>{{$jadwalKuliah->Kode_Matakuliah}}</td>
                                        <td>{{$jadwalKuliah->Kode_Term}}</td>
                                        <td>{{$jadwalKuliah->Kode_Dosen_Pengampu}}</td>
                                        <td>{{$jadwalKuliah->Hari}}</td>
                                        <td>{{$jadwalKuliah->Jam_Mulai_Perkuliahan}}</td>
                                        <td>{{$jadwalKuliah->Jam_Selesai_Perkuliahan}}</td>
                                        <td>{{$jadwalKuliah->Ruangan_Kelas}}</td>
                                    </tr>
                                @endforeach
                            </tr>
                        </table>
                    </div>
                </div>
                @endsection
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
                    <style>
                        th {
                            border: 1px solid black;
                            padding: 8px;
                            font-weight: bold;
                            text-align: center
                        }
                        td {
                            border: 1px solid black;
                            padding: 8px;
                            text-align: center
                        }
                        .bold-font {
                            font-weight: bold;
                        }
                    </style>
            </tr>
            <tr>
                @foreach ($mahasiswas as $mahasiswa) 
                    <tr>
                        <td>{{$mahasiswa->id}}</td>
                        <td>{{$mahasiswa->studentID}}</td>
                        <td>{{$mahasiswa->name}}</td>
                        <td>{{$mahasiswa->jurusan}}</td>
                        <td>{{$mahasiswa->tahunMasuk}}</td>
                    </tr>
                @endforeach
            </tr>
        </table>
    </div>
</div>
@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        th {
            border: 1px solid black;
            padding: 8px;
            font-weight: bold;
            text-align: center
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center
        }
        .bold-font {
            font-weight: bold;
        }
    </style>