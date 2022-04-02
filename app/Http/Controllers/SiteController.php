<?php

namespace App\Http\Controllers;

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
        $facts = Fact::all();

        return view('ajout', [
            'facts' => $facts,
        ]);
    }


    public function store(Request $request) {
        $facts = new Fact;
        $facts->faits = $request->fait;
        // $facts->longueur = $request->longueur;
        $facts->longueur = 2;
        // dd($facts);


        $facts->save();

        return redirect('/faits')->with('success', 'Fait ajouté!');
    }
}
