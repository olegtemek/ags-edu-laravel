<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'title_kz', 'title_en', 'description', 'description_kz', 'description_en', 'req', 'req_en', 'req_kz'];
}
