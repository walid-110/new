<?php

namespace App\Http\Controllers;

use App\Models\poster;
use Illuminate\Http\Request;

class postercontoller extends Controller
{
    public function index(){

        $p =poster::all();
        return view('poster',['posters'=>$p]);
    }
}
