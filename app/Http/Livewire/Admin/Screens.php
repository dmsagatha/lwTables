<?php

namespace App\Http\Livewire\Admin;

use App\Models\{Screen, Brand};
use App\Traits\DataTables;
use Livewire\WithPagination;
use Livewire\Component;

class Screens extends Component
{
  use WithPagination, DataTables;

  public $screen;
  public $screenId = null;
  public $searchColumns = ['serial', 'size', 'brand.slug', 'peripheral.inventory'];

  public $columns = [
      ['key' => 'id', 'value' => 'ID'],
      ['key' => 'serial', 'value' => 'Serial'],
      ['key' => 'size', 'value' => 'Tamaño'],
      ['key' => 'brand', 'value' => 'Marca'],
      ['key' => 'peripheral', 'value' => 'Periférico'],
      ['key' => 'inventary', 'value' => 'No. Inventario'],
  ];

  protected $model = Screen::class;
  protected $relation = ['brand', 'peripheral'];

  public function mount()
  {
    $this->setPaginationOption([10, 15, 20, 50]);
  }

  public function render()
  {
    return view('livewire.admin.screens', [
      'screens' => $this->screens,    //Screen::all()
      'brands'  => Brand::all(),
    ]);
  }

  public function getScreensProperty()
  {
    return $this->screensQuery->paginate($this->paginate);
  }

  public function getScreensQueryProperty()
  {
    return $this->getQuery();
  }
}
