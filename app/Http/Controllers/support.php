<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supports;


class support extends Controller
{
    //
    function index(){

       
        $data = supports::all();

        return view('admin.mailbox',compact('data'));
    

    }


}
