<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;
use Carbon\Carbon;

class JawabanController extends Controller
{
    //
    public function index($pertanyaan_id){
        $items = JawabanModel::get_answer_by_id($pertanyaan_id);
        $pertanyaan = PertanyaanModel::get_question_by_id($pertanyaan_id);
        // echo $pertanyaan;
        // dd($pertanyaan);
        
        // foreach($items as $i =>$v){
        //     // echo '<pre>';
        //     // print_r($v); 
        //     // echo '</pre>';
        //     // echo $v->pertanyaan_id;
        //     if(($v->pertanyaan_id) != $id){
        //         unset($items[$i]);
        //     }
        // }
        // dd($items);
        return view('jawaban.index', compact('items', 'pertanyaan_id','pertanyaan'));
    }
    public function store($pertanyaan_id, Request $request){
        $data = $request->all();
        // dd($data);
        $data['time'] = Carbon::now()->toDateTimeString();
        unset($data["_token"]);
        $item = JawabanModel::save($data);
        if($item){
            return redirect("/pertanyaan/$pertanyaan_id");
        }

    }
    public function create($pertanyaan_id){
        return view('jawaban.formJawaban', compact('pertanyaan_id'));
    }
}
