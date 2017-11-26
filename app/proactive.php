<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proactive extends Model
{
  protected $table='proactive';
  protected $fillable=['projectName','segment','description','customer','lastAction','nextAction','currentProgress','status','lastStatus','information','keterangan','startProject','finishProject','AMSegment','keahlian','EstRevenue','deliverable','benefit','supportAP'];
}
