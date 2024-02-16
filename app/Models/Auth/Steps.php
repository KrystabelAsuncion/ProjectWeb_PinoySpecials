<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Steps extends Model
{
    use HasFactory;

    protected $table = 'steps';
    protected $fillable = ['id','steps'];

    protected $guarded = [];
}
