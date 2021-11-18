<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peripheral extends Model
{
  use HasFactory;
  
  protected $fillable = [
    'inventory', 'per_type', 'usersabs_id'
  ];

  public function screen(): hasOne
  {
    return $this->hasOne(Screen::class, 'peripheral_id', 'id')->with('brand');
  }

  public function usersabs(): belongsTo
  {
    return $this->belongsTo(User::class, 'usersabs_id');
  }

  const PER_TYPE_SELECT = [
    'cpu'        => 'Cpu',
    'screen'     => 'Pantalla',
    'keyboard'   => 'Teclado',
    'pointer'    => 'Puntero',
    'speakers'   => 'Parlantes',
    'headphones' => 'Audífonos',
  ];
}