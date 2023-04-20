<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Pendaftaran Calon Ketua BAZNAS TUBA</title>
  <link href="{{ asset('assets') }}/css/bootstrap.4.3.1.css" rel="stylesheet">

  <link href="{{ asset('assets') }}/css/offcanvas.css" rel="stylesheet">
</head>

<body class="bg-light">
  <main role="main" class="container">
    <section class="section">
        <div class="container mt-5">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-body text-center">
                    <img data-src="{{ asset('assets/img/success.svg') }}" class="lazyload" width="150" alt="">
                    <div class="x-text mt-3">
                        <h5>PENDAFTARAN BERHASIL</h5>
                        <p>Terimakasih sudah mengisi formulir pendaftarn calon pimpinan BAZNAS Kab. Tulang Bawang. Kami akan mengirimi Anda email setelah kami memverifikasi berkas Anda.</p>
                    </div>
                    <a href="/" class="btn btn-primary">KEMBALI</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </main>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('assets') }}/js/vendor/holder.min.js"></script>
  <script src="{{ asset('assets') }}/js/offcanvas.js"></script>
  <script src="{{ asset('assets') }}/js/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.2/lazysizes.min.js" async=""></script>
</body>

</html>