<?php

namespace App\Http\Controllers;

use App\ModelProposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class Proposta extends Controller
{
    public function create(Request $request)
    {

        if (empty($request->file('upload_file'))) {
            dd("Adicione um arquivo");
        }
        $path = $request->file('upload_file')->store('upload');

        $nm_cliente = $request->nm_cliente;
        $nm_endereco = $request->nm_endereco_obra;
        $vl_total = $request->vl_total;
        $vl_sinal = $request->vl_sinal;
        $qt_parcelas = $request->qt_parcelas;
        $vl_parcelas = $request->vl_parcelas;
        $dt_proposta = $request->dt_proposta;
        $dt_inicio = $request->dt_inicio;
        $ds_status = $request->ds_status;

        if (empty($nm_cliente || $nm_endereco || $vl_total || $vl_sinal || $qt_parcelas
            || $vl_parcelas || $dt_proposta || $dt_inicio || $ds_status)) {
            dd("Preencha todos os Campos");
        }

        $separa_id = explode(' ', $nm_cliente);
        $id_cliente =  mb_substr($separa_id[0], 0, 1, 'UTF-8');
        $nm_cliente =  mb_substr($separa_id[2], 0, 100, 'UTF-8');

        $Cadastra = ModelProposta::Create($request, $path, $id_cliente, $nm_cliente);

        dd($Cadastra);
    }
}
