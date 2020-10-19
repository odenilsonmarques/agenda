@extends('layouts.template')
@section('title','contatos')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if(session('mensagemCadastro'))
                <div class="alert alert-success alert-dismissible fade in text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p>{{session('mensagemCadastro')}}</p>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-6">
                    <form method="GET" action="{{route('listContatos')}}" class="form-inline">
                        <input type="text" name="search" class="form-control" placeholder="Informe o nome" autofocus style="min-width:327px;"/>
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </form>
                </div>
            </div><br/>
            <div class="table-responsive">  
                <div class="table-overflow">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>NOME <span class="glyphicon glyphicon-user"></span></th>
                                <th>NÚMERO <span class="glyphicon glyphicon-phone"></span></th>
                                <th>EMAIL <span class="glyphicon glyphicon-envelope"></span></th>
                                <th>AÇÃO</th>
                            </tr>
                        </thead>
                        @foreach ($listar as $item)
                            <tr>
                                <td>{{$item->nome}}</td>
                                <td>{{$item->telefone}}</td>
                                <td>{{$item->email}}</td>
                                <td>
                                    <a href="{{route('editContato',[$item->id])}}" class="btn-primary btn-sm">Editar</a>
                                    <a href="{{route('delContato',[$item->id])}}" onclick="return confirm('DESEJA CONFIRMAR A EXCLUSÃO ?')" class="btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

