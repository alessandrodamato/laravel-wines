<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wine;

class PageController extends Controller
{
  public function index()
  {
    $wines = Wine::paginate(9);
    return view('home', compact('wines'));
  }

  public function wineDetail($id)
  {
    $wine = Wine::find($id);

    return view('wine-detail', compact('wine'));
  }
}
