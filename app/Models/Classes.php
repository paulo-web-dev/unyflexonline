<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes'; 


    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id')->with('categories');
    }

    public function panels()
    {
        return $this->hasMany(Panel::class, 'classes_id', 'id')->with('video_lesson', 'teacher')->orderBy('start_time')->orderBy('horario');
    }

    
}
