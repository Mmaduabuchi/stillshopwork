<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class viewController extends Controller
{
    //select data form the database
    public function showData(){
        $users = DB::select('select * from _costumers');
        return view("admin", ["users" => $users]);
    }
}
