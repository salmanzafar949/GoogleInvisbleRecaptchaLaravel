<?php

namespace App\Http\Controllers;
use App\Http\Requests\FormValidationRequest;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    //
    public function index()
    {
        return view('form');
    }

    public function store(FormValidationRequest $r)
    {
        //   $this->validate($r,[
        //          'name' => 'required|Max:20|string',
        //          'email' => 'required|Max:20|email',
        //          'username' => 'required|Max:20|string',
        //   ]);
    }
}
