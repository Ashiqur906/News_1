<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'created_by', 'is_important', 'name', 'is_character', 'is_active', 'sort_by', 'modified_by'];
}