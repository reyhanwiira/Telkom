<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class upload extends Model
{
   public $fillable = ['filename'];

   public function Activity()
    {
        return $this->belongsTo('App\Activity');
    }
}