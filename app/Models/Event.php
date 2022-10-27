<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'title_en', 'title_kz', 'description', 'description_kz', 'seo_title', 'seo_title_en', 'seo_title_kz', 'description_en', 'seo_description', 'seo_description_en', 'seo_description_kz', 'image', 'section', 'slug', 'video', 'title_video', 'title_video_en', 'title_video_kz'];
}
