<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  		  <title>Wallpaper | Sanat Atölyesi</title>
      @include('front.layouts.head')

    </head>
    <body style="background: #232323;">
      @include('front.layouts.header')
      <div class="container-fluid h-custom" style="padding-top: 100px!important;height: 91.5%;">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-4 col-lg-6 col-xl-5">
            <img src="{{ asset('assets/img/draw2.webp') }}"
              class="img-fluid" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="padding:2rem">
            <form action="{{ route('kullanici_ekle') }}" enctype="multipart/form-data"  method="post">
              <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0 klabelrenk">Kullanıcı Adı</p>
              </div>
              <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <input type="text" id="form3Example3" name="name" class="form-control form-control-lg"
                  placeholder="{{ Auth::user()->name }}">
              </div>
              <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0 klabelrenk">E-Posta Adresi</p>
              </div>
    
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                  placeholder="{{ Auth::user()->email }}" />
                <label class="form-label klabelrenk">Şifre</label>
              </div>
    
              <!-- Password input -->
              <div class="form-outline mb-3">
                <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                  placeholder="********"/>
               
              </div>
    
              <div class="text-center text-lg-start  pt-2" style="margin-top: 2rem">
                <button type="submit" class="btn btn-primary btn-lg"style="padding:1rem 2.5rem;">Kaydet</button>
              </div>
            </form>
          </div>
        </div>
      </div>
     
   <!-- footer -->
      @include('front.layouts.footer')
    </div>
      @include('front.layouts.modal')
  
  </body>
  <style>
    .klabelrenk{
      color: #fff;
    }
    p , label{
      margin: 10px 0;
    }
  </style>

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset("assets/front/js/vendor/jquery-1.11.2.min.js") }}"><\/script>')</script>

    <script src="{{ asset("assets/front/js/vendor/bootstrap.js")  }}"></script>

    <script src="{{ asset("assets/front/js/plugins.js") }}"></script>
    <script src="{{ asset("assets/front/js/main.js") }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

