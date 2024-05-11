<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvasAlternativa extends Model
{
    protected $table = 'provas_alternativas';
    use HasFactory;

    public function questao()

    {

        return $this->hasOne(ProvasQuestoes::class, 'id', 'id_questao');

    }
}
