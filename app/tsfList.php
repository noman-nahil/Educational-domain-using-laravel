<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tsfList extends Model
{
    protected $table = "tsf";
    protected $primaryKey = "id";
    public $timestamps = false;
}
