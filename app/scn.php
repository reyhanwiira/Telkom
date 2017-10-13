<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class scn extends Model
{
  protected $table='scn';
  protected $fillable=['projectName','segment','description','customer','lastAction','nextAction','status','information','currentProgress','note','startProject','finishProject'];
    
}