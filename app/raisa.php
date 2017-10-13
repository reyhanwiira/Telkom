<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class raisa extends Model
{
  protected $table='raisa';
  protected $fillable=['projectName','segment','description','customer','lastAction','nextAction','status','information','currentProgress','note','startProject','finishProject'];
}