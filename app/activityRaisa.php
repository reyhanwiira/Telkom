<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activityRaisa extends Model
{
  protected $table='activityRaisa';
  protected $fillable=['tanggal','agenda','actionPlan','evidence','filename','upload'];
    
}