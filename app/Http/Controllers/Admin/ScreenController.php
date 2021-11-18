<?php

namespace App\Http\Controllers\Admin;

use App\Models\Screen;
use App\Http\Controllers\Controller;

class ScreenController extends Controller
{
  public function index()
  {
    return view('admin.screens.index');
  }

  /**
   * @param Screen $screen
   * @return Screen
   */
  public function edit(Screen $screen): Screen
  {
    return $screen;
  }
}