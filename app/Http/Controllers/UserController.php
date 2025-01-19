<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function index(){

    }
    public function authorize(){
    
        return view("/authorize");
    }
    public function store(StoreUserRequest $request){
        return $request->all();
    }
}
