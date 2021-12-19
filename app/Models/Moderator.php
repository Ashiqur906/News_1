<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moderator extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'image', 'role_id', 'description', 'company', 'gender', 'designation', 'created_by', 'modified_by'];
}
