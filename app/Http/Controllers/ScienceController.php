<?php

namespace App\Http\Controllers;

use App\Models\Science;
use Illuminate\Http\Request;

class ScienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($alert = null)
    {
      $sciences = Science::select(['id','name','description','url'])->get();
      return view('sciences.index', compact('sciences','alert'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('sciences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $science = new Science();
      $science->name = 'Chemistry';
      $science->description = 'This is a chemistry description';
      $science->url = 'https://cdn.pixabay.com/photo/2015/04/26/13/47/chemistry-740453_1280.jpg';
      $science->slug = 'chemistry';
      $alert = ($science->save()) ? 'Guardado con éxito' : 'Registro no guardado';
      return redirect()->route('sciences.index')->with('alert',$alert);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Science  $science
     * @return \Illuminate\Http\Response
     */
    public function show(Science $science)
    {
      return view('sciences.show', compact('science'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Science  $science
     * @return \Illuminate\Http\Response
     */
    public function edit(Science $science)
    {
      return view('sciences.edit',compact('science'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Science  $science
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Science $science)
    {
      $science->name = 'Chemistry 2';
      $science->description = 'This is the Chemistry 2 updated description';
      $alert = ($science->save()) ? 'Actualizado con éxito' : 'Registro no actualizado';
      return redirect()->route('sciences.index',['alert' => $alert]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Science  $science
     * @return \Illuminate\Http\Response
     */
    public function destroy(Science $science)
    {
      $alert = ($science->delete()) ? 'Eliminado con éxito' : 'Registro no eliminado';
      return redirect()->route('sciences.index',['alert' => $alert]);
    }
}
