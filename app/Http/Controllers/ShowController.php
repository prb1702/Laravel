<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\users;
use App\Models\users2;
use App\Models\users3;

class ShowController extends Controller
{
    //
    // function show(){
            // return users::all();
    //     $data=users::all();
    //     return view('list',['users'=>$data]);
    // }

    function show(){
        $data1 = users::all();
        $data2 = users2::all();
        $data3 = users3::all();

        $combinedData = [
            'users' => $data1,
            'users2' => $data2,
            'users3' => $data3,
        ];

        return view('list', $combinedData);
    }
}
