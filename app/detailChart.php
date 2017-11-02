<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailChart extends Model
{
  protected $table='detailChart';
  protected $fillable=['Initial Requirement','Initial Solution','Menunggu Feedback & Gathering Req','Solution Design','Solution Development','POC','Proposal Ready'];
}