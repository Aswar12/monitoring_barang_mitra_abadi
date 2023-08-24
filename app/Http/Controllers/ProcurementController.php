<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procurements;

class ProcurementController extends Controller
{
    public function index()
    {
        $procurements = Procurement::all();
        return view('procurements.index', compact('procurements'));
    }

    public function create()
    {
        // Menampilkan form pembuatan pengadaan
    }

    public function store(Request $request)
    {
        // Proses menyimpan pengadaan baru
    }

    public function show($id)
    {
        $procurement = Procurement::findOrFail($id);
        return view('procurements.show', compact('procurement'));
    }

    // Dan lain-lain
}
