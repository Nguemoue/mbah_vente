<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cni')->unique();
            $table->date('delivery_date');
            $table->string('delivery_place');
            $table->string('profession');
            $table->string('domicile');
            $table->text('address');
            $table->string('phone_number');
            $table->float('amount', 8, 2);
            $table->string('subject');
            $table->string('legislation')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
