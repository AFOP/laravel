<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('welcome', ['profiles' => $profiles]);
    }

    public function show()
    {
        return view('/items.profile');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required|min:10'
        ], [
            'title.required' => 'El título es obligatorio',
            'description.required' => 'La descripción es obligatoria'
        ]);

        $profiles = new Profile;
        $profiles->title = $request->title;
        $profiles->description = $request->description;
        $profiles->user = "ANDRES";
        $profiles->save();

        return redirect()->route('profile')->with('success', 'Perfil creado correctamente');
    }
}
