@extends('master')
@section('content')

    <script>
        jQuery(function ($) {
            $("#identidade_militar").mask("999999999-9");
            $("#contato").mask("(99) 99999-9999");
        });
    </script>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                            <div class="row">
                                <div class="col">
                                    <h3><span class="audiowide">Gerenciamento de usuários <i class="fa fa-users"></i> </span></h3>
                                </div>

                                <div class="col text-right">
                                    @can('view',\App\User::class)
                                        <a type="button" class="btn btn-primary cinza text-white pisca" href="{{route('usuario.adicionar')}}">
                                            <i class="fa fa-users">
                                                Criar
                                            </i>
                                        </a>

                                    @endcan
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row ">
                                <div class="container-fluid ">
                                    {{--class="table table-striped table-bordered dt-responsive nowrap" >--}}
                                    <table id="example" class="display compact hover" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th class="">Nome</th>
                                            <th class="">E-mail</th>
                                            <th class="text-center">Tipo</th>
                                            <th class="text-center">Contato</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">CPF</th>
                                            <th class="text-center">OM</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($usuario as $registro)

                                            <tr>
                                                <td>{{$registro->id}}</td>
                                                <td>{{$registro->name}}</td>
                                                <td>{{$registro->email}}</td>
                                                <td class="text-center">{{$registro->tipo}}</td>
                                                <td class="text-center">{{$registro->telefone}}</td>
                                                <td class="text-center">{{$registro->status}}</td>
                                                <td class="text-center">{{$registro->cpf}}</td>
                                                <td class="text-center">''</td>
                                                <td class="text-center">
                                                    @can('view',\App\User::class)
                                                        <a href="{{route('usuario.editar',$registro->id)}}" data-toggle="tooltip" data-placement="top" title="Editar usuário" class="link"><i class="icon-pencil"></i></a>
                                                        @can('delete',\App\User::class)
                                                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{ $registro->id }}" data-toggle="tooltip" data-placement="top" title="Excluir usuário" class="link"><i class="icon-trash"></i></a>
                                                        @endcan
                                                    @endcan
                                                </td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter{{ $registro->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title audiowide text-danger" id="exampleModalLongTitle">Atenção!</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="container">
                                                                    <h4 class="audiowide">Tem certeza que deseja excluir esse usuário: <span class="text-danger">{{$registro->email}}</span></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                                                            <a href="{{route('usuario.excluir',$registro->id)}}" type="button" class="btn btn-danger">Excluir</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th class="">Nome</th>
                                            <th class="">E-mail</th>
                                            <th class="text-center">Tipo</th>
                                            <th class="text-center">Contato</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">CPF</th>
                                            <th class="text-center">OM</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->
        </div>

    </div>

@endsection

@section('myscript')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({

                dom: 'Bfrtip',
                "oLanguage": {
                    "sLengthMenu": "Mostrar _MENU_ registros por página",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
                    "sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
                    "sInfoFiltered": "(filtrado de _MAX_ registros)",
                    "sSearch": "Pesquisar: ",


                    "oPaginate": {
                        "sFirst": "Início",
                        "sPrevious": "Anterior",
                        "sNext": "Próximo",
                        "sLast": "Último"
                    }
                },
                "order": [[0,"desc"]],

                "columnDefs": [
                    {
                        "targets": [ 0 ],
                        "visible": false,
                        "searchable": false
                    },
                    {
                        "targets": [ 0 ],
                        "visible": false
                    }
                ],

                buttons: [
                    'excel'
                ],
                responsive: true,
            });

        } );
    </script>
@endsection