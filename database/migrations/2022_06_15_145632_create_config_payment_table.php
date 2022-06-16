<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_payment', function (Blueprint $table) {
            $table->id();
            $table->string('fee');
            $table->string('vat');
            $table->timestamps();
            $table->softDeletes(); // soft deletes akan menghasilkan field deleted_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('config_payment');
    }
};
