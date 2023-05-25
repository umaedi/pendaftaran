@extends('layouts.app')
@section('content')
<div class="main-container container">
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Profile</div>
        </div>
      </div>
      <div class="section-body">
        <div class="row mt-sm-4">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="profile-widget-header text-center">
              <img  id="imgPrev" alt="image" src="{{ asset('storage/profile/'. auth()->user()->img) }}" class="rounded-circle profile-widget-picture" width="100px">
            </div>
            <div class="card">
              <form id="form_submit">
                <div class="card-header">
                  <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Photo</label>
                    <input type="file" onchange="previewImg()" id="image" class="form-control" name="img">
                  </div>
                  <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
                  </div>
                  <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}">
                  </div>
                  <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  @include('layouts._loading_submit')
                  <button id="btn_submit" class="btn btn-primary">SIMPAN PERUBAHAN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection
@push('js')
<script type="text/javascript" src="{{ asset('assets') }}/js/sweetalert.min.js"></script>
    <script type="text/javascript">
       $(document).ready(function() {
          $('#form_submit').submit(async function store(e) {
                e.preventDefault();

                var form 	= $(this)[0]; 
                var data 	= new FormData(form);

                var param = {
                    method: 'POST',
                    url: '/admin/profile/update/{{ auth()->user()->id }}',
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                }

                    loadingsubmit(true);
                    await transAjax(param).then((res) => {
                      loadingsubmit(false);
                        swal({text: res.message, icon: 'success', timer: 3000,});
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

        function previewImg(){
            const imgPreview = document.querySelector('#imgPrev');
            const image = document.querySelector('#image');
            const blob = URL.createObjectURL(image.files[0]);
            imgPreview.src = blob; 
        }
    </script>
@endpush