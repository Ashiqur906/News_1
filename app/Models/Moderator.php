<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moderator extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'image', 'role_id', 'description', 'company', 'gender', 'designation', 'created_by', 'modified_by'];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'moderator_role');
    }

    public function post()
    {
        return $this->belongsToMany(post::class, 'media_moderator');
    }

    public function distinctMediaen()
    {
        return $this->belongsToMany(post::class, 'media_moderator')->distinct()->take(4);
    }
    public function distinctPost()
    {
        return $this->belongsToMany(post::class, 'media_moderator')->distinct();
    }
    // public function seo()
    // {
    //     return $this->morphOne(Seo::class, 'seoable');
    // }
}
