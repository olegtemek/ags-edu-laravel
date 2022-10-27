<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'title_kz', 'title_en', 'answer', 'answer_en', 'answer_kz'];
}
