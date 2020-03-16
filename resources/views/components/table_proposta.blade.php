@section('table_proposta')

<div style="overflow-x:auto;">
    <table class="table table-striped">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cliente</th>
                <th scope="col">Feita em</th>
                <th scope="col">Início do Pgto</th>
                <th scope="col">Endereço</th>
                <th scope="col">Parcelas</th>
                <th scope="col">Sinal R$</th>
                <th scope="col">Valor Parcela</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Baixar Arq.</th>
                <th scope="col">Opções</th>
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
                <td>{{ $row->ds_endereco}}</td>
                <td>{{ $row->qt_parcelas}}</td>
                <td>R${{ $row->vl_sinal}}</td>
                <td>{{ $row->vl_parcelas}}</td>
                <td>R${{ $row->vl_total}}</td>
                <td>{{ $row->ds_status}}</td>
                <!-- <td><a href="{{ asset('storage/app/aa.txt') }}" download="{{ asset('storage/app/upload/aa.txt') }}"> Read Paper</a></td> -->
                <td><a href="{{ route('downloadfile', $row->ds_arquivo)}}">Baixar</a></td>
                <td><a href="{{ route('proposta.edit', $row->id)}}" id="edit_proposta">Editar</a>
                    <a href="{{ route('proposta.delete', $row->id)}}" id="delete_proposta">Excluir</a>
                </td>

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