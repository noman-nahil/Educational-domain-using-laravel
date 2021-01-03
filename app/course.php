<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = "course";
    protected $primaryKey = "id";
    public $timestamps = false;
}
