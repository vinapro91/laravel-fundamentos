<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'string', 'between:2,100'],
            'nascimento' => ['required', 'date'],
            'genero' => ['required', 'string', 'in:M,F'],
            'turma_id' => ['required', 'int', 'exists:turmas,id']
        ];
    }
}
