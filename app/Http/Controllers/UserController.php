<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
 
        return User::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "email" => 'required',
            "username" => 'required',
            "tipo" => 'required'
        ]);
        return User::create($request->all());
    }
}
