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
        Schema::create('detail_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('type_user_id')->constrained('type_user');
            $table->string('contact')->unique()->nullable();
            $table->longText('address')->nullable();
            $table->longText('photo')->nullable();
            $table->enum('gender', [1,2])->nullable();
            $table->integer('age')->nullable();
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
        Schema::dropIfExists('detail_user');
    }
};
