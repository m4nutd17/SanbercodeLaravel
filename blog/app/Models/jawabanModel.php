<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class jawabanModel {
    public static function get_all() {
        $items = DB::table('answer')->get();
        return $items;
    }

    public static function save($data)  {
        $new_item = DB::table('answer')->insert($data);
        return $new_item;
    }

    public static function find_by_id($id)  {
        $item = DB::table('questions')->where('id', $id)->first();
        return $item;
    }

}