<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farm;

class FarmController extends Controller
{
    public function index()
    {
        $farms = Farm::paginate(10);
        return view('farms.index', compact('farms'));
    }

    public function create()
    {
        return view('farms.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:farms,email',
            'website' => 'nullable|url',
            'user_id' => 'required|exists:users,id', // Ensure user_id is validated
        ]);

        Farm::create($validatedData);

        return redirect()->route('farms.index');
    }

    public function show(Farm $farm)
    {
        return view('farms.show', compact('farm'));
    }

    public function edit(Farm $farm)
    {
        return view('farms.edit', compact('farm'));
    }

    public function update(Request $request, Farm $farm)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:farms,email,' . $farm->id,
            'website' => 'nullable|url',
            'user_id' => 'required|exists:users,id', // Ensure user_id is validated
        ]);

        $farm->update($validatedData);
        return redirect()->route('farms.index');
    }

    public function destroy(Farm $farm)
    {
        $farm->delete();
        return redirect()->route('farms.index');
    }
}
