<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeTerrain;

class TypeStadeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data=TypeTerrain::all();
        return view('home',['data'=>$data]);
    }

    
    public function create()
    {
        return view('typestade.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
        ]);

        $data=new TypeTerrain;
        $data->name=$request->title;
        $data->save();

        return redirect('admin/typestade/create')->with('success','Les données ont été ajoutées.');
    }
}
