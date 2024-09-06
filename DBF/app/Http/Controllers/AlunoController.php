<?php

namespace App\Http\Controllers;             
//terceiro a decorar
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function listar(){
        $alunos = Aluno::all();
        return view('listarAlunos')->with('alunos',$alunos);

    }
    public function listarId($id){
        $alunos = Aluno::find($id);
        if ($alunos){
        return response()->json($alunos);
        }else{
            return redirect('/alunos')->withErrors(['erro' => 'Aluno não encontrado']);
            //ta redirecionando quando não encontra o aluno para a pagina /alunos
        }
    }
    public function store(Request $request){
                    //store é o nome da função para o web
                    //lembrar o request
                    //o request é tipo um entregador

        //mais importante
       // return $request->all();
        $alunos = new Aluno;
        $alunos ->nome /* do model*/ =$request->nome /*das views novoAluo*/;

        $alunos ->data_nascimento =$request->data_nascimento;
        $alunos ->email =$request->email;
        $alunos ->cursso =$request->cursso;
        $alunos->save();
        //é isso

        return response()->json($alunos,201);
    }



    public function criar(/* NÃO TEM O REQUEST POR QUE não exige nenhuma requisição */){ //<!-- lembrar desta parte -->
        return view('novoAluno');
    }
    public function update(Request $request) {
        $aluno = Aluno::find($request->id);
        $aluno->nome = $request->nome;
        $aluno->data_nascimento = $request->data_nascimento;
        $aluno->email = $request->email;
        $aluno->curso = $request->curso;
        $aluno->save();

        return redirect()->route('alunos.listar');
    }

    
}
