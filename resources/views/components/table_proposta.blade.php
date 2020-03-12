@section('table_proposta')


<div style="overflow-x:auto;">
    <table class="table table-striped">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cliente</th>
                <th scope="col">Feita em</th>
                <th scope="col">Início do Pgto</th>
                <th scope="col">Serviços</th>
                <th scope="col">Parcelas</th>
                <th scope="col">Sinal R$</th>
                <th scope="col">Valor Parcela</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Baixar Arq.</th>
            </tr>
        </thead>

        <?php $cont = 0; ?>
        <tbody>
            @foreach($proposta as $row)
            <tr>
                <?php $cont++; ?>

                <th scope="row"> {{$cont}}</th>
                <td>{{ $row->nm_cliente}}</td>
                <td>{{ $row->dt_proposta}}</td>
                <td>{{ $row->dt_inicio_pagamento}}</td>
                <td>a</td>
                <td>{{ $row->qt_parcelas}}</td>
                <td>R${{ $row->vl_sinal}}</td>
                <td>{{ $row->vl_parcelas}}</td>
                <td>R${{ $row->vl_total}}</td>
                <td>{{ $row->ds_status}}</td>
                <td> <a href="{{ url(<?php echo $row->ds_arquivo ?>) }}" download>Baixar</a></td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>


@section('js')
<script>
    $(document).ready(function() {
        $('.table').DataTable();
    });
</script>
@endsection




@show