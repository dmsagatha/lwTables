<?php

namespace App\Http\Livewire\Admin;

use App\Models\Screen;
use App\Traits\DataTables;
use Livewire\WithPagination;
use Livewire\Component;

class Screens extends Component
{
  use WithPagination, DataTables;

  //public $screens;

  public function render()
  {
    return view('livewire.admin.screens', [
      'screens' => Screen::all(),
    ]);
  }
}