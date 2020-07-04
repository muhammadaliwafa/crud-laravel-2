<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel{
    public static function get_all(){
        $items = DB::table('jawabans')->get();
        return $items;
    }

    public static function save($data){
        $new_item = DB::table('jawabans')->insert([
            'pertanyaan_id' => $data['id'],
            'jawaban'=> $data['jawaban'],
            'created_at'=> $data['time']
        ]);

        return $new_item;
    }

    public static function get_answer_by_id($pertanyaan_id){
        $new_item = DB::table('jawabans')->where('pertanyaan_id', $pertanyaan_id)->get();
        return $new_item;
    }

}