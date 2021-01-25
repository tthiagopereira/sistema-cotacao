<script>
    jQuery(function ($) {
        $("#telefone").mask("(99) 99999-9999");
        $("#cpf").mask("999.999.999-99");
    });
</script>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name" class="audiowide"><i class="fa fa-user"></i> Nome Completo</label>
            <input type="text" class="form-control caixa_alta" name="name" id="name" aria-describedby="nameHelp"  placeholder="Entre com o nome" required
                   value="{{isset($registro->name) ? $registro->name : ''}}" autofocus minlength="5" maxlength="60">
            <div class="invalid-feedback">
                Informe seu <strong>nome completo</strong>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="email" class="audiowide"><i class="fa fa-envelope"></i> E-mail</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="guerraHelp" placeholder="Entre com o email" required
                   value="{{isset($registro->email) ? $registro->email : ''}}" >
            <div class="invalid-feedback">
                Informe um <strong>Email</strong> valido
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="cpf" class="audiowide"><i class="fa fa-user"></i> CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf" aria-describedby="nameHelp"  placeholder="Entre com o nome"
                   value="{{isset($registro->cpf) ? $registro->cpf : ''}}">
            <div class="invalid-feedback">
                Informe seu <strong>cpf</strong>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="telefone" class="audiowide"><i class="fa fa-whatsapp"></i> Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" aria-describedby="guerraHelp" placeholder="Telefone" required
                   value="{{isset($registro->telefone) ? $registro->telefone : ''}}" >
            <div class="invalid-feedback">
                Informe um <strong>Email</strong> valido
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="tipo" class="audiowide"><i class="fa fa-ban"></i> Tipo</label>
            <select class="form-control" id="tipo" name="tipo" required>
                <option value="">Informe o tipo de usuario</option>
                <option value="Militar" @if (isset($registro->tipo)) @if ($registro->tipo == "Militar") selected="selected" @endif @endif> Militar </option>
                <option value="Empresa" @if (isset($registro->tipo)) @if ($registro->tipo == "Empresa") selected="selected" @endif @endif>Empresa</option>
                <option value="Administrador" @if (isset($registro->tipo)) @if ($registro->tipo == "Administrador") selected="selected" @endif @endif > Administrador </option>
                <option value="Comandante"  @if (isset($registro->tipo)) @if ($registro->tipo == "Comandante") selected="selected" @endif @endif > Comandante </option>
                <option value="Cadastrador"  @if (isset($registro->tipo)) @if ($registro->tipo == "Cadastrador") selected="selected" @endif @endif > Cadastrador </option>
                <option value="Recrutador" @if (isset($registro->tipo)) @if ($registro->tipo == "Recrutador") selected="selected" @endif @endif > Recrutador </option>
            </select>
            <div class="invalid-feedback">Informe o <strong>TIPO</strong> de usuário</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="status" class="audiowide"><i class="fa fa-inbox"></i> Status</label>
            <select name="status" id="status" class="form-control custom-select" required>
                <option value="">Informe o status do Usuário</option>
                <option value="Ativo" @if(isset($registro->status)) @if($registro->status == "Ativo") selected @endif @endif>Ativo</option>
                <option value="Inativo" @if(isset($registro->status)) @if($registro->status == "Inativo") selected @endif @endif>Inativo</option>
            </select>
            <div class="invalid-feedback">Informe o <strong>STATUS</strong> do usuário</div>
        </div>
    </div>
    @if(isset($oms))
        <div class="col-md-4">
            <div class="form-group">
                <label for="status" class="audiowide"><i class="fa fa-inbox"></i> OM</label>
                <select name="om_id" id="om_id" class="form-control custom-select" required>
                    <option value="">Informe a OM</option>
                    @foreach($oms as $om)
                        <option value="{{$om->id}}" @if(isset($registro->om_id)) @if($registro->om_id == $om->id) selected @endif @endif>{{$om->nome}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">Informe o <strong>STATUS</strong> do usuário</div>
            </div>
        </div>
    @endif
</div>