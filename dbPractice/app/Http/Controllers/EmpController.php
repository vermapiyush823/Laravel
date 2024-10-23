<?php

namespace App\Http\Controllers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpController extends Controller
{
    //
    public function loginUser(Request $req){
        $data = $req->validate([
            'name'=>'required|max:10',
            'password'=>'required|min:5'
        ]);
        if(DB::table('employee')->select('name','password')->where('name', $data['name'])->where('password', $data['password'])->get()){
            return redirect()->back()->with('success','Login Successful');
        }
        
        else{
            return "Invalid Credentials";
        }
    }

    public function signupUser(Request $req){
        $data = $req->validate([
            'name'=>'required|max:10',
            'password'=>'required|min:5'
        ]);
        if(DB::table('employee')->insert($data)){
            return redirect()->back()->with('success','User Registration Successful');
        }
        else{
            return "User Registration Failed";
        }
    }
}
