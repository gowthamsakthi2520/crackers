<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('first_name',255)->nullable();
			$table->string('last_name',255)->nullable();
			$table->string('email',255)->nullable();
			$table->string('phone',15)->nullable();
			$table->string('city',255)->nullable();
			$table->string('statename',50)->nullable();
			$table->string('message',255)->nullable();
			$table->timestamp('created_at',0)->nullable();
			$table->timestamp('updated_at',0)->nullable();
			$table->timestamp('deleted_at',0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
