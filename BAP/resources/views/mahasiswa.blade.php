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
                <th>Tahun Masuk</th>
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