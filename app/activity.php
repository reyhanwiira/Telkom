<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
  protected $table='activity';
  protected $fillable=['tanggal','agenda','actionPlan','evidence','filename','upload'];
    
}