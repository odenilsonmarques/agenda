@extends('layouts.template')
@section('title','edicao')
    
@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{$error}}<br/>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel panel-danger">
                <div class="panel-heading"><h3><strong>Dados do Cadastro</strong></h3></div>
                    <form action="" method="POST">
                        @csrf
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nome" class="text-danger">Nome</label><br/>
                                        <input type="text" name="nome"value="{{$data->nome}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="telofone" class="text-danger">Celular</label><br/>
                                        <input type="text" name="telefone" id="telefone" value="{{$data->telefone}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="{{route('agendaHome')}}" class="btn btn-danger  ">CANCELAR</a>
                                    <button type="submit" class="btn btn-success">SALVAR ALTERAÇÃO</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
