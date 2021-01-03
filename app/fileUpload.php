<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fileUpload extends Model
{
    protected $table = "fileupload";
    protected $primaryKey = "id";
    public $timestamps = false;
}
