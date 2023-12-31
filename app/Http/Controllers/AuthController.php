<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    use HttpResponses;

    public function login(Request $request)
    {
       return 'login page';
    }

}
   
