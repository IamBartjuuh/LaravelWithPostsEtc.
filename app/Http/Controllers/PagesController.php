<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact()
    {
        return view('helpdesk.contact');
    }
    
    public function tarieven()
    {
        return view('info.tarieven');
    }

    public function ppbart()
    {
        return view('persoonpage.bart');
    }

    public function pprowen()
    {
        return view('persoonpage.rowen');
    }
}
