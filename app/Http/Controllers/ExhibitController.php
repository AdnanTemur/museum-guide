<?php

namespace App\Http\Controllers;

use App\Models\Exhibit;
use Illuminate\Http\Request;

class ExhibitController extends Controller
{
    public function index()
    {
        $exhibits = Exhibit::all();
        return response()->json($exhibits);
    }

    public function show($id)
    {
        $exhibit = Exhibit::findOrFail($id);
        return response()->json($exhibit);
    }

    public function store(Request $request)
    {
        $exhibit = Exhibit::create($request->all());
        return response()->json($exhibit, 201);
    }

    public function update(Request $request, $id)
    {
        $exhibit = Exhibit::findOrFail($id);
        $exhibit->update($request->all());
        return response()->json($exhibit);
    }

    public function destroy($id)
    {
        Exhibit::destroy($id);
        return response()->json(null, 204);
    }
}

