<?php

namespace App\Http\Controllers;



class PagesController extends Controller
{
    //home method
    public function home()
    {
        $people = ['Taylor', 'Matt', 'Jeffrey']; //array with 3 names
        ////load a view called 'welcome', pass array '$people' to the view, values == above line
        return view('welcome', compact('people')); // [people => $people] // array key 'people' to call values '$people'
        //$people being an array, compact('key') == php function
        //load view called 'welcome' pass a variable 'people' to welcome
    }
    public function  about()
    {
        return view('about');
    }
    
    public function  waffle()
    {
        return 'You created a page all about waffles';
    }
}

