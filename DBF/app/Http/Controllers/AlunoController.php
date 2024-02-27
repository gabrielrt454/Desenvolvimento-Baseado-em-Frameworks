<?php

namespace App\Http\Controllers;
use app\Models\Sluno;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function listar(){
        $alunos = Alunos::all();
        return response()->json($alunos);

    }
    public function listarId(){
        $alunos = Alunos::find($id);
        return response()->json($alunos);

    }
}
