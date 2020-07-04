<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class pertanyaanModel {
    public static function get_all() {
        $items = DB::table('questions')->get();
        return $items;
    }

    public static function save($data)  {
        unset($data["_token"]);
        $new_item = DB::table('questions')->insert($data);
        return $new_item;
    }

    public static function find_by_id($id)  {
        $item = DB::table('questions')->where('id', $id)->first();
        return $item;
    }

}