<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
        'url_image',
    ];
    public function expenses() : HasMany
    {
        return $this->hasMany(Expense::class);
    }
}
