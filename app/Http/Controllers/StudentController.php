<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class StudentController extends Controller
{

  public function insert(Request $request){
   //echo "controller insert method called";
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');
   DB::table('students')->insert([
    ['name' => $name, 'email' => $email, 'password' => $password]
    ]);
    //return back()->withInput();
    return back();
    }//end of function insert

    public function view(){
    //echo "controller view method called";
    $data = DB::table('students')->select('id', 'name', 'email')->get();
    //print_r($data);
    return view('viewstudents')->with('data',$data);
  }//end of function view

    public function delete($id){
      echo "controller delete function";
       $del = DB::table('students')->where('id',$id)->delete();
       return back()->withInput();
    }  //end of function delete

    public function update($id){
        return view('update', ['id' => $id]);
    }  //end of function update

    public function modify(Request $request){
      echo "controller modify function";
      $id = $request->input('id');
      $name = $request->input('name');
      $email = $request->input('email');
      $password = $request->input('password');
      //echo $id;
      DB::table('students')
            ->where('id', $id)
            ->update(['name' => $name, 'email' => $email, 'password' => $password]);
    } //end of function modify
}
//end of class
