<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function indexuser()
    {
        
        return view('back-end.indexuser');
    }
    public function indexadmin()
    {
        
        return view('back-end.indexadmin');
    }
    

    public function profil()
    {
        
        return view('back-end.profil');
    }
    
    public function cv()
    {
        
        return view('back-end.cv');
    }



    public function actualite()
    {
        
        return view('back-end.actualite');
    }
    public function offre()
    {
        
        return view('back-end.offre');
    }
    public function about()
    {
        
        return view('front-end.about');
    }
    public function events()
    {
        
        return view('front-end.events');
    }
    public function contact()
    {
        
        return view('front-end.contact');
    }
    public function login()
    {
        
        return view('front-end.connect');
    }

}
