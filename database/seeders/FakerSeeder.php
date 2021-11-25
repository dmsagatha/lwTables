<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Peripheral;
use App\Models\Screen;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FakerSeeder extends Seeder
{
  public function run()
  {
    Screen::query()->delete();
    Peripheral::query()->delete();
    Brand::query()->delete();
    
    DB::table('brands')->insert([
      ['name' => 'Dell',              'slug' => 'Dell'],
      ['name' => 'Hewlett Packard',   'slug' => 'HP'],
      ['name' => 'Apple Inc',         'slug' => 'Mac'],
      ['name' => 'Lenovo Group Ltd',  'slug' => 'Lenovo'],
    ]);
    
    // Crear Periféricos (Cpu, Pantalla, Teclado, Puntero, Parlantes y Audifonos)
    Peripheral::factory()->times(30)->create()->each(function ($peripheral) {
        Screen::factory()->create(['peripheral_id' => $peripheral->id]);
      /* if ($peripheral->per_type === 'screen') {
      } */
    });
  }
}