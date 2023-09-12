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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            /*
            Azienda                 Varchar(32)
            Stazione di partenza    Varchar(64)
            Stazione di arrivo      Varchar(64)
            Orario di partenza      Datetime(12)
            Orario di arrivo        Datetime(12)
            Codice Treno            Varchar(32)
            Numero Carrozze         Tinyint
            In Orario               Boolean Default True
            Cancellato              Boolean Default False   
            */
            $table->string('company', 32);
            $table->string('departure_station', 64);
            $table->string('arrival_station', 64);
            $table->dateTime('departure_time', 6);
            $table->dateTime('arrival_time', 6);
            $table->string('train_code', 32);
            $table->tinyInteger('car_number');
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
