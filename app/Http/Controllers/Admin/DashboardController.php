<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tb_pendaftar;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (\request()->ajax()) {

            $data['table'] = tb_pendaftar::where('status', '0')->get();
            return view('admin.dashboard._data_table', $data);
        }

        $data['pendaftar'] = tb_pendaftar::where('status', '0')->count();
        $data['terverifikasi'] = tb_pendaftar::where('status', '1')->count();
        $data['ditolak'] = tb_pendaftar::where('status', '2')->count();

        return view('admin.dashboard.index', $data);
    }
}
