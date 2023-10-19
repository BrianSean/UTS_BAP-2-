<?php
use App\Models\Matakuliah;
?>

@extends('layouts.app')
@section('title', 'Profil')
@section('content')
<div>
    <p style="text-align:center; font-size: 48px; margin-top:36px; font-weight: bold">DATA MAHASISWA</p>
    <div class="d-flex justify-content-center">
        <table style="width:70%; margin-bottom: 24px">
            <tr>
                <th>ID</th>
                <th>Kode Matakuliah</th>
                <th>Nama matakuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                @foreach ($matakuliahs as $matakuliah) 
                    <tr>
                        <td>{{$matakuliah->id}}</td>
                        <td>{{$matakuliah->kode_matakuliah}}</td>
                        <td>{{$matakuliah->nama_matakuliah}}</td>
                        <td>{{$matakuliah->sks}}</td>
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