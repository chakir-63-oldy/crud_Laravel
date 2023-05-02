<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class TachesController extends Controller
{
    public function index(){
        $data=Tache::all();
        return view('main',['data'=>$data]);
    }

    public function Rechercher(Request $request){
         $data=Tache::query()->where('description','like','%'.$request->search.'%')->get();
        // $data=Tache::where('titre','like','%'.$request->search.'%')->all();
        return view('main',compact('data'));
        
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $tache=new Tache;
        $tache->titre=$request->titre;
        $tache->description=$request->description;
        $tache->etat=$request->etat;
        $tache->save();
        
        return redirect()->route('tache.index');
    }

    public function show(string $id){
        $tache=Tache::findOrFail($id);
        return view('show',compact('tache'));
    }

    public function destroy(string $id){
        $tache=Tache::findOrFail($id);
        $tache->delete();
        return redirect()->route('tache.index');
    }

    public function edit(string $id){
        $tache=Tache::findOrFail($id);
        return view('edit',['tache'=>$tache]);
    }

    public function update(Request $request,string $id){
        $tache=Tache::findOrFail($id);
        $tache->titre=$request->titre;
        $tache->description=$request->description;
        $tache->etat=$request->etat;
        $tache->save();
        return redirect()->route('tache.index');
    }
}
