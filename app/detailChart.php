<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailChart extends Model
{
  protected $table='detailChart';
  protected $fillable=['initial Requirement','initial Solution','Menunggu Feedback & Gathering Req','solution Design','solution Development','POC','proposal Ready'];
}