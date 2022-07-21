<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    Use SoftDeletes;

    protected $tablet = 'projects';

    protected $fillable = [
        'name',
        'description',
        'start',
    ];



}
