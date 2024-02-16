<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipe';
    protected $fillable = [
        'recipe_name',
        'recipe_description',
        'recipe_image',
        'recipe_link',
        'views',
        'bookmarked'
    ];

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class,'recipe_category');
    }
    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function steps()
    {
        return $this->hasMany(Steps::class);
    }
}
