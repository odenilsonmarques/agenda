<h1>formulario de cadastro</h1>

@if($errors->any())
    @foreach ($errors->all() as $error)
        {{$error}}<br/>
    @endforeach
@endif

<form action="" method="POST">
    @csrf
    <label for="nome">Nome</label><br/>
    <input type="text" name="nome" value="{{old('nome')}}" ><br/><br/>

    <label for="telofone">Celular</label><br/>
    <input type="text" name="telefone" value="{{old('telefone')}}" ><br/><br/>

    <label for="email">E-mail</label><br/>
    <input type="email" name="email" value="{{old('email')}}" ><br/><br/>

    <input type="submit" value="Cadastrar"/>

</form>


