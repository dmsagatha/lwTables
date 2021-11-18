<?php

namespace App\Http\Livewire\Admin\Screens;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Screen;

class ScreensTable extends DataTableComponent
{

  public function columns(): array
  {
    return [
      Column::make('ID', 'id')
          ->sortable()
          ->searchable(),
      Column::make('N° Inventario', 'peripheral.inventory')
          ->searchable(),
      Column::make('Serial', 'serial')
          ->sortable()
          ->searchable(),
      Column::make('Tamaño', 'size')
          ->sortable()
          ->searchable(),
      Column::make('Creación', 'created_at')
          ->sortable()
          ->searchable(),
    ];
  }

  public function query(): Builder
  {
    return Screen::with(['peripheral:id,inventory']);
  }
}