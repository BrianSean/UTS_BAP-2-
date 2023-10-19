<?php
use App\Models\programStudi;
?>

@extends('layouts.app2')
@section('title', 'Program Studi')
@section('content')
@section('br1', 'Program Studi')
@section('br2', 'Program Studi')
<div>
    <p style="text-align:center; font-size: 48px; margin-top:36px; font-weight: bold">DATA PROGRAM STUDI</p>
    <div class="d-flex justify-content-center">
        <table style="width:70%; margin-bottom: 24px">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
            </tr>
            <tr>
                @foreach ($programStudis as $programStudi) 
                    <tr>
                        <td>{{$programStudi->id}}</td>
                        <td>{{$programStudi->Nama_Program_Studi}}</td>
                        <td>{{$programStudi->deskripsi}}</td>
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