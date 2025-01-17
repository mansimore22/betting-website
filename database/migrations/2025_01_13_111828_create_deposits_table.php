<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->decimal('deposit_coins', 10, 2);
            $table->string('screenshot_path')->nullable();
            $table->timestamps();
          
        });
    }
    public function down()
    {
        Schema::dropIfExists('deposits');
    }
};