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
                        <a href="{{ asset('storage/lampiran' . '/' . $pendaftar->lampiran_1) }}" target="_blank" class="btn btn-primary btn-block">Lihat lampiran</a>
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_2">Surat pernyataan bersedia bekerja penuh, bertanggal, bulan, tahun dan di tandatangai diatas matrai Rp. 10.000 (asli)</label>
                        <a href="{{ asset('storage/lampiran' . '/' . $pendaftar->lampiran_2) }}" target="_blank" class="btn btn-primary btn-block">Lihat lampiran</a>
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_3">Foto kopi kartu tanda penduduk</label>
                        <a href="{{ asset('storage/lampiran' . '/' . $pendaftar->lampiran_3) }}" target="_blank" class="btn btn-primary btn-block">Lihat lampiran</a>
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_4">Daftar riwayat hidup atau biodata diri, bertanggal, bulan, tahun dan ditandatangani (asli)</label>
                        <a href="{{ asset('storage/lampiran' . '/' . $pendaftar->lampiran_4) }}" target="_blank" class="btn btn-primary btn-block">Lihat lampiran</a>
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_5">Surat keterangan sehat jasmanidan rohani yang dikeluarkan ole Rumah Sakit Pemerintah (asli)</label>
                        <a href="{{ asset('storage/lampiran' . '/' . $pendaftar->lampiran_5) }}" target="_blank" class="btn btn-primary btn-block">Lihat lampiran</a>
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_6">Surat keterangan bebas narkoba yang dikeluarkan oleh Badan Narkoba Nasional setempat (asli)</label>
                        <a href="{{ asset('storage/lampiran' . '/' . $pendaftar->lampiran_6) }}" target="_blank" class="btn btn-primary btn-block">Lihat lampiran</a>
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_7">Surat pernyataan tidak menjadi anggota partai politik dan tidak terlibat dalam kegiatan politik peraktis, beratnggal, bulan, tahun dan ditandatangani diatas matrai Rp.10.000 (asli)</label>
                        <a href="{{ asset('storage/lampiran' . '/' . $pendaftar->lampiran_7) }}" target="_blank" class="btn btn-primary btn-block">Lihat lampiran</a>
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_8">Surat pernyataan tidak menjadi anggota partai politik atau terlibat dalam politik praktis, beratanggal, bulan, tahun dan ditandatangani diatas matrai Rp. 10.000 (asli)</label>
                        <a href="{{ asset('storage/lampiran' . '/' . $pendaftar->lampiran_8) }}" target="_blank" class="btn btn-primary btn-block">Lihat lampiran</a>
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_9">Fotokopi surat keterangan dari pimpinan partai politik bagi calon pimpinan yang pernah terdaftar atau aktif sebagai anggota atau pengurus partai politik</label>
                        <a href="{{ asset('storage/lampiran' . '/' . $pendaftar->lampiran_9) }}" target="_blank" class="btn btn-primary btn-block">Lihat lampiran</a>
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_10">Suarat keterangan tidak pernah dihukum karena melakukan tindak pidana kejahatan yang diancam dengan pidana kejahatan yang diancam dengan pidana penjara paling singkat 5 tahun (lima) tahun yang dikeluarkan oleh pengadilan negeri setempat (asli)</label>
                        <a href="{{ asset('storage/lampiran' . '/' . $pendaftar->lampiran_10) }}" target="_blank" class="btn btn-primary btn-block">Lihat lampiran</a>
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_11">Surat pernyataan tidak merangkap jabatan sebagai pengurus atau pegawai pengelola zakat lain, bertanggal, bulan tahun dan ditandatangani diatas matrai Rp.10.000 (asli)</label>
                        <a href="{{ asset('storage/lampiran' . '/' . $pendaftar->lampiran_11) }}" target="_blank" class="btn btn-primary btn-block">Lihat lampiran</a>
                      </div>
                     <div class="form-group mt-3">
                        <label for="lampiran_12">Surat pernyataan bersedia mengundurkan diri sebagai pengurus pegawai pengelola zakat lain bagi yang sedang menjabat, bertanggal, bulan, tahun dan ditandatangani diatas matrai Rp.10.000 (asli)</label>
                        <a href="{{ asset('storage/lampiran' . '/' . $pendaftar->lampiran_12) }}" target="_blank" class="btn btn-primary btn-block">Lihat lampiran</a>
                      </div>
                      <button class="btn btn-success" onclick="konfirmasi({{ $pendaftar->id }})">VERIFIKASI</button>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">TOLAK</button>
                </div>
            </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Alasan Penolakan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <textarea name="keterangan" class="form-control keterangan" id="exampleFormControlTextarea1" style="height: 90px"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" id="tolak" class="btn btn-primary">Kirim</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('js')
<script src="{{ asset('assets') }}/js/sweetalert.min.js"></script>
    <script>
      function konfirmasi(id) {
            swal({
              title: "",
              text: "Verifikasi berkas ini?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
              })
              .then((willDelete) => {
              if (willDelete) {
                return new Promise(async function(resolve) {
                  var param = {
                          method: 'POST',
                          url: '/admin/pendaftar/konfirmasi/'+id,
                      }

                await transAjax(param).then((res) => {
                  emailVerifikasi('{{ $pendaftar->email }}');
                        swal({text: res.message, icon: 'success', timer: 3000,}).then(() => {
                            window.location.href = '/admin/pendaftar/terverifikasi';
                        });
                    }).catch((err) => {
                        loadingsubmit(false);
                        swal({text: err.responseJSON.message, icon: 'error', timer: 3000,}).then(() => {
                        window.location.href = '/admin/pendaftar';
                    });
                  });
                });
              }
          });
        }

        $('#tolak').click(async function tolak(e) {
          e.preventDefault();
          var keterangan = $('.keterangan').val();
          var param = {
                    method: 'POST',
                    url: '/admin/pendaftar/tolak/{{ $pendaftar->id }}',
                    data: {'ketrangan': keterangan}
                }

                await transAjax(param).then((res) => {
                    swal({text: res.message, icon: 'success', timer: 3000,}).then(() => {
                        window.location.href = '/admin/dashboard';
                    });
                }).catch((err) => {
                    swal({text: err.responseJSON.message, icon: 'error', timer: 3000,}).then(() => {
                    window.location.href = '/';
                });
            });
          $('#exampleModal').modal('hide');
        });

        async function emailVerifikasi(email)
        {
          console.log('mengirim email');
          var param = {
            method: 'POST',
            url: '/admin/email/verifikasi',
            data: {email: email},
          }

          await transAjax(param).then((res) => {
            console.log('Email terkirim');
          }).catch((err) => {
            console.log('Internal Server Error!');
          });
        }

    </script>
@endpush