<?php

namespace App\Http\Controllers;

use App\Models\Remaja;
use Illuminate\Http\Request;

class RemajaController extends Controller
{
    public function index()
    {
        $remajas = Remaja::paginate(10);
        return view('remaja.index', compact('remajas'));

    }
    public function create()
    {
        return view('remaja.create');
    }

    public function store(Request $request)
    {
        $store = $request->validate([
            'name' => ['required', 'string'],
            'jk' => ['required', 'string'],
            'usia' => ['required', 'numeric'],
            'bb' => ['required', 'numeric'],
            'tb' => ['required', 'numeric'],
            'tensi' => ['required', 'numeric'],
            'lila' => ['required', 'numeric'],
        ]);

        return Remaja::create($store)
            ? redirect()->route('remaja.index')->with('success', 'berhasil menambahkan data remaja')
            : redirect()->route('remaja.index')->with('failed', 'gagal menambahkan data remaja');
    }

    public function edit(Remaja $remaja)
    {
        return view('remaja.edit', compact('remaja'));
    }

    public function update(Request $request, Remaja $remaja)
    {
        $update = $request->validate([
            'name' => ['required', 'string'],
            'jk' => ['required', 'string'],
            'usia' => ['required', 'numeric'],
            'bb' => ['required', 'numeric'],
            'tb' => ['required', 'numeric'],
            'tensi' => ['required', 'numeric'],
            'lila' => ['required', 'numeric'],
        ]);

        return $remaja->update($update)
            ? redirect()->route('remaja.index')->with('success', 'berhasil ubah data remaja')
            : redirect()->route('remaja.index')->with('failed', 'gagal ubah data remaja');
    }

    public function destroy(Remaja $remaja)
    {
        return $remaja->delete()
            ? redirect()->route('remaja.index')->with('success', 'berhasil hapus data remaja')
            : redirect()->route('remaja.index')->with('failed', 'gagal hapus data remaja');
    }
}

