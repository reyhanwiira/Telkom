<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class scn extends Model
{
  protected $table='scn';
  protected $fillable=['projectName','segment','description','customer','lastAction','nextAction','currentProgress','keterangan','startProject','finishProject','note'];
}