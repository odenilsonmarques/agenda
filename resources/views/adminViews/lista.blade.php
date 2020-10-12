<h1>Contatos</h1>

@if(session('mensagemCadastro'))
    <div class="alert alert-success">
        <p>{{session('mensagemCadastro')}}</p>
    </div>
@endif
<table style="border:1px solid #111111">
    <tr>
        <th>NOME</th>
        <th>TELEFOONE</th>
        <th>EMAIL</th>
        <th>AÇÃO</th>
    </tr>
    @foreach ($listar as $item)
        <tr>
            <td>{{$item->nome}}</td>
            <td>{{$item->telefone}}</td>
            <td>{{$item->email}}</td>
            <td>
                <a href="{{route('editContato',['id'=>$item->id])}}">Editar</a>
                <a href="{{route('delContato',['id'=>$item->id])}}" onclick="return confirm('DESEJA CONFIRMAR A EXCLUSÃO ?')">Excluir</a>
            </td>
        </tr>
    @endforeach
</table>