@extends('layouts/master')

@section('title', 'Form Edit Artikel')

@section('content')
    
<div class="card shadow mb-4">

    <?php 

        date_default_timezone_set('Asia/Jakarta');
        $time = date('Y-m-d H:i:s');

    ?>

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Edit Artikel</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('/artikel/'. $data->id_artikel)}}">
                @csrf
                @method("PUT")
                <input type="hidden" name="updated_at" value="{{$time}}">
                <div class="form-group">
                    <label for="judul"><b>Judul artikel</b></label>
                    <input type="text" name="judul" class="form-control" placeholder="ex: Dasar-dasar OOP" value="{{$data->judul}}">
                </div>
                <div class="form-group">
                    <label for="id_profil"><b>Id profil</b></label>
                    <select class="form-control" name="id_user">
                        @foreach ($id as $item)
                            <option value="{{$item}}">{{$item}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="isi"><b>Isi artikel</b></label>
                    <textarea name="isi" id="isi" cols="30" rows="5">{!!$data->isi!!}</textarea>
                </div>
                <div class="form-group">
                    <label for="tag"><b>Tag</b></label>
                    <input type="text" name="tag" class="form-control" placeholder="ex: kesehatan,sosial,..." value="{{$data->tag}}">
                </div>
                <button type="submit" class="btn btn-primary">Edit Artikel</button>
                </form>
        </div>
    </div>

@endsection

@push('scripts')
    
<script src="{{asset('ckeditor/ckeditor/ckeditor.js')}}"></script>

<script>
    CKEDITOR.replace('isi');
</script>

@endpush