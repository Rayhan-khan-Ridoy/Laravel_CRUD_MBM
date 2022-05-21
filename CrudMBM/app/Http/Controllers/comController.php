<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class comController extends Controller
{
    
//----company---
public function comRead(){
    $com=Company::all();
    return $com;
}


public function comWriteView(){
    return view('comWriteView');
}


public function comWriteView_submit(Request $req){

   
    $com=new Company();
    $com->cname=$req->cname;
    $com->address=$req->address;
    $com->uniqueword=$req->uniqueword;
    

    $com->save();

    session()->flash('msg',"data entered!");
    return view('dashboard');

}

public function comEditView(Request $req){

    $com=Company::where('id',$req->id)->first();
    return view('comEditView')->with('com',$com);
}

public function comEditView_submit(Request $req){
   

    $com=Company::where('id',$req->id)->first();
    
    $com->cname=$req->cname;
    $com->address=$req->address;
    $com->uniqueword=$req->uniqueword;

    $com->save();

    session()->flash('msg',"data edited!");
    return view('dashboard'); 
}

public function comDelete(Request $req){

    $com=Company::where('id',$req->id)->delete();
    session()->flash('msg',"data deleted!");
    return view('dashboard'); 
}
}
