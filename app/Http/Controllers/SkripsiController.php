<?php
namespace App\Http\Controllers;

use App\Models\Skripsi;
use Illuminate\Http\Request;

class SkripsiController extends Controller
{
    public function index()
    {
        $skripsis = Skripsi::all();
        return view('skripsis.index', compact('skripsis'));
    }

    public function create()
    {
        return view('skripsis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'advisor' => 'required',
            'year' => 'required|integer',
        ]);

        Skripsi::create($request->all());

        return redirect()->route('skripsis.index');
    }

    public function edit($id)
    {
        $skripsi = Skripsi::findOrFail($id);
        return view('skripsis.edit', compact('skripsi'));
    }

    public function update(Request $request, $id)
    {
        $skripsi = Skripsi::findOrFail($id);
        $skripsi->update($request->all());

        return redirect()->route('skripsis.index');
    }

    public function destroy($id)
    {
        $skripsi = Skripsi::findOrFail($id);
        $skripsi->delete();

        return redirect()->route('skripsis.index');
    }
}
