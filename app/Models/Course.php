<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses'; 

    public function classes()
    {
        return $this->hasMany(Classes::class, 'course_id', 'id')->orderBy('status', 'ASC')->with('panels',);

        return $this->belongsToMany(Classes::class, 'course_id', 'id');
    }

   
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_courses', 'course_id', 'category_id');
    }

}
