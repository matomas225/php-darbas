<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CreateController extends Controller
{
    public function index () {
        return view('create');
    }

    public function create (Request $request){
       $request->validate([
           'pavadinimas'=>'required',
           'kodas'=>'required',
           'pvm_kodas'=>'required',
           'adresas'=>'required',
           'telefonas'=>'required',
           'el_pastas'=>'required',
           'veikla'=>'required',
           'vadovas'=>'required',
           
       ]);
       Company::create($request->all());
       return Redirect::route('home');
    }
    public function destroy(Company $company){
        $company->delete();
        return Redirect::route('home');
    }
    public function edit(Company $company, Request $request){
        $company->fill($request->all())->save();
        return Redirect::route('home');
    }
    public function editView () {
        return view('create');
    }
}
