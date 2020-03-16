<?php

namespace App\Http\Controllers;

use DateTime;
use App\ModelCliente;
use App\ModelProposta;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class Proposta extends Controller
{
    public function create(Request $request)
    {
        if (empty($request->file('upload_file'))) {
            return redirect('home')->with('status_error', 'Adicione um arquivo!');
        }

        $path = $request->file('upload_file')->store('upload');
        $path = $request->file('upload_file')->hashName();
        $extesao = substr($path, -3);
        if ($extesao != "doc" and $extesao != "pdf") {
            return redirect('home')->with('status_error', 'Erro ao cadastrar, adicione apenas arquivos em .doc ou .pdf!');
        }

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

        ModelProposta::Create($request, $path, $id_cliente, $nm_cliente);
        return redirect('home')->with('status', 'Proposta Cadastrada!');
    }
    public function select_edit($id)
    {
        $edit = ModelProposta::select_edit($id);
        return view('components.editar_proposta', compact('edit', 'id'));
    }
    public function update(Request $request)
    {
        $nm_endereco = $request->nm_endereco_obra;
        $vl_total = $request->vl_total;
        $vl_sinal = $request->vl_sinal;
        $qt_parcelas = $request->qt_parcelas;
        $vl_parcelas = $request->vl_parcelas;
        $dt_proposta = $request->dt_proposta;
        $dt_inicio = $request->dt_inicio;
        $ds_status = $request->ds_status;

        if (empty($nm_endereco || $vl_total || $vl_sinal || $qt_parcelas
            || $vl_parcelas || $dt_proposta || $dt_inicio || $ds_status)) {
            dd("Preencha todos os Campos");
        }

        ModelProposta::update_proposta($request);
        return redirect('home')->with('status', 'Proposta Editada!');
    }
    public function delete($id)
    {
        ModelProposta::delete_proposta($id);
        return redirect('home')->with('status', 'Proposta Excluída!');
    }
    public function download($id)
    {
        //$aa =  Storage::download('storage/app/upload/', $id);
        return   response()->download(storage_path('app/upload/' . $id));
    }
}
