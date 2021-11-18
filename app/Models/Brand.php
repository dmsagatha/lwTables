<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
  use HasFactory, Sluggable;

  protected $fillable = ['name', 'slug'];

  public function sluggable(): array
  {
    return [
      'slug' => [
        'source' => 'name',
      ],
    ];
  }

  public function screens(): hasMany
  {
    return $this->hasMany(Screen::class, 'brand_id', 'id');
  }
}