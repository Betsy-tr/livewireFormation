<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = Employe::all();
        return view('employe', [
            "users" => $users 
        ]);
    }
    
}
