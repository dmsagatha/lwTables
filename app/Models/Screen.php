<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
  use HasFactory;

  protected $fillable = [
    'serial', 'size', 'brand_id', 'peripheral_id'
  ];

  public function brand(): belongsTo
  {
    return $this->belongsTo(Brand::class, 'brand_id')->withDefault();
  }

  public function peripheral(): belongsTo
  {
    return $this->belongsTo(Peripheral::class, 'peripheral_id')->withDefault();
  }

  protected $dates = [
    'created_at',
    'updated_at',
  ];
  
  const SIZE_SELECT = [
    '34'   => '34',
    '27'   => '27',
    '25'   => '25',
    '24'   => '24',
    '22'   => '22',
    '21'   => '21',
    '20'   => '20',
    '19'   => '19',
    '18.5' => '18.5',
    '17'   => '17',
  ];
}
