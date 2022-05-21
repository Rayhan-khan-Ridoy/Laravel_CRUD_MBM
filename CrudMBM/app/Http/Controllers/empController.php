<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class empController extends Controller
{
    public function empRead(Request $req){

        $emp=Employee::all();
        
        return $emp;
    }


    public function empWriteView(Request $req){
        return view('empWriteView');
    }


    public function empWriteView_submit(Request $req){

       
        $emp=new Employee();
        $emp->name=$req->name;
        $emp->position=$req->position;
        $emp->city=$req->city;
        $emp->cname_id=$req->cname_id;

        $emp->save();

        session()->flash('msg',"data entered!");
        return view('dashboard');

    }

    public function empEditView(Request $req){

        $emp=Employee::where('id',$req->id)->first();
        return view('empEditView')->with('emp',$emp);
    }

    public function empEditView_submit(Request $req){
       

        $emp=Employee::where('id',$req->id)->first();
        
        $emp->name=$req->name;
        $emp->position=$req->position;
        $emp->city=$req->city;
        $emp->cname_id=$req->cname_id;

        $emp->save();

        session()->flash('msg',"data edited!");
        return view('dashboard'); 
    }

    public function empDelete(Request $req){

        $emp=Employee::where('id',$req->id)->delete();
        session()->flash('msg',"data deleted!");
        return view('dashboard'); 
    }

    //----login---
    public function login(){
        return view('login');
      }
    
    public function login_submit(Request $req){
      
                              $this->validate($req,
                                  [
    
                                      'username'=>'required|',//
                                      'password'=>'required|'
    
                                  ],
                                  [
                                      'username.required'=>'Please provide username',
                                      'username.max'=>'Username must not exceed 20 alphabets'
                                  ]
                              );
                              if($req->username=="ridoy" && $req->password=="1234")
                              {
                                session()->put('username',$req->username);
                                session()->flash('msg','login successful!');
                                return view('dashboard');
                              }
                             /* $ad = Adminregistration::where('username',$req->username)->where('password',md5($req->password))->first();
    
                                if($ad) {
                                session()->flush();
                                session()->put('id',$ad->id);
                                session()->put('username',$ad->username);
                                session()->flash('msg','login successful!');
                                return redirect()->route('adminDashboard');
                                //session()->get('username')
                                //session()->has('username')
                                //session()->forget('username'),session()->forget(['id','username'])
                                //session()->flush()  --->session destroy
                                //session()->flash('key',value)  ---> This will store the value in session key for sub sequent request
                             }
                             else return "Login Failed";
                                */
    
                      }

                      public function logout(){
                        session()->flush();
                        session()->flash('msg','logout successful!');
                        return redirect()->route('login');
                      }



   
}
