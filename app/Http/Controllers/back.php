<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class back extends Controller
{
    public function indexuser()
    {
        
        return view('back-end.indexuser');
    }
}
