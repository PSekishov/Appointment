<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CabinetController extends Controller
{
    public function cabinet(){
        return view('/pages.cabinet');
    }
}
