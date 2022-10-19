<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Classified;
use Illuminate\Http\Request;

class webController extends Controller
{
    function index(Request $request)
    {
        $classifieds=Classified::with('images');
        if(isset($request->searchquery))
        {
            $classifieds=$classifieds->where('title','like','%'.$request->searchquery.'%');
        }

        if(isset($request->category))
        {
            $classifieds=$classifieds->where('category',$request->category);
        }

        $classifieds=$classifieds->get();
        $categories=Category::get();
        return view('frontend.index',compact('classifieds','categories'));
    }
    function productDetails(Request $request)
    {
        $classified=Classified::with('images')->with('catfull')->with('user')->find($request->itemid);
        $related=Classified::with('images')->where('category',$classified->category)->where('id','<>',$classified->id)->get();
        return view('frontend.classified.product',compact('classified','related'));
    }
}
