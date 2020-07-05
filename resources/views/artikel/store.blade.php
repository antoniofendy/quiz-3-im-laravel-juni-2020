@extends('layouts/master')

@section('title', 'Data Artikel')

@section('content')
    
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
        </div>
        <div class="card-body">

            @if ($info == true)
                <div class="alert alert-primary" role="alert">
                    Berhasil {{$pesan}}
                </div>
            @else
                <div class="alert alert-danger" role="alert">
                    Gagal {{$pesan}}
                </div>
            @endif

            <meta http-equiv="refresh" content="1;URL='{{url('/artikel')}}'" /> 

        </div>
    </div>

@endsection