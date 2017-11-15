<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    protected $fillable = ['img',];
    protected $guarded = ['id',];
    protected $table = 'upload_files';
}
