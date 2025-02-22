<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Roksyn') }} - Bootstrap 5 Admin Template</title>

  <!--plugins-->
  <link href="{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet">
  <!--Styles-->
  <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('admin/assets/css/icons.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons%401.10.3/font/bootstrap-icons.css">
  <link href="{{ asset('admin/assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/css/dark-theme.css') }}" rel="stylesheet">
</head>
<body>
  <!--authentication-->
  <div class="mx-3 mx-lg-0">
    <div class="card my-5 col-xl-9 col-xxl-8 mx-auto rounded-4 overflow-hidden border-3 p-3">
      <div class="row g-3">
        <div class="col-lg-6 d-flex">
          <div class="card-body p-5 w-100">
            {{-- <img src="{{ asset('admin/assets/images/logo-icon.png') }}" class="mb-4" width="45" alt=""> --}}
            <div class="row g-3 my-4">
            
             
            </div>
            <div class="separator">
              
            </div>
            <div class="form-body mt-4">
              <form class="row g-3" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="col-12">
                  <label for="inputEmailAddress" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmailAddress" name="email" value="{{ old('email') }}" placeholder="jhon@example.com">
                  @error('email')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="col-12">
                  <label for="inputChoosePassword" class="form-label">Password</label>
                  <div class="input-group" id="show_hide_password">
                    <input type="password" class="form-control border-end-0" id="inputChoosePassword" name="password" value="{{ old('password') }}" placeholder="Enter Password">
                    <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                  </div>
                  @error('password')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
               
           
                <div class="col-12">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex d-none">
          <div class="p-3 rounded-4 w-100 d-flex align-items-center justify-content-center border-3 bg-primary">
            <img src="{{ asset('admin/assets/images/boxed-login.png') }}" class="img-fluid" alt="">
          </div>
        </div>
      </div><!--end row-->
    </div>
  </div>
  <!--authentication-->

  <!--plugins-->
  <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
  <script>
    $(document).ready(function () {
      $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
          $('#show_hide_password input').attr('type', 'password');
          $('#show_hide_password i').addClass("bi-eye-slash-fill");
          $('#show_hide_password i').removeClass("bi-eye-fill");
        } else if ($('#show_hide_password input').attr("type") == "password") {
          $('#show_hide_password input').attr('type', 'text');
          $('#show_hide_password i').removeClass("bi-eye-slash-fill");
          $('#show_hide_password i').addClass("bi-eye-fill");
        }
      });
    });
  </script>

</body>

</html>
