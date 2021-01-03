<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    protected $table = "gradeshit";
    protected $primaryKey = "id";
    public $timestamps = false;
}
