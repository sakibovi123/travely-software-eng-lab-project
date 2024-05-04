<?php

use App\Models\Destination;
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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("hotel_name");
            $table->date("opening");
            $table->date("closing");
            $table->float("review");
            $table->string("description")->nullable();
            $table->string("image");
            $table->foreignIdFor(Destination::class);
            $table->decimal("price", 10, 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
