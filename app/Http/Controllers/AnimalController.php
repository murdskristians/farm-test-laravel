<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Farm;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::with('farm')->paginate(10);
        return view('animals.index', compact('animals'));
    }

    public function create()
    {
        $farms = Farm::all();
        return view('animals.create', compact('farms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'animal_number' => 'required|string|max:255',
            'type_name' => 'required|string|max:255',
            'years' => 'required|integer',
            'farm_id' => 'required|exists:farms,id',
        ]);

        Animal::create($request->all());
        return redirect()->route('animals.index');
    }

    public function show($id)
    {
        $animal = Animal::with('farm')->findOrFail($id);
        return view('animals.show', compact('animal'));
    }

    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        $farms = Farm::all();
        return view('animals.edit', compact('animal', 'farms'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'animal_number' => 'required|string|max:255',
            'type_name' => 'required|string|max:255',
            'years' => 'required|integer',
            'farm_id' => 'required|exists:farms,id',
        ]);

        $animal = Animal::findOrFail($id);
        $animal->update($request->all());
        return redirect()->route('animals.index');
    }

    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();
        return redirect()->route('animals.index');
    }
}
