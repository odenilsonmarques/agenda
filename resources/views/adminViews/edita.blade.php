@extends('layouts.template')
@section('title','edicao')
    
@section('content')
    @if($errors->any())
        @foreach ($errors->all() as $error)
            {{$error}}<br/>
        @endforeach
    @endif

    <form action="" method="POST">
        @csrf
        <label for="nome">Nome</label><br/>
        <input type="text" name="nome" value="{{$data->nome}}"><br/><br/>

        <label for="telofone">Celular</label><br/>
        <input type="text" name="telefone" value="{{$data->telefone}}"><br/><br/>

        <label for="email">E-mail</label><br/>
        <input type="email" name="email" value="{{$data->email}}"><br/><br/>

        <input type="submit" value="Salvar Alteração"/>
    </form>
@endsection
