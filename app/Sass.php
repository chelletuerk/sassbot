<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sass extends Model
{
    protected $fillable = [
        'user_id',
        'sass_comment',
    ];
    protected $table = 'sass';
}
