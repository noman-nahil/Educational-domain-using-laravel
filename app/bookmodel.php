<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookmodel extends Model
{
    protected $table = "library";
    protected $primaryKey =  "bookId";
    public $timestamps = false;
}
