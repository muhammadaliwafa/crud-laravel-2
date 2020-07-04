<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;
use Carbon\Carbon;

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
        $time = Carbon::now()->toDateTimeString();
        $data = $request->all();
        // dd($data);
        unset($data["_token"]);
        $data['time']=$time;
        // dd($data);
        $item = PertanyaanModel::save($data);
        if($item){
            
            return redirect('/pertanyaan');
        }
        

    }
    public function show($id){
        $time = Carbon::now()->toDateTimeString();
        // dd($time);
        $jawaban = JawabanModel::get_answer_by_id($id);
        $pertanyaan = PertanyaanModel::get_question_by_id($id);
        if($pertanyaan != null){
            return view('pertanyaan.show', compact('id', 'pertanyaan', 'jawaban'));  
        }else{
            return "error : pertanyaan kosong";
        }
        
    }
    public function edit($id){
        $pertanyaan = PertanyaanModel::get_question_by_id($id);
        // dd($pertanyaan);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }
    public function update($id, Request $request){
        $time = Carbon::now()->toDateTimeString();
        $data = $request->all();
        $data['time']=$time;
        $item = PertanyaanModel::update($id, $data);
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
