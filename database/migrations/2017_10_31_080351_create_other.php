<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Others extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('other', function (Blueprint $table) {
          $table->increments('id');
          $table->string('projectName');
          $table->string('segment');
          $table->string('description');
          $table->string('customer');
          $table->string('lastAction');
          $table->string('nextAction');
          $table->string('currentProgress');
          $table->string('status');
          $table->string('information');
          $table->string('keterangan');
          $table->string('startProject');
          $table->string('finishProject');
          $table->string('AMSegment');
          $table->string('keahlian');
          $table->string('EstRevenue');
          $table->string('deliverable');
          $table->string('benefit');
          $table->string('supportAP');
          $table->string('tanggalActivity');
          $table->string('agenda');
          $table->string('actionPlan');
          $table->string('evidance');
          $table->string('lampiran');
          $table->timestamp('created_at')->nullable();
          $table->timestamp('updated_at')->nullable();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("other");
     }
}
