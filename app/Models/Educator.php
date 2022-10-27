<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educator extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'title_en', 'title_kz', 'section', 'image'];
}
