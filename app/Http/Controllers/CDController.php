<?php
namespace App\Http\Controllers;

use App\Models\Cd;
use Illuminate\Http\Request;

class CdController extends Controller
{
    public function index()
    {
        $cds = Cd::all();
        return view('cds.index', compact('cds'));
    }

    public function create()
    {
        return view('cds.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'release_year' => 'required|integer',
        ]);

        Cd::create($request->all());

        return redirect()->route('cds.index');
    }

    public function edit($id)
    {
        $cd = Cd::findOrFail($id);
        return view('cds.edit', compact('cd'));
    }

    public function update(Request $request, $id)
    {
        $cd = Cd::findOrFail($id);
        $cd->update($request->all());

        return redirect()->route('cds.index');
    }

    public function destroy($id)
    {
        $cd = Cd::findOrFail($id);
        $cd->delete();

        return redirect()->route('cds.index');
    }
}
