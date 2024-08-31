<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        return Pizza::all();
    }

    public function store(Request $request)
    {
        $pizza = Pizza::create($request->all());
        return response()->json($pizza, 201);
    }

    public function show($id)
    {
        return Pizza::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->update($request->all());
        return response()->json($pizza, 200);
    }

    public function destroy($id)
    {
        Pizza::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
