<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Pendaftaran Calon Ketua BAZNAS TUBA</title>
  <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet">

  <link href="{{ asset('assets') }}/css/offcanvas.css" rel="stylesheet">
</head>

<body class="bg-light">
  <img data-src="{{ asset('assets') }}/img/banner/BANNER-965X250.png" class="img-fluid lazyload" alt="Responsive image">
  <main role="main" class="container">
    {{-- <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-primary rounded box-shadow">
      <img class="mr-3" src="{{ asset('assets') }}/img/logo/baznas-tuba.png" alt="" width="55" height="55">
      <div class="lh-100">
        <h6 class="mb-0 text-white lh-100">BAZNAS</h6>
        <small>Kabupaten Tulang Bawang</small>
      </div>
    </div> --}}
    <div class="row">
      <div class="col-md-8">
        <div class="my-3 p-3 bg-white rounded box-shadow">
          <h6 class="border-bottom border-gray pb-2 mb-3">Pendaftaran Calon Pimpinan BAZNAS Kabupaten Tulang Bawang</h6>
          <div id="accordion">
             <div class="card">
               <div class="card-header" id="headingZero">
                 <h5 class="mb-0">
                   <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseZero" aria-expanded="false" aria-controls="collapseZero">
                    DASAR HUKUM
                   </button>
                 </h5>
               </div>
               <div id="collapseZero" class="collapse" aria-labelledby="headingZero" data-parent="#accordion">
                 <div class="card-body">
                   <ul class="list-group">
                      <li class="list-group-item">1. Undang-Undang Nomor 2 Tahun 2011 tentang Pengelolaan Zakat</li>
                      <li class="list-group-item">2. Peraturan Pemerintah Republik Indonesia Nomor 14 Tahun 2014 Tentang Pelaksanaan Undang-Undang Nomor 23 Tahun 2011 Tentang Pengelolaan Zakat
                        </li>
                      <li class="list-group-item">3. Peraturan Badan Amil Zakat Nasional Republik Indonesia Nomor 1 Tahun 2019 Tentang Tata Cara Pengangkatan dan Pembentukan Pimpinan Badan Amil Zakat Nasional Provinsi dan Badan Amil Zakat Nasional Kabupaten Kota.</li>
                      <li class="list-group-item">4. Keputusan Bupati Tulang Bawang Nomor:B/198/I.2/HK/TB/2023 Tentang Pembentukan Panitia Seleksi Badan Amil Zakat Nasional Kabupaten Tulang Bawang Periode 2023-2028</li>
                    </ul>
                 </div>
               </div>
               <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                   PERSYARATAN UMUM
                  </button>
                </h5>
              </div>
               <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                 <div class="card-body">
                   <ul class="list-group">
                      <li class="list-group-item">1. Warga Negara Indonesia</li>
                      <li class="list-group-item">2. Beragama Islam</li>
                      <li class="list-group-item">3. Bertakwa kepada Allah SWT</li>
                      <li class="list-group-item">4. Berakhlak mulia</li>
                      <li class="list-group-item">5. Berusia minimal 40 (empat puluh) tahun; (pada saat mendaftar)</li>
                      <li class="list-group-item">6. Sehat jasmani dan rohani</li>
                      <li class="list-group-item">7. Tidak menjadi anggota partai politik</li>
                      <li class="list-group-item">8. Tidak terlibat dalam kegiatan politik praktis</li>
                      <li class="list-group-item">9. Memiliki kompetensi di bidang pengelolaan zakat</li>
                      <li class="list-group-item">10. Bersedia untuk bekerja penuh waktu</li>
                      <li class="list-group-item">11.	Tidak pernah dihukum karena melakukan tindak pidana kejahatan yang diancam dengan  pidana  penjara  paling singkat 5 (lima) tahun</li>
                      <li class="list-group-item">12.	Tidak merangkap jabatan  sebagai  pengurus  dan/atau pegawai pengelola zakat lain</li>
                      <li class="list-group-item">13.	Berasal dari unsur masyarakat yang meliputi ulama, tenaga profesional, dan tokoh masyarakat Islam</li>
                      <li class="list-group-item">14.	Jika berasal dari pengawai negeri sipil, harus diberhentikan sementara sebagai negeri sipil sesuai ketentuan peraturan perundang-undangan</li>
                      <li class="list-group-item">15.	Belum pernah menjabat sebagai Pimpinan BAZNAS Provinsi atau BAZNAS Kabupaten/Kota selama 2 (dua) kali masa jabatan (periode) di daerah yang sama; dan</li>
                      <li class="list-group-item">16.	Bukan berasal dari unsur panitia seleksi atau sekretariat panitia seleksi</li>
                    </ul>
                 </div>
               </div>
             </div>
             <div class="card">
               <div class="card-header" id="headingTwo">
                 <h5 class="mb-0">
                   <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    PERSYARATAN ADMINISTRASI
                   </button>
                 </h5>
               </div>
               <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                 <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item">1. Surat permohonan menjadi calon pimpinan BAZNAS Kabupaten Tulang Bawang</li>
                    <li class="list-group-item">2. Surat pernyataan bersedia bekerja penuh, bertanggal, bulan, tahun dan ditandatangani diatas materai Rp.10.000 (asli)</li>
                    <li class="list-group-item">3. Foto kopi kartu tanda penduduk</li>
                    <li class="list-group-item">4. Daftar riwayat hidup atau biodata diri, bertanggal, bulan, tahun dan ditandatangani (asli)</li>
                    <li class="list-group-item">5. Surat keterangan sehat jasmani dan rohani yang dikeluarkan oleh Rumah Sakit Pemerintah (asli)</li>
                    <li class="list-group-item">6. Surat keterangan bebas narkoba yang dikeluarkan oleh Badan Narkotika Nasional setempat (asli)</li>
                    <li class="list-group-item">7. Surat pernyataan tidak menjadi anggota partai politik dan tidak terlibat dalam kegiatan politik praktis, bertanggal, bulan, tahun dan ditandatangani diatas materai Rp.10.000 (asli)</li>
                    <li class="list-group-item">8. Surat keterangan dari pimpinan partai politik bagi calon pimpinan yang pernah
                      terdaftar atau aktif sebagai anggota atau pengurus partai politik, yang
                      menerangkan bahwa yang bersangkutan sudah tidak aktif lagi sebagai anggota/
                      pengurus partai politik, bertanggal, bulan, tahun, di Cap dan
                      ditandatangani (asli)</li>
                    <li class="list-group-item">9. Surat keterangan tidak pernah dihukum karena melakukan tindak pidana
                      kejahatan yang diancam dengan pidana penjara paling singkat 5 (lima) tahun
                      yang dikeluarkan oleh pengadilan negeri setempat (asli)</li>
                    <li class="list-group-item">10.	Surat pernyataan tidak merangkap jabatan sebagai pengurus atau pegawai
                      pengelola zakat lain, bertanggal, bulan, tahun dan ditandatangani diatas materai
                      Rp.10.000 (asli)</li>
                    <li class="list-group-item">11.	Surat pernyataan bersedia mengundurkan diri sebagai pengurus atau pegawai
                      pengelola zakat lain bagi yang sedang menjabat, bertanggal, bulan, tahun dan
                      ditandatangani diatas materai Rp.10.000 (asli)</li>
                    <li class="list-group-item">12.	Pas photo warna terbaru 4x6</li>
                    <li class="list-group-item">13.	Makalah yang berjudul ”Optimalisasi Pengelolaaan Zakat pada
                      BAZNAS di Kabupaten Tulang Bawang”</li>
                  </ul>
                 </div>
               </div>
             </div>
             <div class="card">
               <div class="card-header" id="headingThree">
                 <h5 class="mb-0">
                   <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    TAHAPAN SELEKSI
                   </button>
                 </h5>
               </div>
               <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                 <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item">1. Seleksi Administrasi;
                      Seleksi Administrasi yaitu seleksi terhadap berkas dokumen lamaran
                     peserta untuk  menilai kelengkapan dan keabsahan sesuai dengan
                     persyaratan yang ditentukan</li>
                    <li class="list-group-item">2. Seleksi Kompetensi;
                      Seleksi Kompetensi menggunakan CAT (Computer Assisted Test), yaitu
                      metode seleksi menggunakan alat bantu Komputer/Laptop/ Handphone (Hp)
                      Android  yang berisi soal-soal :
                      - Tes Kompetensi Teknis
                      - Tes Kompetensi Manajerial dan
                      - Tes Kompetensi Sosiokultural 
                            Peserta diwajibkan Membawa Laptop atau Handphone (Hp)Android</li>
                    <li class="list-group-item">3. Seleksi Wawancara <br>
                      Seleksi wawancara adalah: Tanya jawab antara panitia seleksi dengan
                      peserta yang meliputi :
                      Uji Gagasan Visi, Misi dan Strategi Pengelolaan BAZNAS Kabupaten
                      Tulang Bawang yang disampaikan dalam  bentuk  makalah dan
                      dipaparkan dihadapan Pansel dengan judul Makalah: <span class="font-weight-bold">”Optimalisasi
                        Pengelolaaan Zakat pada BAZNAS di Kabupaten Tulang
                        Bawang”, </span> dengan Sistematika sebagai berikut:
                      <br>
                      Pengantar/Prakata 
                      <br>
                      Bab I Pendahuluan 
                      <br>
                      Bab II  Pembahasan
                      <br>
                      Dengan Pokok-Pokok Materi : 
                      <br>
                      A. Strategi pengumpulan dan pendistribusian zakat; 
                      <br>
                      B. Menjalin kemitraaan dan model sosialisasi potensi zakat; 
                      <br>
                      C. Sistem administrasi kelembagaan dan pelayanan BAZNAS; dan 
                      <br>
                      D. Evaluasi dan perumusan program kerja BAZNAS. 
                      <br>
                      Bab III Penutup. 
                      <br>
                      A. Kesimpulan. 
                      <br>
                      B. Saran.
                      
                    </li>
                  </ul>
                 </div>
               </div>
             </div>
             <div class="card">
               <div class="card-header" id="headingFour">
                 <h5 class="mb-0">
                   <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    TATA CARA PENDAFTARAN
                   </button>
                 </h5>
               </div>
               <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                 <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item">1. Pendaftaran dibuka pada tanggal 22 Mei 2023 s.d 20 Juli 2023 pukul 23:59 Wib</li>
                    <li class="list-group-item">2. Pendaftaran dilakukan secara online melalui link <a href="https://pendaftaranbaznas.tulangbawangkab.go.id/">https://pendaftaranbaznas.tulangbawangkab.go.id/</a> dengan mengunduh formulir
                      pendaftaran <a href="https://docs.google.com/uc?export=download&id=1B7CvaHkgweMXUUHwFxBQz5EbRWlOgEvV">disini</a></li>
                    <li class="list-group-item">3. Persyaratan Adminsitrasi (Berkas Fisik) diserahkan melalui sekretariat panitia
                      seleksi dengan alamat: Bagian Kesejahteraan Rakyat Sekretariat Daerah
                      Kabupaten Tulang Bawang Jl. Cemara Lk. Gunung Sakti Kel. Menggala Selatan
                      Kecamatan Menggala Kabupaten Tulang Bawang paling lambat tanggal                  
                      21 Juli 2023 Pukul 16.00 Wib</li>
                    <li class="list-group-item">3. Bila ada kesulitan/ kendala dalam proses pendaftaran maka panitia siap
                      membantu memfasilitasi baik Via Online maupun tatap muka secara langsung</li>
                    <li class="list-group-item">4. Informasi lebih lanjut dapat menghubungi Sekretariat panitia seleksi:
                      <br>
                      Nama    : Tien Kartini, S.E., M.M   -- HP : <a href="https://api.whatsapp.com/send?phone=6281273537355">08127950260</a>  (WA) 
                      <br>
                      Nama    : Yulia Sari, S.E   -- HP : <a href="https://api.whatsapp.com/send?phone=6282178727871">082178727871</a>  (WA) 
                    </li>
                  </ul>
                 </div>
               </div>
             </div>
             <div class="card">
               <div class="card-header" id="headingFive">
                 <h5 class="mb-0">
                   <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    KETENTUAN LAINNYA
                   </button>
                 </h5>
               </div>
               <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                 <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item">1. Peserta yang dinyatakan lulus seleksi administrasi akan diumumkan melalui 
                      Website Pemkab Tulang Bawang, Website Kemenag Tulang Bawang, Website
                      BAZNAS Tulang Bawang dan Email masing-masing peserta yang lulus serta berhak
                      mengikuti tahapan seleksi kompetensi dengan membawa Laptop atau Handphone
                      (Hp) Android;
                      </li>
                    <li class="list-group-item">2. Peserta yang dinyatakan lulus seleksi kompetensi akan diumumkan melalui
                      Website Pemkab Tulang Bawang, Website Kemenag Tulang Bawang, Website
                      BAZNAS Tulang Bawang dan Email masing-masing peserta serta berhak mengikuti
                      tahapan seleksi wawancara</li>
                    <li class="list-group-item">3. Peserta yang dinyatakan lulus seleksi wawancara akan ditetapkan dalam Berita
                      Acara Hasil Seleksi (BAHS) dan diumumkan melalui Website Pemkab Tulang
                      Bawang, Website Kemenag Tulang Bawang, Website BAZNAS Tulang Bawang dan
                      Email masing-masing peserta serta dilaporkan kepada Pj. Bupati Tulang Bawang
                      yang kemudian akan dimintakan pertimbangan kepada BAZNAS RI</li>
                    <li class="list-group-item">4. BAZNAS RI akan melakukan verifikasi administrasi dan verifikasi faktual (investigasi
                      dan wawancara) setelah dokumen dinyatakan lengkap untuk ditetapkan 5 (lima)
                      orang calon pimpinan BAZNAS Kabupaten Tulang Bawang yang akan diangkat dan
                      dilantik oleh Pj. Bupati Tulang Bawang</li>
                    <li class="list-group-item">5. Selama proses seleksi, peserta tidak dipungut biaya dan panitia seleksi tidak
                      menanggung biaya yang telah dikeluarkan oleh peserta</li>
                    <li class="list-group-item">6. Berkas lamaran tidak dikembalikan apabila peserta dinyatakan tidak lulus seleksi</li>
                    <li class="list-group-item">7. Keputusan panitia seleksi bersifat final dan tidak dapat diganggu gugat</li>
                  </ul>
                 </div>
               </div>
             </div>
           </div>
        </div>
    
        <div class="my-3 p-3 bg-white rounded box-shadow">
          <h6 class="border-bottom border-gray pb-2 mb-0">Formulir Pendaftaran</h6>
          <form id="form_submit">
             <div class="form-group mt-3">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="nama_pendaftar">
              </div>
             <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
             <div class="form-group mt-3">
                <label for="no_tlp">No Tlp/WhatsApp</label>
                <input type="number" class="form-control" id="no_tlp" name="no_tlp">
              </div>
             <div class="form-group mt-3">
                <label for="lampiran_1">Surat permohonan menjadi calon pimpinan BAZNAS Kabupaten Tulang Bawang</label>
                <input type="file" class="form-control" id="lampiran_1" name="lampiran_1">
              </div>
             <div class="form-group mt-3">
                <label for="lampiran_2">Surat pernyataan bersedia bekerja penuh, bertanggal, bulan, tahun dan ditandatangani diatas materai Rp.10.000 (asli)</label>
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
                <label for="lampiran_5">Surat keterangan sehat jasmani dan rohani yang dikeluarkan oleh Rumah Sakit Pemerintah (asli)</label>
                <input type="file" class="form-control" id="lampiran_5" name="lampiran_5">
              </div>
             <div class="form-group mt-3">
                <label for="lampiran_6">Surat keterangan bebas narkoba yang dikeluarkan oleh Badan Narkoba Nasional setempat (asli)</label>
                <input type="file" class="form-control" id="lampiran_6" name="lampiran_6">
              </div>
             <div class="form-group mt-3">
                <label for="lampiran_7">Surat pernyataan tidak menjadi anggota partai politik dan tidak terlibat dalam kegiatan politik peraktis, bertanggal, bulan, tahun dan ditandatangani diatas matrai Rp.10.000 (asli)</label>
                <input type="file" class="form-control" id="lampiran_7" name="lampiran_7">
              </div>
             <div class="form-group mt-3">
                <label for="lampiran_8">Surat keterangan dari pimpinan partai politik bagi calon pimpinan yang pernah
                terdaftar atau aktif sebagai anggota atau pengurus partai politik, yang
                menerangkan bahwa yang bersangkutan sudah tidak aktif lagi sebagai anggota/
                pengurus partai politik, bertanggal, bulan, tahun, di Cap dan
                ditandatangani (asli)</label>
                <input type="file" class="form-control" id="lampiran_8" name="lampiran_8">
              </div>
             <div class="form-group mt-3">
                <label for="lampiran_9">Surat keterangan tidak pernah dihukum karena melakukan tindak pidana
                  kejahatan yang diancam dengan pidana penjara paling singkat 5 (lima) tahun
                  yang dikeluarkan oleh pengadilan negeri setempat (asli)</label>
                <input type="file" class="form-control" id="lampiran_9" name="lampiran_9">
              </div>
             <div class="form-group mt-3">
                <label for="lampiran_10">Surat pernyataan tidak merangkap jabatan sebagai pengurus atau pegawai
                pengelola zakat lain, bertanggal, bulan, tahun dan ditandatangani diatas materai
                Rp.10.000 (asli)</label>
                <input type="file" class="form-control" id="lampiran_10" name="lampiran_10">
              </div>
             <div class="form-group mt-3">
                <label for="lampiran_11">Surat pernyataan bersedia mengundurkan diri sebagai pengurus atau pegawai
                  pengelola zakat lain bagi yang sedang menjabat, bertanggal, bulan, tahun dan
                  ditandatangani diatas materai Rp.10.000 (asli)</label>
                <input type="file" class="form-control" id="lampiran_11" name="lampiran_11">
              </div>
             <div class="form-group mt-3">
                <label for="photo">Pas photo warna terbaru 4x6</label>
                <input type="file" class="form-control" id="photo" name="photo">
              </div>
             <div class="form-group mt-3">
                <label for="makalah">Makalah yang berjudul <span class="font-weight-bold">”Optimalisasi Pengelolaan Zakat pada BAZNAS di Kabupaten Tulang Bawang"</span> (PDF)</label>
                <input type="file" class="form-control" id="makalah" name="makalah">
              </div>
             <div class="form-group mt-4">
              @include('layouts._loading_submit')
                <button id="btn_submit" type="submit" class="btn btn-primary btn-block">KIRIM</button>
              </div>
          </form>
        </div>
      </div>

    <div class="col-md-4">
      <div class="my-3 p-3 bg-white rounded box-shadow">
          <h6>PENGUMUMAN</h6>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Unduh Pengumuman <span class="font-weight-bold text-success"><a href="https://docs.google.com/uc?export=download&id=1xH3naTH9yQrjSyOf_CUYYHv5DSM1RmRp" target="_blank">disini</a></span></li>
            <li class="list-group-item">Unduh Formulir Pendaftaran <span class="font-weight-bold text-success"><a href="https://docs.google.com/uc?export=download&id=1B7CvaHkgweMXUUHwFxBQz5EbRWlOgEvV" target="_blank">disini</a></span></li>
          </ul>
      </div>
      <div class="my-3 p-3 bg-white rounded box-shadow">
          <h6>KONTAK KAMI</h6>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Tien Kartini, S.E., M.M : <span class="font-weight-bold"><a href="https://api.whatsapp.com/send?phone=6281273537355" target="_blank">081273537355</a></span></li>
            <li class="list-group-item">Yulia Sari, S.E : <span class="font-weight-bold"><a href="https://api.whatsapp.com/send?phone=6282178727871" target="_blank">082178727871</a></span></li>
          </ul>
      </div>
    </div>
  </div>
 
  </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.2/lazysizes.min.js" async=""></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('assets') }}/js/vendor/holder.min.js"></script>
  <script src="{{ asset('assets') }}/js/offcanvas.js"></script>
  <script src="{{ asset('assets') }}/js/sweetalert.min.js"></script>

  <script type="text/javascript">
      async function transAjax(data) {
          html = null;
          data.headers = {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
          await $.ajax(data).done(function(res) {
              html = res;
          })
              .fail(function() {
                  return false;
              })
          return html
      }

      $(document).ready(function() {
      
          $('#form_submit').submit(async function store(e) {
                e.preventDefault();

                var form 	= $(this)[0]; 
                var data 	= new FormData(form);

                var param = {
                    method: 'POST',
                    url: '/user/store',
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                }

                    loadingsubmit(true);
                    await transAjax(param).then((res) => {
                        swal({text: res.message, icon: 'success', timer: 3000,}).then(() => {
                            loadingsubmit(false);
                            window.location.href = '/pendaftaran/sukses';
                        });
                    }).catch((err) => {
                        loadingsubmit(false);
                        swal({text: err.responseJSON.message, icon: 'error', timer: 3000,});
                });

                function loadingsubmit(state){
                    if(state) {
                        $('#btn_loading').removeClass('d-none');
                        $('#btn_submit').addClass('d-none');
                    }else {
                        $('#btn_loading').addClass('d-none');
                        $('#btn_submit').removeClass('d-none');
                    }
                }
            });
        });
  </script>
</body>
</html>