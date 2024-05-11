<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';


    public function panels()
    {
        return $this->belongsToMany(Panel::class, 'teacher_panels', 'teacher_id', 'panel_id')->with('classes');
    }

    
    public function categoriess()
    {
        return $this->belongsToMany(Category::class, 'category_curriculo', 'docente_id', 'category_id');
    }
}
