<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('showtimes')->insert([
            ['movie_id' => 1, 'start_time' => '2025-03-05 14:00:00', 'price' => 93032],
            ['movie_id' => 2, 'start_time' => '2025-03-05 16:00:00', 'price' => 102000],
            ['movie_id' => 3, 'start_time' => '2025-03-06 13:30:00', 'price' => 87500],
            ['movie_id' => 4, 'start_time' => '2025-03-06 15:30:00', 'price' => 95000],
            ['movie_id' => 5, 'start_time' => '2025-03-07 17:00:00', 'price' => 88000],
            ['movie_id' => 6, 'start_time' => '2025-03-07 19:00:00', 'price' => 92000],
            ['movie_id' => 7, 'start_time' => '2025-03-08 14:00:00', 'price' => 89000],
            ['movie_id' => 8, 'start_time' => '2025-03-08 16:00:00', 'price' => 91000],
            ['movie_id' => 9, 'start_time' => '2025-03-09 13:30:00', 'price' => 87000],
            ['movie_id' => 10, 'start_time' => '2025-03-09 15:30:00', 'price' => 86000],
            ['movie_id' => 11, 'start_time' => '2025-03-10 18:00:00', 'price' => 94000],
            ['movie_id' => 12, 'start_time' => '2025-03-10 20:00:00', 'price' => 97000],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('showtimes')->delete();
    }
};
