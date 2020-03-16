<?php

namespace App\Http\Controllers;

use App\ModelCliente;
use App\User;
use Illuminate\Http\Request;

class Cliente extends Controller
{
    public function validacao_cnpj($cnpj)
    {

        $cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);
        // Valida tamanho
        if (strlen($cnpj) != 14)
            return redirect('home')->with('status_error', 'CNPJ incorreto!');
        // Verifica se todos os digitos são iguais
        if (preg_match('/(\d)\1{13}/', $cnpj))
            return redirect('home')->with('status_error', 'CNPJ incorreto!');
        // Valida primeiro dígito verificador
        for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++) {
            $soma += $cnpj{
                $i} * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }
        $resto = $soma % 11;
        if ($cnpj{
            12} != ($resto < 2 ? 0 : 11 - $resto))
            return redirect('home')->with('status_error', 'CNPJ incorreto!');
        // Valida segundo dígito verificador
        for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++) {
            $soma += $cnpj{
                $i} * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }
        $resto = $soma % 11;
        $resCNPJ = $cnpj{
            13} == ($resto < 2 ? 0 : 11 - $resto);

        if ($resCNPJ == false) {
            return redirect('home')->with('status_error', 'CNPJ incorreto!');
        }
    }
    public function valida_cpf($cpf)
    {
        // Extrai somente os números
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {

            return redirect('home')->with('status_error', 'CPF incorreto!');
        }
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return redirect('home')->with('status_error', 'CPF incorreto!');
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{
                    $c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{
                $c} != $d) {
                return redirect('home')->with('status_error', 'CPF incorreto!');
            }
        }
        $resCPF = true;
    }
    // CNPJ Gerado
    // 26.568.431/0001-42
    public function create(Request $request)
    {
        $valida = ModelCliente::valida_create($request);

        if ($valida != []) {
            return redirect('home')->with('status_error', 'Esse Cliente já está cadastrado!');
        }


        $cnpj = $request->cnpj;
        $temp = Cliente::validacao_cnpj($cnpj);
        if ($temp != null) {
            return redirect('home');
        }
        $cpf = $request->cpf;
        $temp_cpf = Cliente::valida_cpf($cpf);
        if ($temp_cpf != null) {
            return redirect('home');
        }




        $razao_s = $request->razao_social;
        $nome_f = $request->nome_fantasia;
        $cnpj = $request->cnpj;
        $endereco = $request->endereco;
        $email = $request->email;
        $telefone = $request->telefone;
        $celular = $request->celular;
        $responsavel = $request->responsavel;
        $cpf = $request->cpf;

        if (empty($razao_s and $nome_f and $cnpj and $endereco
            and $email and $telefone and $celular and $responsavel and $cpf)) {
            return redirect('home')->with('status_error', 'Preencha Todos os Campos!');
        }

        ModelCliente::Create($request);
        return redirect('home')->with('status', 'Cliente Cadastrado!');
    }
    public function update(Request $request)
    {

        $razao_s = $request->razao_social;
        $nome_f = $request->nome_fantasia;
        $cnpj = $request->cnpj;
        $endereco = $request->endereco;
        $email = $request->email;
        $telefone = $request->telefone;
        $celular = $request->celular;
        $responsavel = $request->responsavel;
        $cpf = $request->cpf;

        if (empty($razao_s and $nome_f and $cnpj and $endereco
            and $email and $telefone and $celular and $responsavel and $cpf)) {
            return redirect('home')->with('status_error', 'Preencha Todos os Campos!');
        }


        ModelCliente::update_cliente($request);
        return redirect('home')->with('status', 'Cliente Editado!');
    }
    public function select_edit($id)
    {
        $edit = ModelCliente::select_edit($id);

        return view('components.editar_cliente', compact('edit', 'id'));
    }
}
