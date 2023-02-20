<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    public function index(){
        $home = Comic::all();
        return view('home');
    }
}
