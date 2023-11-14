<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stagiaire;

class StagiaireController extends Controller
{
    public function addStagiaire(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
        ]);

        Stagiaire::create($validatedData);


        return back()->with('success', 'Stagiaire a été ajouté avec succès');
    }

    public function show()
    {
        $stagiaires = Stagiaire::paginate(3);
        return view('listeStagiaire', compact('stagiaires'));
    }

    public function edit($id)
    {
        $stagiaire = Stagiaire::find($id);
        return view('edit', ['profil' => $stagiaire]);
    }

    public function updateStagiaire(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:stagiaires,email,' . $id,
        ]);

        $stagiaire = Stagiaire::findOrFail($id);

        $stagiaire->update([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
        ]);

        return back()->with('success', 'Stagiaire a été mis à jour avec succès');
    }


    public function searchStagiaire(Request $request)
    {
        $searchQuery = $request->input('search');

        $results = Stagiaire::where('nom', 'like', '%' . $searchQuery . '%')
            ->orWhere('prenom', 'like', '%' . $searchQuery . '%')
            ->paginate(2);

        return response()->json([
            'data' => $results->items(),
            'links' => $results->links()->toHtml(),
        ]);
    }
}
