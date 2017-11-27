<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class other extends Model
{
  protected $table='other';
  protected $fillable=['projectName','segment','description','customer','lastAction','nextAction','currentProgress','status','lastStatus','information','keterangan','startProject','finishProject','AMSegment','keahlian','EstRevenue','deliverable','benefit','supportAP'];
}