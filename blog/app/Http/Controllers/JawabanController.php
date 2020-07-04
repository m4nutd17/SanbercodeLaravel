<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jawabanModel;

class JawabanController extends Controller
{
    public function create() {
        return view('items.answer');
    }

    public function store(Request $request){
        $new_item = jawabanModel::save($request->all());

        return redirect('/items');
    }

    public function index() {
        $items = jawabanModel::get_all();

        return view('items.index');
    }
}
