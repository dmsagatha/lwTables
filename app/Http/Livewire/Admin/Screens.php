<?php

namespace App\Http\Livewire\Admin;

use App\Models\Screen;
use App\Traits\DataTables;
use Livewire\WithPagination;
use Livewire\Component;

class Screens extends Component
{
  use WithPagination, DataTables;

  public $screen;
  public $screenId = null;
  public $searchColumns = ['serial', 'size', 'brand.slug', 'peripheral.inventory'];

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
