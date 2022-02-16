<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myworldcontroller extends Controller
{
    public function index(){
        return view('myworld');
    }

    public function profile(){
        $name ="Shamit Nibras";
        $id = "19-40117-1";
        $dob= " June 28,2001";
        $names =array("Md Naymul Islam","Ariful Islam Marfy");
        return view('profile')
        ->with('name',$name)
        ->with('id', $id)
        ->with('dob',$dob)
        ->with('names',$names);
    }
}
