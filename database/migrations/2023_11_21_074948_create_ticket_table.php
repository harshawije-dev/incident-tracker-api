<?php

use App\Models\User;
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
        Schema::create('tickets', function (Blueprint $table) {
            $table->uuid('id');
            $table->integer('ticketNo');
            $table->string('itemCode', 7);
            $table->string('locationCode', 5);
            $table->string('informBy', 25)->nullable(true);
            $table->string('incidentStatus', 20);
            $table->string('title', 25);
            $table->string('excerpt', 100)->nullable(true);
            $table->text('description')->nullable(true);
            $table->string('referenceNo', 25)->nullable(true);
            $table->string('checkedBy', 20)->nullable(true);
            $table->string('attendBy', 20)->nullable(true);
            $table->dateTime('attendOn', 0)->nullable(true);
            $table->text('solution')->nullable(true);
            $table->string('vendorCode', 20)->nullable(true);
            $table->text('actions')->nullable(true);
            $table->dateTime('solvedOn', 0)->nullable(true);
            $table->string('approvedBy', 25)->nullable(true);
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
