<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mappa;
use App\Personaggi;
class CyberController extends Controller
{

    public function index() {

       
        $mappeGenerate = Mappa::all();


        return view('character', compact("mappeGenerate"));
    }
    public function show($id) {

        $item = Mappa::findOrFail($id);

        return view('mappaShow', compact("item"));
    }
    public function destroy($id) {

        $item = Mappa::findOrFail($id);
        $item -> delete();

        return redirect() -> route('character')-> withSuccess("Deleted " . "successfully");
    }
    public function createx() {

        
        return view('mappe-create')-> withSuccess("Created " . "successfully");
        
    }

    public function store(Request $request) {

        $data = $request -> all();

        $item = new Mappa;
        $item -> src = $data['src'];
        $item -> titolo = $data['titolo'];
        $item -> tipo =  $data['tipo']; 
        $item -> descrizione = $data['descrizione'];

        $item -> save();
        return redirect() -> route('character');
    }
    public function editor($id) {

        $item = Mappa::findOrFail($id);
        return view('mappaEdit', compact('item'));
    }
    public function update(Request $request, $id) {

        $validateData = $request -> validate([
            'src' => 'required',
            'titolo' => 'required',
            'tipo' =>   'required',
            'descrizione' => 'required'

            ]);

        $validationData = $request -> all();

        $item = new Mappa;
        $item -> src = $validationData['src'];
        $item -> titolo = $validationData['titolo'];
        $item -> tipo =  $validationData['tipo']; 
        $item -> descrizione = $validationData['descrizione'];

        $item -> save();
        return redirect() 
        -> route('character', $id)
        -> withSuccess("Updated " . "successfully");
       

        
    }
}

 

