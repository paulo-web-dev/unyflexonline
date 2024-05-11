<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoritos extends Model

{   
    protected $table = 'favoritos';

    public function class()

    {

        return $this->hasOne(Classes::class, 'id', 'id_class');

    }

    
    use HasFactory;
}
