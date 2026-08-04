<?php
// php artisan migrate:fresh
// for when we add or delete something
// i delete the swssion file so this command will work
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
        Schema::create('userpart', function (Blueprint $table) {
            $table->id();
            $table->string('name',55);
            $table->string('user_name',155);
            $table->string('email')->unique();

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
          Schema::dropIfExists('userpart');
    }
};
