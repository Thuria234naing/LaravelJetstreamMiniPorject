<?php

namespace App\Http\Controllers;

use App\Models\newThuriya;
use Illuminate\Http\Request;

class NewThuriyaController extends Controller
{
    public function register(request $request){
        $data =  $this->getCreateData($request);
        newThuriya::create($data);
        dd($request->toArray());
     }
     //private
     private function getCreateData ($request){
        $data = [
            'name' => $request->name,
            'email' =>$request->email,
            'role' => $request->role,
            'password' =>$request->password ,
            'password_confirmation' => $request->password_confirmation
        ];
        return $data;
     }
}
