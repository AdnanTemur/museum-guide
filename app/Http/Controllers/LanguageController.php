<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        return response()->json($languages);
    }

    public function show($id)
    {
        $language = Language::findOrFail($id);
        return response()->json($language);
    }

    public function store(Request $request)
    {
        $language = Language::create($request->all());
        return response()->json($language, 201);
    }

    public function update(Request $request, $id)
    {
        $language = Language::findOrFail($id);
        $language->update($request->all());
        return response()->json($language);
    }

    public function destroy($id)
    {
        Language::destroy($id);
        return response()->json(null, 204);
    }
}
