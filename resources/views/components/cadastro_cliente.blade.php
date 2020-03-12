<form action="{{ route('cadastro_cliente') }}" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Razão Social</label>
            <input type="text" class="form-control" placeholder="Razão Social" name="razao_social">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Nome Fantasia</label>
            <input type="text" class="form-control" placeholder="Nome Fantasia" name="nome_fantasia">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAddress">CNPJ</label>
            <input type="text" id="cnpj" onkeypress='mascaraMutuario(this,Cnpj)' onblur='clearTimeout()' maxlength="18" class="form-control cpf_cnpj" placeholder="Digite o CNPJ" name="cnpj">
        </div>

        <div class="form-group col-md-6">
            <label for="inputAddress">Endereço</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Digite o Endereço" name="endereco">
        </div>

    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Digite o Email" name="email">
        </div>
        <div class="form-group col-md-3">
            <label for="inputAddress">Telefone</label>
            <input type="text" class="form-control" id="inputAddress" onkeypress='mascaraTelefone(this,Telefone)' onblur='clearTimeout()' minlength="14" maxlength="14" placeholder="(00)0000-0000" name="telefone">
        </div>
        <div class="form-group col-md-3">
            <label for="inputAddress">Celular</label>
            <input type="text" class="form-control" onkeypress='mascaraCelular(this,Celular)' onblur='clearTimeout()' minlength="15" maxlength="15" id="inputAddress" placeholder="(00) 00000-0000)" name="celular">
        </div>

    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Nome do Resposansável</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Digite o Nome do Resposansável" name="responsavel">
        </div>
        <div class="form-group col-md-6">
            <label for="inputAddress">CPF</label>
            <input type="text" class="form-control cpf_cnpj" onkeypress='mascaraMutuarioCPF(this,CPF)' onblur='clearTimeout()' maxlength="14" id="inputAddress" placeholder="Digite seu CPF" name="cpf">
        </div>

    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
</form>