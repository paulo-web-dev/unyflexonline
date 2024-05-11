<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
    use HasFactory;
    protected $table = 'panels';

    public function classes()

    {

        return $this->belongsTo(Classes::class, 'classes_id', 'id')->with('courses');

    }



    public function video_lesson()

    {

        return $this->hasMany(VideoLesson::class, 'panel_id', 'id', );

    }


    public function teacher()

    {

        return $this->hasOne(Teacher::class, 'id', 'teacher_id', );

    }


}
