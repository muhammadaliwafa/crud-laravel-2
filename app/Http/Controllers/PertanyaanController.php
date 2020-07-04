<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    //
    public function index(){
        $items = PertanyaanModel::get_all();
        // dd($id);
        return view('pertanyaan.index', compact('items'));
    }

    public function create(){
        return view('pertanyaan.formPertanyaan');
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->all();
        // dd($data);
        unset($data["_token"]);
        $item = PertanyaanModel::save($data);
        if($item){
            
            return redirect('/pertanyaan');
        }

    }
    public function show($id){
        $jawaban = JawabanModel::get_answer_by_id($id);
        $pertanyaan = PertanyaanModel::get_question_by_id($id)->pertanyaan;
        return view('pertanyaan.show', compact('id', 'pertanyaan', 'jawaban'));
    }
    public function edit($id){
        $pertanyaan = PertanyaanModel::get_question_by_id($id);
        // dd($pertanyaan);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }
    public function update($id, Request $request){
        $item = PertanyaanModel::update($id, $request->all());
        if($item){
            return redirect('/pertanyaan');
        }

    }
    public function destroy($id, Request $request){
        $deleted = PertanyaanModel::destroy($id);
        if($deleted){
            return redirect('/pertanyaan');
        }

    }
    
}
