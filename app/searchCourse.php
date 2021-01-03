<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class searchCourse extends Model
{
    use Notifiable;
    use SearchableTrait;
    protected $searchable = [
        'columns' => [
            'course.CourseName'  => 10, 
            'course.grade'  => 10, 
        ]
    ];

    protected $fillable = [
        'courseName','grade',
    ];
}