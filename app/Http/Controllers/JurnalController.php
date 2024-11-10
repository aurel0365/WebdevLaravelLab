<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    public function index()
    {
        $jurnals = Jurnal::all();
        return view('jurnals.index', compact('jurnals'));
    }

    public function create()
    {
        return view('jurnals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publication_date' => 'required|date',
        ]);

        Jurnal::create($request->all());

        return redirect()->route('jurnals.index');
    }

    public function edit($id)
    {
        $jurnal = Jurnal::findOrFail($id);
        return view('jurnals.edit', compact('jurnal'));
    }

    public function update(Request $request, $id)
    {
        $jurnal = Jurnal::findOrFail($id);
        $jurnal->update($request->all());

        return redirect()->route('jurnals.index');
    }

    public function destroy($id)
    {
        $jurnal = Jurnal::findOrFail($id);
        $jurnal->delete();

        return redirect()->route('jurnals.index');
    }
}
