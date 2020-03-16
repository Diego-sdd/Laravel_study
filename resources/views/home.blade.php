@extends('layouts.app')

@section('content')
<div class="container-fluid" id="body_home">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <nav class="nav nav-pills nav-justified" id="nav_btn">
                    <a class="nav-item nav-link " data-tab="001" id="cadastro_cliente">Cadastro de Clientes</a>
                    <a class="nav-item nav-link" data-tab="002" id="lista_cliente">Lista de Clientes</a>
                    <a class="nav-item nav-link " data-tab="003" id="select_proposta">Lista de Propostas</a>
                    <a class="nav-item nav-link " data-tab="004" id="cadastra_proposta">Cadastro de Propostas</a>
                </nav>

                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if (session('status_error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('status_error') }}
                    </div>
                    @endif


                    <section class="row">

                        <section class="col-md-12" id="title_h2">
                            <div id="create_cliente">
                                <h6>Cadastro de Clientes</h6>
                                @include('components.cadastro_cliente')
                            </div>
                            <div id="tb_cliente">
                                <h6>Clientes</h6>
                                @include('components.table_cliente')
                            </div>
                            <div id="proposta">
                                <h6>Proposta</h6>
                                @include('components.proposta')
                            </div>
                            <div id="tabela_proposta">
                                <a class="btn" id="btn_export" href="{{ route('export') }}">Exportar Dados</a>

                                <h6>Lista de Proposta</h6>
                                <br>
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