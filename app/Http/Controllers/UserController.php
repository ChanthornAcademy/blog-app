<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users.index');
    }
    public function show($id){

    //   return view('users.show',['userId'=>$id]);
    // return view('users.show')->with(['userId'=>$id,'data'=>$data]);
    $userId=$id;
    $data = 'some data';

      return view('users.show',compact('userId','data'));
    }

    // public function show($id =null){
    //     if($id){
    //         return $id;
    //     }
    //     return 'nothing';

    // }
}
