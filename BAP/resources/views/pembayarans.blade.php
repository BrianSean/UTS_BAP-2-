<?php
use App\Models\pembayaran;
?>

@extends('layouts.app2')
@section('title', 'Pembayaran')
@section('content')
@section('br1', 'Pembayaran')
@section('br2', 'Pembayaran')
<div>
    <p style="text-align:center; font-size: 48px; margin-top:36px; font-weight: bold">DATA PEMBAYARAN</p>
    <div class="d-flex justify-content-center">
        <table style="width:70%; margin-bottom: 24px">
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Amount</th>
                <th>Payment Date</th>
            </tr>
            <tr>
                @foreach ($pembayarans as $pembayaran) 
                    <tr>
                        <td>{{$pembayaran->id}}</td>
                        <td>{{$pembayaran->StudentId_Mahasiswa}}</td>
                        <td>{{$pembayaran->Jumlah_Pembayaran}}</td>
                        <td>{{$pembayaran->Tanggal_Pembayaran}}</td>
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
            text-align: center;
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .bold-font {
            font-weight: bold;
        }
    </style>