<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wine;
use App\functions\helper;

class WineController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $wines = Wine::paginate(9);
    return view('wines.index', compact('wines'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $method= 'POST';
    $route= route('wines.store');
    $wine=null;

    return view('wines.edit-create', compact('method','route','wine'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $formData=$request->all();

    $formData['slug']= helper::generateSlug($formData['wine'], Wine::class);
    $newWine= new Wine();
    $newWine->fill($formData);
    $newWine->save();

    return redirect()->route('wines.show', $newWine);


  }

  /**
   * Display the specified resource.
   */
  public function show(Wine $wine)
  {

    return view('wines.show', compact('wine'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    // return view('wines.edit-create');
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
