<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Classified;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ClassifiedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function shows($type){

        $data =Classified::with('catfull')->with('images')->with('user')->where('status',$type)->get();

        if($type==0)
        $title='Pending';
        elseif($type==1)
        $title='Aprooved';
        else
        $title='Rejected';
       
//$data = Classified::all();
        return view('admin.request',compact('data','title'));


     }


     function StatusApprove($id){

      
        $one =1;
        $Classified = Classified::find($id);
        $Classified->status=$one;
        $Classified->update();
        return redirect()->back();

     }

     function StatusReject($id){

      
        $one =2;
        $Classified = Classified::find($id);
        $Classified->status=$one;
        $Classified->update();
        return redirect()->back();

     }





    public function index()
    {
        $categories=Category::where('status',1)->get();
        return view('frontend.classified',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|string',
            'category'=>'required|exists:categories,id',
            'description'=>'required|string',
            'phoneNumber'=>'required|string',
            'address'=>'required|string',
            'city'=>'required|string',
            'state'=>'required|string',
            'price'=>'required|numeric',
            'image'=>'required|image'
        ]);

        $classified=new Classified();
        $classified->title=$request->title;
        $classified->category=$request->category;
        $classified->description=$request->description;
        $classified->mobile=$request->phoneNumber;
        $classified->address=$request->address;
        $classified->city=$request->city;
        $classified->state=$request->state;
        $classified->price=$request->price;
        $classified->user_id=Auth::user()->id;
        if($classified->save())
        {
            if ($request->hasFile('image')) {
                $image      = $request->file('image');
                $fileName   = time() . '.' . $image->getClientOriginalExtension();
                $imagePath = '/uploads/classifieds';
                $request->image->move(public_path($imagePath), $fileName);


                $img=new Images();
                $img->itemid=$classified->id;
                $img->path=$imagePath."/".$fileName;
                $img->save();
            }


            return redirect()->route('home')->with('alert-success', 'Classified added for review successfully.');
        }
        else
        {
            return redirect()->back()->with('alert-danger', 'Unable to add please try after some time.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classified  $classified
     * @return \Illuminate\Http\Response
     */
    public function show(Classified $classified)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classified  $classified
     * @return \Illuminate\Http\Response
     */
    public function edit(Classified $classified)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classified  $classified
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classified $classified)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classified  $classified
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classified $classified)
    {
        //
    }
}
