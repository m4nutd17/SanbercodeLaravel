<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jawabanModel;

class JawabanController extends Controller
{
    public function create() {
        return view('answer.answer');
    }

    public function store(Request $request){
        $new_item = jawabanModel::save($request->all());

        return redirect('/items');
    }

    public function index() {
        $items = jawabanModel::get_all();

        return view('answer.index');
    }

    public function show($id) {
        $item = pertanyaanModel::find_by_id($id);
        return view('items.show', compact('item'));
    }
}
