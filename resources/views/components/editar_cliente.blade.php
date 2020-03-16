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
                <?php

                foreach ($edit as $row) {
                }
                ?>
                <form action="{{ route('editar_cliente') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Razão Social</label>
                            <input type="text" class="form-control" value="<?php echo $row->nm_razao; ?>" placeholder="Razão Social" name="razao_social">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Nome Fantasia</label>
                            <input type="text" class="form-control" value="<?php echo $row->nm_fantasia; ?>" placeholder="Nome Fantasia" name="nome_fantasia">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">CNPJ</label>
                            <input type="text" id="cnpj" value="<?php echo $row->cd_cnpj; ?>" onkeypress='mascaraMutuario(this,Cnpj)' autocomplete="off" onpaste="return false" ondrop="return false" onblur='clearTimeout()' maxlength="18" class="form-control cpf_cnpj" placeholder="Digite o CNPJ" name="cnpj">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" class="form-control" value="<?php echo $row->ds_endereco; ?>" id="inputAddress" placeholder="Digite o Endereço" name="endereco">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" value="<?php echo $row->ds_email; ?>" id="inputEmail4" placeholder="Digite o Email" name="email">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Telefone</label>
                            <input type="text" class="form-control" value="<?php echo $row->cd_telefone; ?>" id="inputAddress" autocomplete="off" onpaste="return false" ondrop="return false" onkeypress='mascaraTelefone(this,Telefone)' onblur='clearTimeout()' minlength="14" maxlength="14" placeholder="(00)0000-0000" name="telefone">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Celular</label>
                            <input type="text" class="form-control" value="<?php echo $row->cd_celular; ?>" autocomplete="off" onpaste="return false" ondrop="return false" onkeypress='mascaraCelular(this,Celular)' onblur='clearTimeout()' minlength="15" maxlength="15" id="inputAddress" placeholder="(00) 00000-0000)" name="celular">
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome do Resposansável</label>
                            <input type="text" class="form-control" value="<?php echo $row->nm_responsavel; ?>" id="inputEmail4" placeholder="Digite o Nome do Resposansável" name="responsavel">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">CPF</label>
                            <input type="text" class="form-control cpf_cnpj" value="<?php echo $row->cd_cpf; ?>" autocomplete="off" onpaste="return false" ondrop="return false" onkeypress='mascaraMutuarioCPF(this,CPF)' autocomplete="off" onblur='clearTimeout()' maxlength="14" id="inputAddress" placeholder="Digite seu CPF" name="cpf">
                        </div>
                        <input type="text" value="<?php echo $id; ?>" name="id_cliente" hidden>

                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <button type="submit" class="btn" style=" background-color:rgb(41, 164, 185) !important;">Cadastrar</button>
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