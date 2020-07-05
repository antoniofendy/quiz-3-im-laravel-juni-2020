<?php

    namespace App\Models;

    use Illuminate\Support\Facades\DB;

    class ArtikelModel{

        
        public static function getAll(){

            $data = DB::table('tb_artikel')->get();
            return ($data);

        }

        public static function store($data){

            $raw_slug = strtolower($data['judul']);
            $raw_slug = explode(" ", $raw_slug);

            $slug = "";
            foreach($raw_slug as $item){
                $slug .= $item;
                if($item != end($raw_slug)){
                    $slug .= "-";
                }
            }

            $data['slug'] = $slug;

            unset($data['_token']);

            $info = DB::table('tb_artikel')->insert($data);

            return $info;
        }

        public static function show($id_artikel){

            $info = DB::table('tb_artikel')->where('id_artikel', $id_artikel)->first();
            return $info;

        }

        
        public static function edit($data, $id_artikel){

            unset($data['_token']);
            unset($data['_method']);

            $info =  DB::table('tb_artikel')->where('id_artikel', $id_artikel)
            ->update($data);

            return $info;

        }

        public static function delete($id_artikel){

            $info = DB::table('tb_artikel')->where('id_artikel', $id_artikel)
            ->delete();

            return $info;
        }


    }

?>