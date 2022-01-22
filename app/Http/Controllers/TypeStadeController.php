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
        return view('typestade.index',['data'=>$data]);
    }


    public function create()
    {
        return view('typestade.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required',
        ]);

        $data=new TypeTerrain;
        $data->name=$request->title;
        $data->save();

        return redirect('admin/typestade/create')->with('success','Les données ont été ajoutées.');
    }

    public function edit($id)
    {   
        $data=TypeTerrain::find($id);
        return view('typestade.edit',['data'=>$data]);
    }

    public function update(Request $request, $id)
    {
        $data=TypeTerrain::find($id);
        $data->name=$request->title;
        $data->save();


        return redirect('admin/typestade/'.$id.'/edit')->with('success','Les données ont été mises à jour.');
    }

    public function destroy($id)
    {
        TypeTerrain::where('id',$id)->delete();
       return redirect('admin/typestade')->with('success','Les données ont été supprimées.');
    }
}
