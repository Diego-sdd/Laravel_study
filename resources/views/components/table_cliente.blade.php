@section('table')
<div style="overflow-x:auto;">
    <table class="table table-striped">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Razão Social</th>
                <th scope="col">Nome Fantasia</th>
                <th scope="col">Endereço</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Celular</th>
                <th scope="col">Responsavel</th>
                <th scope="col">Cnpj</th>
                <th scope="col">Cpf</th>
            </tr>
        </thead>
        <?php $cont = 0; ?>
        <tbody>

            @foreach($cliente as $row)
            <tr>


                <?php $cont++; ?>
                <th scope="row">{{ $cont}}</th>
                <td>{{ $row->nm_razao}}</td>
                <td>{{ $row->nm_fantasia}}</td>
                <td>{{ $row->ds_endereco}}</td>
                <td>{{ $row->ds_email}}</td>
                <td>{{ $row->cd_telefone}}</td>
                <td>{{ $row->cd_celular}}</td>
                <td>{{ $row->nm_responsavel}}</td>
                <td>{{ $row->cd_cnpj}}</td>
                <td>{{ $row->cd_cpf}}</td>


            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@show