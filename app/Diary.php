<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = ['day', 'month', 'year', 'title', 'content', ];
}
