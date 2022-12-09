<?php

namespace App\Http\Controllers;

use App\Models\Lansia;
use Illuminate\Http\Request;

class LansiaController extends Controller
{
    public function index()
    {
        $lansias = Lansia::paginate(10);
        return view('lansia.index', compact('lansias'));
    }

    public function create()
    {
        return view('lansia.create');
    }

    public function store(Request $request)
    {
        $store = $request->validate([
            'name' => ['required', 'string'],
            'jk' => ['required', 'string'],
            'usia' => ['required', 'numeric'],
            'bb' => ['required', 'numeric'],
            'tensi' => ['required', 'numeric']
        ]);

        return Lansia::create($store)
            ? redirect()->route('lansia.index')->with('success', 'berhasil menambahkan data lansia')
            : redirect()->route('lansia.index')->with('failed', 'gagal menambahkan data lansia');
    }

    public function edit(Lansia $lansium)
    {
        return view('lansia.edit', compact('lansium'));
    }

    public function update(Request $request, Lansia $lansium)
    {
        $update = $request->validate([
            'name' => ['required', 'string'],
            'jk' => ['required', 'string'],
            'usia' => ['required', 'numeric'],
            'bb' => ['required', 'numeric'],
            'tensi' => ['required', 'numeric']
        ]);

        return $lansium->update($update)
            ? redirect()->route('lansia.index')->with('success', 'berhasil ubah data lansia')
            : redirect()->route('lansia.index')->with('failed', 'gagal ubah data lansia');
    }

    public function destroy(Lansia $lansium)
    {
        return $lansium->delete()
            ? redirect()->route('lansia.index')->with('success', 'berhasil hapus data lansia')
            : redirect()->route('lansia.index')->with('failed', 'gagal hapus data lansia');
    }
}
