<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Pizza1;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function addPizza(Request $request)
    {
        $validasi = Validator::make($request->all(),[
           'pizzanameadd'=>'required|string|max:20',
            'pizzapriceadd'=>'required|numeric|min:10000',
            'Desc'=>'required|string|max:20',
            'pizzaimageadd'=>'required|image'
        ]);
        if ($validasi->fails()) {
            return redirect('/addpizza')
                ->withErrors($validasi)
                ->withInput();
        }
        $photo = $request->file('pizzaimageadd');
        $photo->move(public_path('/css/foto'),$photo->getClientOriginalName());
        DB::table('addnewpizza')->insert(
        ['Pizza_name'=>$request->pizzanameadd,
        'Pizza_price'=>$request->pizzapriceadd,
        'Pizza_desc'=>$request->Desc,
        'pizza_photo'=>$photo->getClientOriginalName()]
        );
       return redirect('/addpizza');


    }
    function register(Request $request)
    {
        $validasiregis = Validator::make($request->all(),[
            'usernameinput'=>'required|string',
            'inputEmail4'=>'required|email|unique',
            'inputPassword4'=>'required|confirmed|min:6',
            'phonenumber'=>'required|numeric',
            'adress'=>'required|string',
            'gridRadios'=>'required|in:male,female'
            ]);
        if ($validasiregis->fails()) {
            return redirect('/register')
                ->withErrors($validasiregis)
                ->withInput();
        }
        DB::table('registerpizza')->insert(
            ['Username'=>$request->usernameinput,
                'Email'=>$request->inputEmail4,
                'Password'=>$request->inputPassword4,
                'Adress'=>$request->adress,
                'Gender'=>$request->gridRadios,
                ]

        );
        return redirect('/register');
    }
//    function tampilanawal($id)
//    {
//        $pizza1 =Pizza1::where('id',$id)->get();
//
//
//        return view('detailpizza',['Pizza1'=>$pizza1]);
//   }

}
