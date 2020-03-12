<?php

namespace App\Http\Controllers;

use App\ModelCliente;
use App\User;
use Illuminate\Http\Request;

class Cliente extends Controller
{
    public function create(Request $request)
    {


        $Cadastra = ModelCliente::Create($request);

        dd($Cadastra);
    }
}
