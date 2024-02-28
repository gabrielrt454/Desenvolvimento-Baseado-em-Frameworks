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
    public function listarId(){
        $alunos = Aluno::find($id);
        return response()->json($alunos);

    }
}
