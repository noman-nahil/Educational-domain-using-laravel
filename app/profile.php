<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = "userinfo";
    protected $primaryKey = "id";
    public $timestamps = false;
 
}
