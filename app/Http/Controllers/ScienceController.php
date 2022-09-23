<?php

namespace App\Http\Controllers;

use App\Models\Science;
use Illuminate\Http\Request;
use App\Http\Requests\ScienceRequest;
use Illuminate\Support\Str;

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
    public function store(ScienceRequest $request)
    {
      $alert = (Science::create( 
        $request->validated() + ['slug' => Str::slug($request->name,'-')] 
      )) ? 'Guardado con éxito' : 'Registro no guardado';
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
    public function update(ScienceRequest $request, Science $science)
    {
      $alert = $science->update($request->validated()+['slug' => Str::slug($request->name,'-')]) ? "Science updated" : "Problem with the update";
      return redirect()->route('sciences.index')->with('alert',$alert);
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
      return redirect()->route('sciences.index')->with('alert',$alert);
    }
}
