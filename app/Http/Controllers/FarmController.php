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
            'email' => 'required|email',
            'website' => 'nullable|url',
        ]);

        $validatedData['user_id'] = auth()->id(); // Set the user_id to the authenticated user

        Farm::create($validatedData);

        return redirect()->route('farms.index');
    }


    public function show(Farm $farm)
    {
        $user = $farm->user;
        $animals = $farm->animals;
        return view('farms.show', compact('farm', 'user', 'animals'));
    }


    public function edit(Farm $farm)
    {
        return view('farms.edit', compact('farm'));
    }

    public function update(Request $request, Farm $farm)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'website' => 'nullable|url',
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
