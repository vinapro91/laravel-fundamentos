<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aluno extends Model
{
    use HasFactory;

    /**
     * Indica os campos que podem ter valor definidos via 
     * definição de dados em massa
     *
     * @var array
     */
    protected $fillable = ['nome', "nascimento", "genero", "turma_id"];

    /**
     * Defini as conversões no momento da serialização
     *
     * @var array
     */
    // protected $casts = [
    //     'nascimento' => 'date:d/m/Y'
    // ];

    /**
     * Define os campos escondidos no momento da serialização
     */
    //protected $hidden = ['created_at', 'updated_at'];

    /**
     * Define os campos enviados no momento da serialização
     *
     * @var array
     */
    // protected $visible = ['id', 'nome', 'nascimento', 'genero', 'turma_id', 'aceito'];

    /**
     * Define os acessores enviados na serialização
     *
     * @var array
     */
    // protected $appends = ['aceito'];

    /**
     * Define a relação entre aluno e turma
     *
     * @return BelongsTo
     */
    public function turma(): BelongsTo
    {
        return $this->belongsTo(Turma::class);
    }

    /**
     * Cria um atributo virtual chamado aceito
     *
     * @return string
     */
    // public function getAceitoAttribute(): string
    // {
    //     return $this->attributes['nascimento'] > '2001-01-01' ? 'aceito' : 'Não Aceito';
    // }
}
