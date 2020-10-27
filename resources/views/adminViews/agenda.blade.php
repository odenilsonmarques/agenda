@extends('layouts.template')

@section('title','agenda')

@section('content')
    <div class="row">
        <div class="col-lg-4  col-lg-offset-2 text-center contatos">
            <a href="{{route('addContato')}}">
                <span class="glyphicon glyphicon-earphone logo-small"></span>
                <h2>Novo Contato</h2>
            </a>
        </div>
        <div class="col-lg-4  text-center contatos">
            <a href="{{route('listContatos')}}">
                <span class="glyphicon glyphicon-user logo-small"></span>
                <h2>Contatos</h2>
            </a>
        </div>
    </div>
@endsection
    
