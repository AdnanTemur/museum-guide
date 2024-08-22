<?php

namespace App\Http\Controllers;

use App\Models\Translation;
use Illuminate\Http\Request;

class TranslationController extends Controller
{
    public function index()
    {
        $translations = Translation::all();
        return response()->json($translations);
    }

    public function show($id)
    {
        $translation = Translation::findOrFail($id);
        return response()->json($translation);
    }

    public function store(Request $request)
    {
        $translation = Translation::create($request->all());
        return response()->json($translation, 201);
    }

    public function update(Request $request, $id)
    {
        $translation = Translation::findOrFail($id);
        $translation->update($request->all());
        return response()->json($translation);
    }

    public function destroy($id)
    {
        Translation::destroy($id);
        return response()->json(null, 204);
    }
}

