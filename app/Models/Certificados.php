<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificados extends Model
{   
    protected $table = 'certificados';
    use HasFactory;

    public function class()

    {

        return $this->hasOne(Classes::class, 'id', 'id_class' );

    }
}
