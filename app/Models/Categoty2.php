<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoty2 extends Model
{
    use HasFactory;
    protected $table = 'categoty2s';
    protected $fillable = [
        'name', 'slug',];


    // public function post()
    // {
    //     // return $this->hasMany(Media::class);
    //     return $this->belongsToMany(post::class, 'category');
    // }
}
