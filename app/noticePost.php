<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticePost extends Model
{
    protected $table = "notice";
    protected $primaryKey =  "id";
    public $timestamps = false;
}
