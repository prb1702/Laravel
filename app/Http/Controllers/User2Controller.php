<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\users2;

class User2Controller extends Controller
{
    //
    function show2(){
        $data2=users2::all();
        return view('list',['users2'=>$data2]);
    }
}
