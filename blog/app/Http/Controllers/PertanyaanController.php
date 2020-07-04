<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaanModel;

class PertanyaanController extends Controller
{
    public function create() {
        return view('items.form');
    }

    public function store(Request $request){
        //dd($request->all());
        $new_item = pertanyaanModel::save($request->all());

        return redirect('/jawaban');
    }

    public function index() {
        $items = pertanyaanModel::get_all();
        return view('items.index', compact('items'));
    }

    public function show($id) {
        $item = pertanyaanModel::find_by_id($id);
        return view('items.show', compact('item'));
    }
}
