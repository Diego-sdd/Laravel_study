<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<style>
    body {
        background-color: gray;
    }

    .container {
        margin-top: 5%;
        padding: 30px;
        border-radius: 2px;
        background-color: white;
    }
</style>

<body>
    <section class="container">
        <section class="row">
            <section class="col-md-12">
                <form action="{{ route('editar_proposta') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="sel1">Cliente:</label>

                            <select class="form-control" id="sel1" name="nm_cliente">
                                <?php

                                if ($edit == null) { ?>
                                    <option><?php echo "Não Existe cliente cadastrado"; ?></option>
                                    <?php
                                } else {
                                    foreach ($edit as $row) { ?>
                                        <option>{{ $row->id}} - {{ $row->nm_cliente}}</option>
                                <?php
                                    }
                                }
                                ?>
                            </select>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Endereço da Obra</label>
                            <input type="text" class="form-control" value="<?php echo $row->ds_endereco; ?>" name="nm_endereco_obra">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Valor Total</label>
                            <input type="text" id="valor" onblur="calcular()" maxlength="10" class="form-control" value="<?php echo $row->vl_total; ?>" onKeyPress="return(moeda(this,'.',',',event))" name="vl_total">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputAddress">Sinal</label>
                            <input type="text" class="form-control" id="inputAddress" value="<?php echo $row->vl_sinal; ?>" onKeyPress="return(moeda(this,'.',',',event))" name="vl_sinal">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Quantidade de Parcelas</label>
                            <input type="text" onblur="calcular()" maxlength="2" id="quantidade" class="form-control" value="<?php echo $row->qt_parcelas; ?>" name="qt_parcelas">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Valor das Parcelas</label>
                            <input type="text" class="form-control" id="var_qnt" value="<?php echo $row->vl_parcelas; ?>" readonly name="vl_parcelas">
                        </div>
                    </div>
                    <div class="form-row">


                        <div class="form-group col-md-3">
                            <label for="inputAddress">Proposta Feitas em</label>
                            <input type="date" id="ultimoDiaTrab" value="<?php echo $row->dt_proposta; ?>" class="form-control" name="dt_proposta">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Data Inicio do Pagamento</label>
                            <input type="date" id="ultimoDiaTrab" class="form-control" id="inputEmail4" value="<?php echo $row->dt_inicio_pagamento; ?>" name="dt_inicio">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="sel1">Status:</label>

                            <select class="form-control" id="sel1" value="<?php echo $row->ds_status; ?>" name="ds_status">
                                <option>Aberto</option>
                                <option>Fechado</option>

                            </select>

                        </div>
                        <input type="text" hidden value="<?php echo $id ?>" name="id_proposta">

                    </div>


                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </section>
        </section>

    </section>





</body>





<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery_btn.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/valida_cnpj.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/valida.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mascara.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/data_retroativa.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cal_parcela.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mascara_moeda.js') }}"></script>
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>