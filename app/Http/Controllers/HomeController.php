<?php

namespace App\Http\Controllers;

use App\ModelCliente;
use App\ModelProposta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cliente = ModelCliente::select_cliente();

        $proposta = ModelProposta::select_proposta();


        return view('home', compact('cliente', 'proposta'));
    }
}
