<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use Illuminate\Http\Request;

class BalitaController extends Controller
{
    public function index()
    {
        $balitas = Balita::paginate(10);
        return view('balita.index', compact('balitas'));

    }
    public function create()
    {
        return view('balita.create');
    }

    public function store(Request $request)
    {
        $store = $request->validate([
            'name' => ['required', 'string'],
            'jk' => ['required', 'string'],
            'usia' => ['required', 'numeric'],
            'bb' => ['required', 'numeric'],
        ]);

        return Balita::create($store)
            ? redirect()->route('balita.index')->with('success', 'berhasil menambahkan data Balita')
            : redirect()->route('balita.index')->with('failed', 'gagal menambahkan data Balita');
    }

    public function edit(Balita $balitax)
    {
        return view('balita.edit', compact('balitax'));
    }

    public function update(Request $request, Balita $balitax)
    {
        $update = $request->validate([
            'name' => ['required', 'string'],
            'jk' => ['required', 'string'],
            'usia' => ['required', 'numeric'],
            'bb' => ['required', 'numeric'],
        ]);

        return $balitax->update($update)
            ? redirect()->route('balita.index')->with('success', 'berhasil ubah data balita')
            : redirect()->route('balita.index')->with('failed', 'gagal ubah data balita');
    }

    public function destroy(Balita $balitax)
    {
        return $balitax->delete()
            ? redirect()->route('balita.index')->with('success', 'berhasil hapus data balita')
            : redirect()->route('balita.index')->with('failed', 'gagal hapus data balita');
    }
}
