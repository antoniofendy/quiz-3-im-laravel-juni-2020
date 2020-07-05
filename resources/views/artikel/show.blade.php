<?php
    function tgl_indonesia($tgl){
        $tanggal = substr($tgl, 8,2);
        $nama_bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $bulan = $nama_bulan[(substr($tgl, 5,2)-1)];
        $tahun = substr($tgl, 0,4);
        return ($tanggal." ".$bulan." ".$tahun);
    }
?>

@extends('layouts/master')

@section('title', 'Data Artikel')

@section('content')
    
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="card-title" style="color: white"><b>Judul:</b> {{$data->judul}}</h3>
                    <h5 class="card-title" style="color: white"><b>Penulis:</b> {{$data->id_user}}</h5>
                    <h5 class="card-title" style="color: white"><b>Slug:</b> {{$data->slug}}</h5>
                    <h6 class="card-title" style="color: white"><b>Tanggal dibuat:</b> {{tgl_indonesia($data->created_at)}}</h6>
                    <h6 class="card-title" style="color: white"><b>Tanggal diperbaharui:</b> {{tgl_indonesia($data->updated_at)}}</h6>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    {!!$data->isi!!}
                    
                    <?php
                        $tag = explode(",", $data->tag);
                    ?>

                    @foreach ($tag as $item)
                        <button type="button" class="btn btn-success">{{$item}}</button>
                    @endforeach

                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

@endsection