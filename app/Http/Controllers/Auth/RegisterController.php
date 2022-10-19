<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'username' => ['required', 'string', 'unique:users,username'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile' => ['required', 'string', 'min:10'],
            'type' => ['required', 'string', 'in:Normal,Carbajar'],
            'registration' => [$data['type']=='Carbajar'?'required':'nullable', 'file'],
            'id_card' => [$data['type']=='Carbajar'?'required':'nullable', 'file'],
            'referalcode' => [$data['referalcode']?'required':'nullable','string',$data['referalcode']?'exists:users,ownid':''],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $request)
    {
        $request=(object)$request;
        if (isset($request->id_card)) {
            $image      = $request->id_card;
            $fileName   = rand(1000,999).time() . '.' . $image->getClientOriginalExtension();
            $imagePath = '/uploads/users';
            $request->id_card->move(public_path($imagePath), $fileName);
            $id_card=$imagePath."/".$fileName;
        }

        if (isset($request->registration)) {
            $image      = $request->registration;
            $fileName   = rand(1000,999).time() . '.' . $image->getClientOriginalExtension();
            $imagePath = '/uploads/users';
            $request->registration->move(public_path($imagePath), $fileName);
            $registration=$imagePath."/".$fileName;
        }

        return User::create([
            'username' => $request->username,
            'ownid' =>'MKT'.random_int(100000, 999999),
            'referalcode' => $request->referalcode,
            'id_card' => $request->type=='Normal'?'':$id_card,
            'registration' => $request->type=='Normal'?'':$registration,
            'type' => $request->type,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
            'passwordcrypt' => Crypt::encrypt($request->password),
        ]);
    }
}
