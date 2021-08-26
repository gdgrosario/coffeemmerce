<?php

namespace App\Http\Controllers;

use App\Models\CoffeMakers;
use Illuminate\Http\Request;

class CoffeMakersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $coffeMakers = CoffeMakers::all();
       return $coffeMakers; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input = $request->all();
      $coffeMaker = CoffeMakers::create($input);
      return $coffeMaker;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CoffeMakers  $coffeMakers
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $coffeMaker = CoffeMakers::find($id);
      return $coffeMaker; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CoffeMakers  $coffeMakers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $coffeMaker = CoffeMakers::find($id);
      return $coffeMaker; 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CoffeMakers  $coffeMakers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $coffeMaker = CoffeMakers::findOrFail($id);

      $input = $request->all();
      $coffeMaker->update($input);
      return ['message' => 'Coffe Maker updated', 'coffeMarker' => $coffeMaker]; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CoffeMakers  $coffeMakers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CoffeMakers::destroy($id);
        return 'Coffe Marker deleted';
    }
}
