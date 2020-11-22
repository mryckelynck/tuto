<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use App\User;
// use Illuminate\Foundation\Auth\RegistersUsers;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class ProfilController extends Controller
{

    public function edit($id){
        $user = User::findOrFail($id);

        return view("profil",[
            "user" => $user
        ]);
    }

    public function save(Request $request){
        if($request->id != ""){
            $user = User::findOrFail($request->id);
            $user->name = $request->name ?? "";
            $user->firstname = $request->firstname ?? "";
            $user->email = $request->mail ?? "";
            $user->address1 = $request->address1 ?? "";
            $user->address2 = $request->address2 ?? "";
            $user->zip_code = $request->zip;
            $user->city = $request->city ?? "";
            $user->phone = $request->phone ?? "";
            $user->phone_gsm = $request->gsm ?? "";
            $user->save();
        }


        return redirect("/");

    }
}
