<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Kurs modelining ma'lumotlar bazasidagi jadvali (agar kerak bo'lsa nomni o'zgartirish mumkin)
    protected $table = 'courses';

    // Qaysi ustunlar mass assignable (to'ldirish mumkin)
    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}
