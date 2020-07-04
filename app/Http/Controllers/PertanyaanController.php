<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

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
}
