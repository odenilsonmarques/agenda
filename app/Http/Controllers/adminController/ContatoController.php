<?php

namespace App\Http\Controllers\adminController;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
//importando a classe controller
use App\Http\Controllers\Controller;
//importanto o model a ser usado nesse controller
use App\Contato;

class ContatoController extends Controller
{
    public function cadastrar(){
        return view('adminViews.cadastro');
    }
    public function cadastrarAcao(Request $request){
        $request->validate([
            //a validacao abaixo poderia ser separada por uma barra, porem é apenas uma outra forma de fazer. No meu caso, preferir usar um array
            'nome'=>['required','string','min:4','max:30','unique:contatos'],
            'telefone'=>['required','string','min:11','unique:contatos']
        ]);
        $nome = $request->input('nome');
        $telefone = $request->input('telefone');
        $email = $request->input('email');

        $comparaEmail = Contato::where('email','=',$email)->first();
            if($comparaEmail && $email != null){
                return redirect()->route('addContato')
                ->withErrors('Erro! o email informada já existe')
                ->withInput();
            }else{
                $contato = new Contato();
                $contato->nome = $nome;
                $contato->telefone = $telefone;
                $contato->email = $email;
                $contato->save();
                return redirect()->route('listContatos')
                //a msg abaixo só exibida o processo der certo, e é conhecida como (flash mensage), esta será exibida na pagina que lista os dados, sendo acessada artravés da funcao session
                ->with('mensagemCadastro', 'Contato salvo com sucesso!');
        }
    }
    public function listar(){
        $listar = Contato::all()->sortBy('nome');
        return view('adminViews.lista',['listar'=>$listar]);
    }
    public function editar($id){
        //fazendo uma consulta a um intem especifico
        $data = Contato::find($id);
        if($data){
            return view('adminViews.edita',['data'=>$data]);
        }else{
            return redirect()->route('listContatos');
        }
    }
    public function editarAcao(Request $request, Contato $id){
       //$id -> $this;
        $request->validate([
            'nome'=>['required','string','min:4','max:30','unique:contatos',Rule::unique('id')->ignore($this->$id)],
            'telefone'=>['required','string','min:11','max:11','unique:contatos']
        ]);
        $nome = $request->input('nome');
        $telefone = $request->input('telefone');
        $email = $request->input('email');

        $comparaEmail = Contato::where('email','=',$email)->first();
        if($comparaEmail && $email != null){
            return redirect()->route('editContato')
            ->withErrors('Erro! o email informada já existe')
            ->withInput();
        }else{
            Contato::find($id)
            //para usar o comando abaixo é necessario permitir no arquivo model Contato, atraves do comando $fillable, pois é como se estivesse se passando um grande massa de dados. Porem pode ser feito de outra forma
            ->update(['nome'=>$nome,'telefone'=>$telefone,'email'=>$email]);
            return redirect()->route('listContatos')
            //a msg abaixo só exibida o processo der certo, e é conhecida como (flash mensage), esta será exibida na pagina que lista os dados, sendo acessada artravés da funcao session
            ->with('mensagemEdicao', 'Contato alterado com sucesso!');
        }
    }
    public function deletar($id){
        Contato::find($id)->delete();
        return redirect()->route('listContatos');
    }
}
