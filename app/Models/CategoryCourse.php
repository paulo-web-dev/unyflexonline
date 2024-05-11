<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryCourse extends Model
{
    use HasFactory;

    
    protected $table = 'category_courses';

    public function classes()
    {
        $hoje = date('Y-m-d');
        return $this->hasMany(Classes::class, 'course_id', 'course_id');
    }
    
    public function category()
    {
  
        return $this->hasOne(Category::class, 'id', 'category_id')->orderBy('id', 'desc');
    }

}
