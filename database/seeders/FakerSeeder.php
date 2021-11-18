<?php

namespace Database\Seeders;

use App\Models\User;
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
    User::query()->delete();
    
    User::create([
      'name'     => 'Super Admin',
      'email'    => 'superadmin@admin.net',
      'password' => bcrypt('superadmin'),
    ]);

    User::factory(19)->create();
    
    DB::table('brands')->insert([
      ['name' => 'Dell',              'slug' => 'Dell'],
      ['name' => 'Hewlett Packard',   'slug' => 'HP'],
      ['name' => 'Apple Inc',         'slug' => 'Mac'],
      ['name' => 'Lenovo Group Ltd',  'slug' => 'Lenovo'],
    ]);

    // Crear Periféricos (Cpu, Pantalla, Teclado, Puntero, Parlantes y Audifonos)
    Peripheral::factory()->times(3)->create()->each(function ($peripheral) {
        Screen::factory()->create(['peripheral_id' => $peripheral->id]);
      /* if ($peripheral->per_type === 'screen') {
      } */
    });
  }
}