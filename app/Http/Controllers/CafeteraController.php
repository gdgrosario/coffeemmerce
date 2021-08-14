<?php

namespace App\Http\Controllers;

use App\Http\Requests\CafeteraRequest;
use App\Models\Cafetera;
use Illuminate\Http\Request;

class CafeteraController extends Controller
{
    public function index()
    {
        $cafeteras = Cafetera::all();
        return $cafeteras;
    }

    public function store(CafeteraRequest $request)
    {
        $cafetera = Cafetera::create( $request->all() );
        return ['message' => 'Cafetera created', 'cafetera' => $cafetera];
    }

    public function show($id)
    {
        $cafetera = Cafetera::find($id);
        return $cafetera;
    }

    public function update(Request $request, $id)
    {
        $cafetera = Cafetera::findOrFail($id);

        $input = $request->all();
        $cafetera->update($input);
        return ['message' => 'Cafetera updated', 'cafetera' => $cafetera];
    }

    public function destroy($id)
    {
        Cafetera::destroy($id);
        return 'Cafetera deleted.';
    }
}
