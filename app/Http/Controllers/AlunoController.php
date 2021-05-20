<?php

namespace App\Http\Controllers;


use Request;
use Illuminate\Support\Facades\DB;
use App\Models\Aluno;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\AlunosRequest;


class AlunoController extends Controller
{
    public function lista(){
        $alunos = Aluno::all();
        
        return view('website.listagem')->with('alunos', $alunos);
    }

    public function listaJson(){
        $alunos = Aluno::all();
        return response()->json($alunos);
    }

    public function cadastro(){
        return view('website.cadastro');
    }

    public function adiciona(AlunosRequest $request){

        $nome = Request::input('name');
        $idade = Request::input('age');
        $matricula = Request::input('enrollment');
        $nivel_de_ensino = Request::input('school_level');
        $serie = Request::input('grade');
        $turma = Request::input('school_class');
        $estado = Request::input('state');

        DB::insert('insert into alunos
        (nome, idade, matricula, 
        nivel_de_ensino, serie ,turma, estado) values(?,?,?,?,?,?,?)',
        array($nome, $idade, $matricula ,$nivel_de_ensino, $serie, $turma, $estado));

        return view('website.registrado');
    }

    public function exclui(){
        $alunos = Aluno::all();
        return view('website.excluir')->with('alunos', $alunos);
    }

    public function remove($id){
        $aluno = Aluno::find($id);
        $aluno->delete();
        return redirect()
            ->action('App\Http\Controllers\AlunoController@exclui');
    }

    public function removeall(){
        $aluno = Aluno::all();
        Aluno::query()->truncate();
        return redirect()
            ->action('App\Http\Controllers\AlunoController@lista');
    }

    public function home(){
        return view('website.home');
    }

}
