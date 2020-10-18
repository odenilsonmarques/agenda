@extends('layouts.template')

@section('title','cadastro')

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
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="nome" class="text-danger">Nome</label><br/>
                                        <input type="text" name="nome" value="{{old('nome')}}" class="form-control" placeholder="Digite o nome" >
                                    </div>
                                </div>
                            </div>   
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="telofone" class="text-danger">Celular</label><br/>
                                        <input type="text" name="telefone" id="telefone" value="{{old('telefone')}}" class="form-control" placeholder="(99) 9 9999-9999">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email" class="text-danger">E-mail</label><br/>
                                        <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Digite o email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-success">CADASTRAR</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




