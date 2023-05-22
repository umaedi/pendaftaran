<?php

namespace App\Http\Controllers;

use App\Models\tb_pendaftar;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        if (\request()->ajax()) {
            $pendaftar = tb_pendaftar::where('email', $request->email)->first();
            if (!$pendaftar) {
                $request->validate([
                    'nama_pendaftar'  => 'required',
                    'email'  => 'required|unique:tb_pendaftars',
                    'no_tlp'  => 'required',
                    'lampiran_1'  => 'required|file|mimes:pdf|max:2048',
                    'lampiran_2'  => 'required|file|mimes:pdf|max:2048',
                    'lampiran_3'  => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
                    'lampiran_4'  => 'required|file|mimes:pdf|max:2048',
                    'lampiran_5'  => 'required|file|mimes:pdf|max:2048',
                    'lampiran_6'  => 'required|file|mimes:pdf|max:2048',
                    'lampiran_7'  => 'required|file|mimes:pdf|max:2048',
                    'lampiran_8'  => 'file|mimes:pdf|max:2048',
                    'lampiran_9'  => 'required|file|mimes:pdf|max:2048',
                    'lampiran_10'  => 'required|file|mimes:pdf|max:2048',
                    'lampiran_11'  => 'required|file|mimes:pdf|max:2048',
                    'photo'         => 'required|file|mimes:jpg,jpeg,png|max:3048',
                    'makalah'       => 'required|file|mimes:pdf|max:3048',
                ]);


                $lampiran_1 = $request->file('lampiran_1');
                $lampiran_1->storeAs('public/lampiran', $lampiran_1->hashName());

                $lampiran_2 = $request->file('lampiran_2');
                $lampiran_2->storeAs('public/lampiran', $lampiran_2->hashName());

                $lampiran_3 = $request->file('lampiran_3');
                $lampiran_3->storeAs('public/lampiran', $lampiran_3->hashName());

                $lampiran_4 = $request->file('lampiran_4');
                $lampiran_4->storeAs('public/lampiran', $lampiran_4->hashName());

                $lampiran_5 = $request->file('lampiran_5');
                $lampiran_5->storeAs('public/lampiran', $lampiran_5->hashName());

                $lampiran_6 = $request->file('lampiran_6');
                $lampiran_6->storeAs('public/lampiran', $lampiran_6->hashName());

                $lampiran_7 = $request->file('lampiran_7');
                $lampiran_7->storeAs('public/lampiran', $lampiran_7->hashName());

                $lampiran_8 = $request->file('lampiran_8');
                $lampiran_8->storeAs('public/lampiran', $lampiran_8->hashName());

                $lampiran_9 = $request->file('lampiran_9');
                $lampiran_9->storeAs('public/lampiran', $lampiran_9->hashName());

                $lampiran_10 = $request->file('lampiran_10');
                $lampiran_10->storeAs('public/lampiran', $lampiran_10->hashName());

                $lampiran_11 = $request->file('lampiran_11');
                $lampiran_11->storeAs('public/lampiran', $lampiran_11->hashName());

                $photo = $request->file('photo');
                $photo->storeAs('public/photo', $photo->hashName());

                $makalah = $request->file('makalah');
                $makalah->storeAs('public/lampiran', $makalah->hashName());


                $resgister = tb_pendaftar::create([
                    'nama_pendaftar'    => $request->nama_pendaftar,
                    'email'        => $request->email,
                    'no_tlp'       => $request->no_tlp,
                    'lampiran_1'   =>  $request->lampiran_1->hashName(),
                    'lampiran_2'   =>  $request->lampiran_2->hashName(),
                    'lampiran_3'   =>  $request->lampiran_3->hashName(),
                    'lampiran_4'   =>  $request->lampiran_4->hashName(),
                    'lampiran_5'   =>  $request->lampiran_5->hashName(),
                    'lampiran_6'   =>  $request->lampiran_6->hashName(),
                    'lampiran_7'   =>  $request->lampiran_7->hashName(),
                    'lampiran_8'   =>  $request->lampiran_8->hashName(),
                    'lampiran_9'   =>  $request->lampiran_9->hashName(),
                    'lampiran_10'  =>  $request->lampiran_10->hashName(),
                    'lampiran_11'  =>  $request->lampiran_11->hashName(),
                    'photo'        => $request->photo->hashName(),
                    'makalah'      => $request->makalah->hashName(),
                ]);

                if ($resgister) {
                    return response()->json([
                        'success'   => true,
                        'message'   => 'Berkas pendaftaran berhasil terkirim'
                    ]);
                }
            }

            $request->validate([
                'nama_pendaftar'  => 'required',
                'email'  => 'required',
                'no_tlp'  => 'required',
                'lampiran_1'  => 'required|file|mimes:pdf|max:2048',
                'lampiran_2'  => 'required|file|mimes:pdf|max:2048',
                'lampiran_3'  => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
                'lampiran_4'  => 'required|file|mimes:pdf|max:2048',
                'lampiran_5'  => 'required|file|mimes:pdf|max:2048',
                'lampiran_6'  => 'required|file|mimes:pdf|max:2048',
                'lampiran_7'  => 'required|file|mimes:pdf|max:2048',
                'lampiran_8'  => 'file|mimes:pdf|max:2048',
                'lampiran_9'  => 'required|file|mimes:pdf|max:2048',
                'lampiran_10'  => 'required|file|mimes:pdf|max:2048',
                'lampiran_11'  => 'required|file|mimes:pdf|max:2048',
                'photo'         => 'required|file|mimes:jpg,jpeg,png|max:3048',
                'makalah'       => 'required|file|mimes:pdf|max:3048',
            ]);

            $lampiran_1 = $request->file('lampiran_1');
            $lampiran_1->storeAs('public/lampiran', $lampiran_1->hashName());

            $lampiran_2 = $request->file('lampiran_2');
            $lampiran_2->storeAs('public/lampiran', $lampiran_2->hashName());

            $lampiran_3 = $request->file('lampiran_3');
            $lampiran_3->storeAs('public/lampiran', $lampiran_3->hashName());

            $lampiran_4 = $request->file('lampiran_4');
            $lampiran_4->storeAs('public/lampiran', $lampiran_4->hashName());

            $lampiran_5 = $request->file('lampiran_5');
            $lampiran_5->storeAs('public/lampiran', $lampiran_5->hashName());

            $lampiran_6 = $request->file('lampiran_6');
            $lampiran_6->storeAs('public/lampiran', $lampiran_6->hashName());

            $lampiran_7 = $request->file('lampiran_7');
            $lampiran_7->storeAs('public/lampiran', $lampiran_7->hashName());

            $lampiran_8 = $request->file('lampiran_8');
            $lampiran_8->storeAs('public/lampiran', $lampiran_8->hashName());

            $lampiran_9 = $request->file('lampiran_9');
            $lampiran_9->storeAs('public/lampiran', $lampiran_9->hashName());

            $lampiran_10 = $request->file('lampiran_10');
            $lampiran_10->storeAs('public/lampiran', $lampiran_10->hashName());

            $lampiran_11 = $request->file('lampiran_11');
            $lampiran_11->storeAs('public/lampiran', $lampiran_11->hashName());

            $photo = $request->file('photo');
            $photo->storeAs('public/photo', $photo->hashName());

            $makalah = $request->file('makalah');
            $makalah->storeAs('public/lampiran', $makalah->hashName());


            $pendaftar->update([
                'nama_pendaftar'    => $request->nama_pendaftar,
                'email'        => $request->email,
                'no_tlp'       => $request->no_tlp,
                'lampiran_1'   =>  $request->lampiran_1->hashName(),
                'lampiran_2'   =>  $request->lampiran_2->hashName(),
                'lampiran_3'   =>  $request->lampiran_3->hashName(),
                'lampiran_4'   =>  $request->lampiran_4->hashName(),
                'lampiran_5'   =>  $request->lampiran_5->hashName(),
                'lampiran_6'   =>  $request->lampiran_6->hashName(),
                'lampiran_7'   =>  $request->lampiran_7->hashName(),
                'lampiran_8'   =>  $request->lampiran_8->hashName(),
                'lampiran_9'   =>  $request->lampiran_9->hashName(),
                'lampiran_10'  =>  $request->lampiran_10->hashName(),
                'lampiran_11'  =>  $request->lampiran_11->hashName(),
                'photo'        => $request->photo->hashName(),
                'makalah'      => $request->makalah->hashName(),
                'status'       => '0',
            ]);

            if ($pendaftar) {
                return response()->json([
                    'success'   => true,
                    'message'   => 'Berkas pendaftaran berhasil terkirim'
                ]);
            }
        }
    }

    public function success()
    {
        return view('user.pendaftaran.index');
    }
}
