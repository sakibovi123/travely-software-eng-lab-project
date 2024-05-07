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
            // facilities
            $table->boolean("free_wifi")->nullable();
            $table->boolean("is_parking")->nullable();
            $table->boolean("family_rooms")->nullable();
            $table->boolean("provide_meals")->nullable();
            $table->boolean("have_room_service")->nullable();
            $table->boolean("have_ac")->nullable();
            // bed preference
            $table->enum("bed_preference", [
                "Twin beds", "Double beds"
            ])->nullable();
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
