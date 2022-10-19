<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class User extends Controller
{
    //

    function show(Request $request){
        $search =$request['search']?? "";

        if($search != ""){

            $Users =Users::where('type','=',$search)->get();

        }
        else{
            $Users = Users::all();
        }


    
      return view('admin.users',compact('Users'));



    }


    
    function Verify($id){

      
        $one =1;
        $Users = Users::find($id);
        $Users->verified=$one;
        $Users->update();
        return redirect()->back();

     }

      
    function delete($id){
        $Users = Users::find($id);
        $Users->delete();
        return redirect()->back();

     }


}
