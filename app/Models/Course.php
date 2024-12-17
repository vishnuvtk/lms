<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'courseID',      
        'courseName',
        'description',
        
    ];

    public function faculty(){
        return $this -> belongsTo(Faculty::class);
    }

    public function students(){
        return $this -> belongsToMany(Student::class);
    }
}
