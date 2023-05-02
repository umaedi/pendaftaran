<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\tb_pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index()
    {
        if (\request()->ajax()) {

            $pendaftar = tb_pendaftar::query();

            $page = \request()->get('pagination', 12);

            if (\request()->search) {
                $pendaftar->where('nama_pendaftar', 'like', '%' . \request()->search . '%');
            }

            $data['table'] = $pendaftar->paginate($page);

            return view('admin.dashboard._data_table', $data);
        }
        return view('admin.pendaftar.index');
    }

    public function terverifikasi()
    {
        if (\request()->ajax()) {

            $pendaftar = tb_pendaftar::query();

            $page = \request()->get('pagination', 12);

            if (\request()->search) {
                $pendaftar->where('nama_pendaftar', 'like', '%' . \request()->search . '%');
            }

            $data['table'] = $pendaftar->where('status', '1')->paginate($page);

            return view('admin.pendaftar._data_table', $data);
        }
        return view('admin.pendaftar.terverifikasi');
    }

    public function ditolak()
    {
        if (\request()->ajax()) {

            $pendaftar = tb_pendaftar::query();

            $page = \request()->get('pagination', 12);

            if (\request()->search) {
                $pendaftar->where('nama_pendaftar', 'like', '%' . \request()->search . '%');
            }

            $data['table'] = $pendaftar->where('status', '2')->paginate($page);

            return view('admin.pendaftar._data_table', $data);
        }
        return view('admin.pendaftar.ditolak');
    }

    public function show($id)
    {
        $data['pendaftar'] = tb_pendaftar::where('id', $id)->first();
        return view('admin.pendaftar.show', $data);
    }

    public function konfirmasi($id)
    {
        $pendaftar = tb_pendaftar::findOrfail($id);

        $pendaftar->update([
            'status'    => '1'
        ]);

        return response()->json([
            'success'   => true,
            'message'   => 'Berkas berhasil di verifikasi'
        ]);
    }

    public function tolak(Request $request, $id)
    {
        $pendaftar = tb_pendaftar::findOrfail($id);

        $pendaftar->update([
            'status'    => '2'
        ]);

        return response()->json([
            'success'   => true,
            'message'   => 'Berkas berhasil ditolak'
        ]);
    }
}
