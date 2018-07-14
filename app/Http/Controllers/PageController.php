<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index(){
        return view('page.create');
    }

    public function edit(){
        return view('page.edit');
    }

    public function preview(){
        return view('page.preview');
    }
}
