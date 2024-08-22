<?php

namespace App\Http\Controllers;

use App\Models\AudioFile;
use Illuminate\Http\Request;

class AudioFileController extends Controller
{
    public function index()
    {
        $audioFiles = AudioFile::all();
        return response()->json($audioFiles);
    }

    public function show($id)
    {
        $audioFile = AudioFile::findOrFail($id);
        return response()->json($audioFile);
    }

    public function store(Request $request)
    {
        $audioFile = AudioFile::create($request->all());
        return response()->json($audioFile, 201);
    }

    public function update(Request $request, $id)
    {
        $audioFile = AudioFile::findOrFail($id);
        $audioFile->update($request->all());
        return response()->json($audioFile);
    }

    public function destroy($id)
    {
        AudioFile::destroy($id);
        return response()->json(null, 204);
    }
}

