<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvasQuestao extends Model
{
    protected $table = 'provas_questao';
    use HasFactory;


    public function prova()

    {

        return $this->hasOne(Provas::class, 'id', 'id_prova');

    }


    public function alternativas()

    {

        return $this->hasMany(ProvasAlternativa::class, 'id_questao', 'id');

    }
}
