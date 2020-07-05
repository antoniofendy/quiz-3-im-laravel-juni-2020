@extends('layouts/master')

@section('title', 'Welcome Page')

@section('content')
    
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <img src="{{asset('erd/db_forum.png')}}" style="width: 100%; height: 100%;">
    </div>
    <a href="{{url('/artikel')}}"><button type="button" class="btn btn-primary btn-lg mt-3">Artikel</button></a>
</div>



@endsection