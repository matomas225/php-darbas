<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index () {

        return view('home', [
            'companies'=>Company::paginate(10)
        ]);
    }
}
