@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif



                    <section class="row">
                        <section class="col-md-12">
                            <div class="btn-group">
                                <button type="button" id="cadastro_cliente" class="btn btn-primary">Cadastro de Clientes</button>
                                <button type="button" id="lista_cliente" class="btn btn-primary">Lista/Editar Clientes</button>
                                <button type="button" id="cadastra_proposta" class="btn btn-primary">Nova Proposta</button>
                                <button type="button" id="select_proposta" class="btn btn-primary">Lista/Editar Clientes</button>
                                <a href="/register" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><button type="button" class="btn btn-primary">Novo Usuário</button></a>

                            </div>
                            <br> <br> <br>
                        </section>
                        <section class="col-md-12">
                            <div id="tb_cliente">
                                <h2>Clientes</h2>
                                @include('components.table_cliente')
                            </div>
                            <div id="create_cliente">
                                <h2>Clientes</h2>
                                @include('components.cadastro_cliente')
                            </div>
                            <div id="proposta">
                                <h2>Proposta</h2>
                                @include('components.proposta')
                            </div>
                            <div id="tabela_proposta">
                                <h2>Lista\Edição de Proposta</h2>
                                @include('components.table_proposta')
                            </div>

                        </section>

                    </section>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection