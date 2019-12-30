<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalRequestsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('educational_requests', function (Blueprint $table) {
           $table->increments('id');
            $table->string('name');
            $table->string('mobile');
            $table->string('mail');
            $table->string('major');
            $table->string('country');
            $table->integer('budget_from')->nullable();
            $table->integer('budget_to')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('educational_requests');
    }

}
