<?php

namespace App\Http\Controllers;

use App\Models\Cafetera;
use Illuminate\Http\Request;

class CafeteraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cafeteras = Cafetera::all();
        return $cafeteras;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cafetera = Cafetera::create($request->all(););
        return ['message' => 'Cafetera created', 'cafetera' => $cafetera];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cafetera = Cafetera::find($id);
        return $cafetera;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cafetera = Cafetera::findOrFail($id);

        $input = $request->all();
        $cafetera->update($input);
        return ['message' => 'Cafetera updated', 'cafetera' => $cafetera];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cafetera::destroy($id);
        return 'Cafetera deleted.';
    }
}
