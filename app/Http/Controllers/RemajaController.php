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
            'tensi' => ['required', 'string'],
            'lila' => ['required', 'numeric'],
        ]);

        return Remaja::create($store)
            ? redirect()->route('remaja.index')->with('success', 'berhasil menambahkan data remaja')
            : redirect()->route('remaja.index')->with('failed', 'gagal menambahkan data remaja');
    }

    public function edit(Remaja $remajax)
    {
        return view('remaja.edit', compact('remajax'));
    }

    public function update(Request $request, Remaja $remajax)
    {
        $update = $request->validate([
            'name' => ['required', 'string'],
            'jk' => ['required', 'string'],
            'usia' => ['required', 'numeric'],
            'bb' => ['required', 'numeric'],
            'tb' => ['required', 'numeric'],
            'tensi' => ['required', 'string'],
            'lila' => ['required', 'numeric'],
        ]);

        return $remajax->update($update)
            ? redirect()->route('remaja.index')->with('success', 'berhasil ubah data remaja')
            : redirect()->route('remaja.index')->with('failed', 'gagal ubah data remaja');
    }

    public function destroy(Remaja $remajax)
    {
        return $remajax->delete()
            ? redirect()->route('remaja.index')->with('success', 'berhasil hapus data remaja')
            : redirect()->route('remaja.index')->with('failed', 'gagal hapus data remaja');
    }
}

