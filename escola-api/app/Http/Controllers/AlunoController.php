<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Http\Resources\AlunoColecao;
use App\Http\Resources\AlunoCollection;
use App\Http\Resources\AlunoUnico;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AlunoCollection
     */
    public function index(Request $request): AlunoColecao
    {
        if ($request->query('relacoes') === 'turma') {
            $alunos = Aluno::with('turma')->paginate(2);
        } else {
            $alunos = Aluno::paginate(2);
        }

        return new AlunoColecao($alunos);
        // return response()->json(Aluno::get(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlunoRequest $request)
    {
        $data = $request->all();
        return response()->json(Aluno::create($data), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        return new AlunoUnico($aluno);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Aluno $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(AlunoRequest $request, Aluno $aluno)
    {

        $data = $request->all();

        $aluno->update($data);

        return $aluno;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $aluno = Aluno::findOrFail($id);
            $aluno->delete();
            return response()->json(['message' => 'Aluno deletado com sucesso'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
