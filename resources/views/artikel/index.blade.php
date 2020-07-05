@extends('layouts/master')

@section('title', 'Data Artikel')

@section('content')
    
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <a href="{{url('/artikel/create')}}"><button type="button" class="btn btn-primary btn-lg mb-3">Tambah Artikel</button></a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="60%">Judul</th>
                    <th>Kreator</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th width="5%">No</th>
                    <th width="60%">Judul</th>
                    <th>ID Kreator</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->judul}}</td>
                        <td>{{$item->id_user}}</td>
                        <td>
                            <a href="{{url('/artikel/'. $item->id_artikel)}}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a href="{{url('/artikel/'. $item->id_artikel . "/edit")}}" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            <form action="{{url('/artikel/'. $item->id_artikel)}}" style="display: inline" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>

@endsection

@push('scripts')
    
    <!-- Page level plugins -->
    <script src="{{asset('sbadmin2/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('sbadmin2/js/demo/datatables-demo.js')}}"></script>

    <!-- Custom styles for this page -->
    <link href="{{asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>

@endpush