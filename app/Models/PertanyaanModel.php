<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel{
    public static function get_all(){
        $items = DB::table('pertanyaans')->get();
        return $items;
    }

    public static function save($data){
        // dd($data);
        $new_item = DB::table('pertanyaans')->insert([
            'judul'=>$data['judul'],
            'pertanyaan'=>$data['pertanyaan'],
            'created_at'=>$data['time']
        ]);

        return $new_item;
    }

    public static function get_question_by_id($pertanyaan_id){
        $new_item = DB::table('pertanyaans')->where('id','=', $pertanyaan_id)->first();
        return $new_item;
    }

    public static function update($id, $data){
        // dd($data);
        $new_item = DB::table('pertanyaans')
                        ->where('id', $id)
                        ->update([
                            'judul'=>$data['judul'],
                            'pertanyaan'=>$data['pertanyaan'],
                            'updated_at'=>$data['time']
                        ]);

        return $new_item;
    }

    public static function destroy($id){
        $deleted = DB::table('pertanyaans')
                        ->where('id', $id)
                        ->delete();

        return $deleted;
    }
    // public static get_answer($pertanyaan_id){

    // }
}