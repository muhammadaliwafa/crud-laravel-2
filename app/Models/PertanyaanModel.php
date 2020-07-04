<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel{
    public static function get_all(){
        $items = DB::table('pertanyaan')->get();
        return $items;
    }

    public static function save($data){
        $new_item = DB::table('pertanyaan')->insert($data);

        return $new_item;
    }

    public static function get_question_by_id($pertanyaan_id){
        $new_item = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();
        $pertanyaan = $new_item->pertanyaan;
        return $pertanyaan;
    }

    // public static get_answer($pertanyaan_id){

    // }
}