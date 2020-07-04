<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itemModels;

class ItemController extends Controller
{
    public function create() {
        return view('item.form');
    }

    public function store(Request $request){
        $new_item = itemModels::save($request->all());

        return redirect('/items');
    }

    public function index() {
        $items = itemModels::get_all();

        return view('item.index');
    }
}
