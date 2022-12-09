<?php

namespace App\Http\Controllers;

use App\Models\Dewasa;
use Illuminate\Http\Request;

class DewasaController extends Controller
{
    public function index()
    {
        $dewasas = Dewasa::paginate(10);
        return view('dewasa.index', compact('dewasas'));

    }
    public function create()
    {
        return view('dewasa.create');
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
        ]);

        return Dewasa::create($store)
            ? redirect()->route('dewasa.index')->with('success', 'berhasil menambahkan data dewasa')
            : redirect()->route('dewasa.index')->with('failed', 'gagal menambahkan data dewasa');
    }

    public function edit(Dewasa $dewasax)
    {
        return view('dewasa.edit', compact('dewasax'));
    }

    public function update(Request $request, Dewasa $dewasax)
    {
        $update = $request->validate([
            'name' => ['required', 'string'],
            'jk' => ['required', 'string'],
            'usia' => ['required', 'numeric'],
            'bb' => ['required', 'numeric'],
            'tb' => ['required', 'numeric'],
            'tensi' => ['required', 'numeric']
        ]);

        return $dewasax->update($update)
            ? redirect()->route('dewasa.index')->with('success', 'berhasil ubah data dewasa')
            : redirect()->route('dewasa.index')->with('failed', 'gagal ubah data dewasa');
    }

    public function destroy(Dewasa $dewasax)
    {
        return $dewasax->delete()
            ? redirect()->route('dewasa.index')->with('success', 'berhasil hapus data dewasa')
            : redirect()->route('dewasa.index')->with('failed', 'gagal hapus data dewasa');
    }
}
