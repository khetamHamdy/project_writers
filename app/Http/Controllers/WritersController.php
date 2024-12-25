<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WritersController extends Controller
{
    public function index()
    {
        $platforms=[];
        return view('admin.writers',compact('platforms'));
    }
}
