<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        return view("user.details",$search, compact('user'));
    }
    public function new(UserModel $userModel)
    {
        $data = ['newdata' => $userModel::all()];
        return view('user.new', $data);
    }
    public function save(Request $request ){
        $user = new User();
        $user->name = $request->get('name');
        $user->age = $request->get('age');
        $user->gender = $request->get('gender');
        $user->save();
        $users = ['list' =>User::all('name','age','gender')];
        return view('user.new',$users);
    }
    public function searchByName(Request $request)
    {
        $search=$request->get('search');
        $result = User::where('name', 'like', '%'.$search.'%')->get();
        if(count($result)){
            return $result;
        } else {
            return array('Result', 'No records found');
        }
    }
    public function delete($id){

        $user = DB::delete('delete from user where id=?', [$id]);
        $redirect = redirect('main/listusers');
        return $redirect;
    }
    public function edit($id){
        $user = DB::select('select * from user where id=?',[$id]);
        return view('user.edit', ['user'=>$user]);
    }
    public function update(Request $request, $id){
        $name=$request->get('name');
        $age=$request->get('age');
        $gender=$request->get('gender');
        $user = DB::update('update user set name=?, age=?, gender=? where id=?',[$name, $age, $gender, $id]);
        if($user){
            $redirect = redirect('main/listusers')->with('success');
        }else{
            $redirect = redirect('user.edit')->with('error');
        }
        return $redirect;
    }
}
