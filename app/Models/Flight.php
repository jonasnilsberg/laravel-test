<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Flight
 * @mixin Eloquent
 */
class Flight extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'company'];
}
