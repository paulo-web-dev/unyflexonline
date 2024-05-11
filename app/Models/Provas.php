<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provas extends Model
{
    protected $table = 'provas';
    use HasFactory;

    public function categoria()

    {

        return $this->hasOne(Category::class, 'id', 'id_categoria');

    }


    public function questoes()

    {

        return $this->hasMany(ProvasQuestao::class, 'id_prova', 'id')->with('alternativas');

    }
}
