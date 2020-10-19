<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
class ProfilesController extends Controller
{
 public function show(User $user)
    {
       // $user = User::find($id);
    return view('Profile',['user'=>$user]);
    }
 public function edit(User $user)
 {
    //  $user = User::find($id);
     return view('EditProfile',['user'=>$user]);
 }   
 public function update($id,Request $request)
    {
        request()->validate([
            'image'=>'mimes:jpeg,jpg,png',
            'contact_number'=>'min:7|numeric|nullable'
        ]);
        $user = User::find($id);
        if($request->file('image')!= null){
            $path = $request->file('image')->store('images');
            $user->image = $path;
        }
        ($user->role == 'Orgnaization')? $user->telephone_number = \request('contact_number'):$user->phone_number = \request('contact_number');
        $user->description = \request('description');
        $user->save();
         return redirect("/Profile/$id");
    }
}
