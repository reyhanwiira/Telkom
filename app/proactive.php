<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proactive extends Model
{
  protected $table='proactive';
  protected $fillable=['projectName','segment','description','customer','lastAction','nextAction','currentProgress','keterangan','startProject','finishProject'];
}