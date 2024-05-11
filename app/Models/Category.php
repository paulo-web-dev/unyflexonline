<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
   
    protected $table = 'categories';


    public function courses()
    {
        return $this->belongsToMany(Course::class, 'category_courses', 'category_id', 'course_id')->with('classes');
    }

    public function provas()
    {
        return $this->hasMany(Provas::class, 'id_categoria', 'id')->with('questoes')->inRandomOrder();
    }

    public function questions()
    {
        return $this->belongsToMany(ProvasQuestao::class, 'question_categories', 'category_id', 'question_id');
    }

}
