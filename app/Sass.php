<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sass extends Model
{
    protected $fillable = [
        'id',
        'sass_comment',
        'user_id',
    ];
    protected $table = 'sass';
}
