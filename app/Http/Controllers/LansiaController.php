<?php

namespace App\Http\Controllers;

use App\Models\Lansia;
use Illuminate\Http\Request;

class LansiaController extends Controller
{
    public function index()
    {
        $lansias = Lansia::all();
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
            'tensi' => ['required', 'string']
        ]);

        return Lansia::create($store)
            ? redirect()->route('lansia.index')->with('success', 'berhasil menambahkan data lansia')
            : redirect()->route('lansia.index')->with('success', 'gagal menambahkan data lansia');
    }
}
