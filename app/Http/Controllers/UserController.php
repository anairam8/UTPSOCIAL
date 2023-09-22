<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Requests\Auth\profileRequest;
use Facades\App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        return view('layouts.profile');
    }

    public function store(profileRequest $request){
        User::saveOrUpdate($request->all());
        return redirect()->route('post',$request->username);
    }
}

   
    

