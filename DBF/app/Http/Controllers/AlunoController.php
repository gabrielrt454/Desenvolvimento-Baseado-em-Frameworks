<?php

namespace App\Http\Controllers;

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
       // return $request->all();
        $alunos = new Aluno;
        $alunos ->nome =$request->nome;
        $alunos ->data_nascimento =$request->data_nascimento;
        $alunos ->email =$request->email;
        $alunos ->cursso =$request->cursso;
        $alunos->save();


        return response()->json($alunos,201);
    }



    public function criar(){
        return view('novoAluno');
    }
}
