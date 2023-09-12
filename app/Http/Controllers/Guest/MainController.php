<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class MainController extends Controller
{
    //
    public function index(){
        $trains = Train::all();

        dd($trains);

        return view('main');
    }
}
