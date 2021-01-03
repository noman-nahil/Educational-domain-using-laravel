<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = "subject";
    protected $primaryKey =  "id";
    public $timestamps = false;
}
