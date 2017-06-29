<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;

class UserController extends Controller
{
    //
    //
    public function index()
    {
    	return "Hello Laravel Controller";
    }

    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function create(){
        $user = new UserModel;
        $user->name = 'Hiren Dave';
        $user->email = 'hiren@dave.com';
        $user->password='hiren';
        $user->save();
        echo 'New User is created';

    }

    public function update($id){
        $user = UserModel::find($id);
        $user->name = 'Hiren J.Dave';
        $user->save();
        echo 'User is Updated';
    }

    public function read(){
        $users = UserModel::all();
        foreach ($users as $user) {

            echo $user->name.'</br>';
        }
    }

    public function delete($id){
        $user = UserModel::find($id);
        $user -> delete();
        echo 'User is deleted';
    }

}
