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
        if (!Schema::hasTable('seats')) {
            Schema::create('seats', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('showtime_id');
                $table->string('seat_number'); // Ví dụ: A1, A2, B1,...
                $table->string('row'); // Hàng ghế: A, B, C...
                $table->enum('type', ['front', 'middle', 'back']); // Loại ghế
                $table->integer('price'); // Giá của ghế
                $table->boolean('is_booked')->default(false); // Trạng thái ghế đã đặt hay chưa
                $table->timestamps();

                $table->foreign('showtime_id')->references('id')->on('showtimes')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
