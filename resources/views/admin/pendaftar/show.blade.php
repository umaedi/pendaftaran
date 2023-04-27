@extends('layouts.app')
@section('content')
<div class="main-content">
    <section class="section x-lampiran">
      <div class="section-header">
        <h1>Laporan Tugas Pegawai</h1>
        <div id="clock" class="ml-auto h5 mt-2 font-weight-bold">
            <h6>Loading...</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_pegawai">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_pegawai" value="{{ $pendaftar->nama_pendaftar }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_pegawai">Email</label>
                        <input type="text" class="form-control" id="nama_pegawai" value="{{ $pendaftar->email }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_pegawai">No Tlp</label>
                        <input type="text" class="form-control" id="nama_pegawai" value="{{ $pendaftar->no_tlp }}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="lampiran_1">Surat permohonan menjadi pimpinan BAZNAS Kab. Tuba</label>
                        <input type="file" class="form-control" id="lampiran_1" name="lampiran_1">
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_2">Surat pernyataan bersedia bekerja penuh, bertanggal, bulan, tahun dan di tandatangai diatas matrai Rp. 10.000 (asli)</label>
                        <input type="file" class="form-control" id="lampiran_2" name="lampiran_2">
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_3">Foto kopi kartu tanda penduduk</label>
                        <input type="file" class="form-control" id="lampiran_3" name="lampiran_3">
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_4">Daftar riwayat hidup atau biodata diri, bertanggal, bulan, tahun dan ditandatangani (asli)</label>
                        <input type="file" class="form-control" id="lampiran_4" name="lampiran_4">
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_5">Surat keterangan sehat jasmanidan rohani yang dikeluarkan ole Rumah Sakit Pemerintah (asli)</label>
                        <input type="file" class="form-control" id="lampiran_5" name="lampiran_5">
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_6">Surat keterangan bebas narkoba yang dikeluarkan oleh Badan Narkoba Nasional setempat (asli)</label>
                        <input type="file" class="form-control" id="lampiran_6" name="lampiran_6">
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_7">Surat pernyataan tidak menjadi anggota partai politik dan tidak terlibat dalam kegiatan politik peraktis, beratnggal, bulan, tahun dan ditandatangani diatas matrai Rp.10.000 (asli)</label>
                        <input type="file" class="form-control" id="lampiran_7" name="lampiran_7">
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_8">Surat pernyataan tidak menjadi anggota partai politik atau terlibat dalam politik praktis, beratanggal, bulan, tahun dan ditandatangani diatas matrai Rp. 10.000 (asli)</label>
                        <input type="file" class="form-control" id="lampiran_8" name="lampiran_8">
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_9">Fotokopi surat keterangan dari pimpinan partai politik bagi calon pimpinan yang pernah terdaftar atau aktif sebagai anggota atau pengurus partai politik</label>
                        <input type="file" class="form-control" id="lampiran_9" name="lampiran_9">
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_10">Suarat keterangan tidak pernah dihukum karena melakukan tindak pidana kejahatan yang diancam dengan pidana kejahatan yang diancam dengan pidana penjara paling singkat 5 tahun (lima) tahun yang dikeluarkan oleh pengadilan negeri setempat (asli)</label>
                        <input type="file" class="form-control" id="lampiran_10" name="lampiran_10">
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_11">Surat pernyataan tidak merangkap jabatan sebagai pengurus atau pegawai pengelola zakat lain, bertanggal, bulan tahun dan ditandatangani diatas matrai Rp.10.000 (asli)</label>
                        <input type="file" class="form-control" id="lampiran_11" name="lampiran_11">
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_12">Surat pernyataan bersedia mengundurkan diri sebagai pengurus pegawai pengelola zakat lain bagi yang sedang menjabat, bertanggal, bulan, tahun dan ditandatangani diatas matrai Rp.10.000 (asli)</label>
                        <input type="file" class="form-control" id="lampiran_12" name="lampiran_12">
                      </div>
                </div>
            </div>
        </div>
      </div>
    </section>
  </div>
@endsection