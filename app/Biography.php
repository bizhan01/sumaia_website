<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
  protected $fillable = ['name','motto', 'biography', 'image'];
}
