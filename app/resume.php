<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resume extends Model
{
  protected $table='resume';
  protected $fillable=['p0Proactive','p1Proactive','p2Proactive','p3Proactive','p0Raisa','p1Raisa','p2Raisa','p3Raisa','p0Scn','p1Scn','p2Scn','p3Scn','p0Other','p1Other','p2Other','p3Other'];
}
