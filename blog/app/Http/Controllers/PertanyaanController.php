<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaanModel;

class PertanyaanController extends Controller
{
    public function create() {
        return view('questions.form');
    }

    public function store(Request $request){
        //dd($request->all());
        $new_item = pertanyaanModel::save($request->all());

        return redirect('/pertanyaan');
    }

    public function index() {
        $items = pertanyaanModel::get_all();
        return view('questions.index', compact('items'));
    }

    public function show($id) {
        $item = pertanyaanModel::find_by_id($id);
        return view('questions.show', compact('item'));
    }

    public function edit($id) {
        $item = pertanyaanModel::find_by_id($id);
        return view('questions.edit', compact('item'));
    }

    public function update($id, Request $request) {
        $update = pertanyaanModel::update($id, $request->all());

        return redirect('/pertanyaan');
    }

    public function destroy($id) {
        $delete = pertanyaanModel::delete($id);

        return redirect('/pertanyaan');
    }

}
