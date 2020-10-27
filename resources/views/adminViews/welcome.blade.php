@extends('layouts.templateHome')
@section('title','agenda')

@section('content')
    <div class="row">
        <div class="col-lg-4 text-center imgAgenda">
            <img src="{{('assets/img/usuario04.png')}}"/>
            <div class="caption"><hr style="border-color:#e63888">
                <p>Pessoa</p>
            </div>
        </div>
        <div class="col-lg-4 text-center imgAgenda">
            <img src="{{('assets/img/phone01.png')}}"/>
            <div class="caption"><hr style="border-color:#e63888">
                <p>Telefone</p>
            </div>
        </div>
        <div class="col-lg-4 text-center imgAgenda">
            <img src="{{('assets/img/arroba03.png')}}"/>
            <div class="caption"><hr style="border-color:#e63888">
                <p>E-mail</p>
            </div>
        </div>
    </div>
@endsection
    