<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    // Allows these columns to accept data from our forms
    protected $fillable = ['user_id', 'name', 'minutes'];
}
