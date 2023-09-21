<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users ;
class UsersController extends Controller
{
    public function index()
    {
        $liste = users::all() ;
        return view('back-end.usersindex',compact("liste"));
    }

}
