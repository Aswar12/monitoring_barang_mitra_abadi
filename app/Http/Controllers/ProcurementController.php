<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procurement;

class ProcurementController extends Controller
{
    public function index()
    {
        $procurements = Procurement::all();
        return view('procurements.index', compact('procurements'));
    }

    public function create()
    {
        return view('procurements.create');
        // Menampilkan form pembuatan pengadaan
    }

    public function store(Request $request)
    {
                // Validasi input
                $request->validate([
                    'id'=>'required',
                    'item_id'=> 'required',
                    'order_quantity'=> 'required',
                    'total_cost'=> 'required',
                    'procurement_date'=> 'required',
                    // Tambahkan validasi lainnya sesuai kebutuhan
                ]);
        
                // Simpan pengadaan baru
                Procurement::create(
                    $request->all()
                    // Simpan atribut lain sesuai kebutuhan
                );
        
                // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
                return redirect()->route('procurements.index')
                    ->with('success', 'Pengadaan berhasil ditambahkan');
        
        // Proses menyimpan pengadaan baru
    }

    public function show($id)
    {
        $procurement = Procurement::findOrFail($id);
        return view('procurements.show', compact('procurement'));
    }

    // Dan lain-lain
}
