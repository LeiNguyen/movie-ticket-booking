<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Showtime;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'genre',
        'release_date',
        'duration',
        'poster',
        'description',
    ]; // Cho phép các trường này được gán hàng loạt

    public function showtimes() {
        return $this->hasMany(Showtime::class);
    }
}
