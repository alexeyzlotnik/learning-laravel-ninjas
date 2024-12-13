<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Models\Ninja;

class NinjaController extends Controller
{
    public function index() {
        // fetch all ninjas
        $ninjas = Ninja::with('color')->orderBy("created_at", "desc")->paginate(5);
        return view('ninjas.index', ['ninjas' => $ninjas]);
    }

    public function show($id) {
        // fetch concrete ninja by id
        $ninja = Ninja::with('color')->findOrFail($id);
        return view('ninjas.show', ['ninja' => $ninja]);
    }

    public function create() {
        $colors = Color::all();
        return view('ninjas.create', ['colors' => $colors]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name'=> 'required|string|max:255',
            'skill'=> 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'color_id' => 'required|exists:colors,id'
        ]);

        Ninja::create($validated);
        return redirect()->route('ninjas.index')->with('success', 'Ninja was created successfully');
    }

    public function destroy($id) {
        $ninja = Ninja::findOrFail($id);
        $ninja->delete();
        return redirect()->route('ninjas.index')->with('success', 'Ninja was deleted successfully');
    }
}
