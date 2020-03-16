@section('nova_proposta')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet">

<form action="{{ route('cadastro_proposta') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">

            <label for="sel1">Cliente:</label>
            <select class="form-control" id="sel1" name="nm_cliente">
                <?php

                if ($cliente == null) { ?>
                    <option><?php echo "Não Existe cliente cadastrado"; ?></option>
                    <?php
                } else {
                    foreach ($cliente as $row) { ?>
                        <option>{{ $row->id}} - {{ $row->nm_fantasia}}</option>
                <?php
                    }
                }
                ?>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="inputPassword4">Endereço da Obra</label>
            <input type="text" class="form-control" placeholder="Digite o Endereço" name="nm_endereco_obra">
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputAddress">Valor Total</label>
            <input type="text" id="valor" onblur="calcular()" maxlength="10" class="form-control" placeholder="Digite o Valor" onKeyPress="return(moeda(this,'.',',',event))" name="vl_total">
        </div>

        <div class="form-group col-md-3">
            <label for="inputAddress">Sinal</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Digite o Sinal" onKeyPress="return(moeda(this,'.',',',event))" name="vl_sinal">
        </div>

        <div class="form-group col-md-3">
            <label for="inputEmail4">Quantidade de Parcelas</label>
            <input type="text" onblur="calcular()" maxlength="2" id="quantidade" class="form-control" placeholder="Digite a quantidade de parcelas" name="qt_parcelas">
        </div>

        <div class="form-group col-md-3">
            <label for="inputAddress">Valor das Parcelas</label>
            <input type="text" class="form-control" id="var_qnt" value="" readonly name="vl_parcelas">
        </div>

    </div>
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputEmail4">Data Inicio do Pagamento</label>
            <input type="date" id="ultimoDiaTrab" class="form-control" name="dt_inicio">
        </div>

        <div class="form-group col-md-3">
            <label for="inputAddress">Proposta Feitas em</label>
            <input type="date" id="ultimoDia" class="form-control" name="dt_proposta">
        </div>

        <div class="form-group col-md-3">
            <label for="sel1">Status:</label>
            <select class="form-control" id="sel1" name="ds_status">
                <option>Aberto</option>
                <option>Fechado</option>
            </select>
        </div>

    </div>

    <div class="form-group col-md-3">
        <br>
        <input type="file" name="upload_file" id="upload_file" value="">
    </div>

    <button type="submit" style=" background-color:rgb(41, 164, 185) !important;" class="btn btn-primary">Cadastrar</button>
</form>
@show