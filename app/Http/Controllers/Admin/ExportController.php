<?php

namespace App\Http\Controllers\Admin;

use App\Exports\PendaftarExport;
use App\Http\Controllers\Controller;
use App\Models\tb_pendaftar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function index(Request $request)
    {
        if ($request->status == 'Pendaftar_Diverifikasi') {
            $pendaftar = tb_pendaftar::where('status', 1)->select('nama_pendaftar', 'email', 'no_tlp')->get();
        } else {
            $pendaftar = tb_pendaftar::where('status', 2)->select('nama_pendaftar', 'email', 'no_tlp')->get();
        }
        return Excel::download(new PendaftarExport($pendaftar), $request->status . '-' . Carbon::now() . '.xlsx');
    }
}
