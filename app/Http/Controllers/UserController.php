<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function main(Request $request)
    {


        return view("user.main");
    }
    public function index(){
        $user = DB::table('user')->get();

        return view('user.list',compact('user'));

    }
    public function getUserById(UserModel $userModel, Request $request){
        $id=$request->get('id');
        $search=['search'=>$userModel::all()->where('id','=',$id)];
        $user = DB::table('user')->get();
        //$type=$request->get('type');
        //$searchable=["type"=>$deviceModel::all()->where('type','=',$type)];
        //return view("devices.namesearch",$search,$searchable);

        //$search=['search'=>$user::all()->where('id','=',$id)];
        return view("user.details",$search, compact('user'));
    }
}
