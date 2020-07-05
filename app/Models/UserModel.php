<?php

    namespace App\Models;

    use Illuminate\Support\Facades\DB;

    class UserModel{

        public static function getAll(){

            $data = DB::table('tb_user')->get();
            return $data;

        }

        public static function getUserId(){

            $data = DB::table('tb_user')->get();

            $id = [];

            foreach($data as $item){
                array_push($id, $item->id_user);
            }

            return $id;

        }


    }

?>