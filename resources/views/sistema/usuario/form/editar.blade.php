@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                            <div class="row">
                                <div class="col">
                                    @if(Auth::user()->tipo == 'Usuario')
                                        <h3><span class="audiowide">Seus dados</span></h3>
                                    @else
                                        <h3><span class="audiowide">Editar usuário</span></h3>
                                    @endif

                                </div>
                                @can('view',\App\User::class)
                                    <div class="col text-right">
                                        <a type="button" class="btn btn-primary cinza text-white" href="{{route('usuarios')}}">
                                            <i class="icon-logout">
                                                Voltar
                                            </i>
                                        </a>
                                    </div>
                                @endcan
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row ">
                                <div class="container-fluid ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Formulário</strong>
                                                </div>
                                                <div class="card-body">
                                                    <form action="{{route('usuario.atualizar',$id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        {{ csrf_field() }}
                                                        @include('sistema.usuario.form.formulario')
                                                        {{--Password--}}
                                                        <div class="form-group">
                                                            <label for="password" class="audiowide">Senha</label>
                                                            <input aria-describedby="passwordHelp" type="password" class="form-control" id="password" name="password" placeholder="Informe sua senha">
                                                            <small id="passwordHelp" class="form-text text-muted">Informe sua senha</small>
                                                        </div>
                                                        <button class="btn btn-block text-white btn-lg cinza audiowide">Salvar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection

@section('myscript')

@endsection