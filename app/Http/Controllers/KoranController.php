<?php

namespace App\Http\Controllers;

use App\Models\Koran;
use Illuminate\Http\Request;

class KoranController extends Controller
{
    public function index()
    {
        $korans = Koran::all();
        return view('korans.index', compact('korans'));
    }

    public function create()
    {
        return view('korans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'publisher' => 'required',
            'publication_date' => 'required|date',
        ]);

        Koran::create($request->all());

        return redirect()->route('korans.index');
    }

    public function edit($id)
    {
        $koran = Koran::findOrFail($id);
        return view('korans.edit', compact('koran'));
    }

    public function update(Request $request, $id)
    {
        $koran = Koran::findOrFail($id);
        $koran->update($request->all());

        return redirect()->route('korans.index');
    }

    public function destroy($id)
    {
        $koran = Koran::findOrFail($id);
        $koran->delete();

        return redirect()->route('korans.index');
    }
}
