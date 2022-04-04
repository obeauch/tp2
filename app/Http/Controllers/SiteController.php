<?php

namespace App\Http\Controllers;

use App\Http\Requests\FactRequest;
use App\Models\Fact;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        // $facts = Fact::all();
        // $nombre_facts = count($facts);
        // $fact = $facts[mt_rand(0, $nombre_facts -1)];

        return view('index', [
            'fact' => Fact::all()->random(1)
        ]);
    }

    public function faits() {
        $facts = Fact::all();

        return view('faits', [
            'facts' => $facts,
        ]);
    }

    public function create(){
        // $facts = Fact::all();

        return view('ajout');
    }

    /**
     * Fonction qui ajoute à la base de données
     * un fait et la longueur de celui-ci
    **/
    public function store(FactRequest $request) {
        $facts = new Fact;
        $facts->faits = $request->fait;
        $facts->longueur = strlen($request->fait);

        $facts->save();

        return redirect('/faits')->with('success', 'Fait ajouté!');
    }

    public function update($id){
        return view('modifier', [
                "fait" => Fact::find($id),
            ]);
    }


    public function storeUpdate(FactRequest $request)
    {
        $facts = Fact::findOrFail($request->id);
        $facts->faits = $request->fait;
        $facts->longueur = strlen($request->fait);

        $facts->save();

        return redirect('/faits')->with('success', 'Publication modifiée!');
    }

    public function destroy($id){
        Fact::destroy($id);

        return redirect('/faits')->with('destroy', 'Suppression effectuée');
    }
}
