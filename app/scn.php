<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class scn extends Model
{
  protected $table='scn';
  protected $fillable=['projectName','segment','description','customer','lastAction','nextAction','currentProgress','status','information','keterangan','startProject','finishProject','AMSegment','keahlian','EstRevenue','deliverable','benefit','supportAP'];
    
}