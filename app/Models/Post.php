<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'slug', 'category', 'post_type', 'ratings', 'release_date', 'run_time', 'website', 'company', 'description', 'link', 'potraitimage', 'landscapeimage', 'created_by', 'modified_by',
        'remarks', 'sort_by', 'is_active', 'modified_by',  'parent_id', 'related_post',  'news_location', 'country_origin', 'language'
    ];

    // public function category()
    // {
    //     return $this->belongsToMany(Category::class, 'category');
    // }

}
