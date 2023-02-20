<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    public function index(){
        // restituisco tutti i dati della tabella
        $home = Comic::all();
        return view('home');
    }
}
