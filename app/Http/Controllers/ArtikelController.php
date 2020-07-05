<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\ArtikelModel;
use \App\Models\UserModel;

class ArtikelController extends Controller
{
    public function index(){

        $data = ArtikelModel::getAll();

        return view('artikel.index', compact('data'));
    }

    public function create(){

        $id = UserModel::getUserId();
        return view('artikel.create', ['id'=>$id]);

    }

    public function store(Request $request){
        
        $info = ArtikelModel::store($request->all());
        return view('artikel.store', ['info'=>$info, 'pesan'=>'tambah artikel']);

    }

    public function show($id_artikel){
        $data = ArtikelModel::show($id_artikel);
        return view('artikel.show', compact('data'));
    }

    public function update($id_artikel){

        $id = UserModel::getUserId();

        $data = ArtikelModel::show($id_artikel);
        return view('artikel.edit', ['data'=>$data, 'id'=>$id]);

    }

    public function edit(Request $request, $id_artikel){

        $info = ArtikelModel::edit($request->all(), $id_artikel);

        return view('artikel.store', ['info'=>$info, 'pesan'=>'edit artikel']);

    }

    public function delete($id_artikel){

        $info = ArtikelModel::delete($id_artikel);

        return view('artikel.store', ['info'=>$info, 'pesan'=>'hapus artikel']);
    }

}
