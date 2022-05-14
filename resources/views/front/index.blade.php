<!DOCTYPE html >
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  		  <title>Wallpaper | Sanat Atölyesi</title>
      @include('front.layouts.head')

    </head>

<body>
    @include("front.layouts.header")
    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1>Wallpaper<em> Sitemize Hoş Geldiniz</em></h1>
              <p>Birbirinden güzel resimlerle </p>
              <p>En güzel sanat eserleriyle sizlere hizmet sunmaktayız</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="{{ asset("assets/front/img/scroll-icon.png") }}" alt=""></a>
                </div>
            </div>
        </div>
        <video autoplay="true" loop="" muted>
        	<source src="{{ asset("assets/highway-loop.mp4") }}" type="video/mp4" />
        </video>
    </div>


    <div class="full-screen-portfolio" id="portfolio">
        <div class="container-fluid">
            @foreach ($kategoris as $kategoriler)
            <div class="col-md-4 col-sm-6"> 
                <div class="portfolio-item">
                    <a href="{{ route('front.icerik',$kategoriler->slug) }}" ><div class="thumb">
                        <div class="hover-effect">
                            {{-- @if(Auth::check() && Auth::user()->active =='true')
                                
                            @endif --}}
                            <div class="hover-baslik">
                              
                                <h1>
                                  <span style="background: {{$kategoriler->kategoriRenk}};border: unset;" class="btn btn-primary position-relative">
                                    #{{ $kategoriler->name }}
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      {{ $kategoriler->icerikCount()}}
                                     {{--  <span class="visually-hidden">unread messages</span> --}}
                                    </span>
                                  </span>
                                </h1>
                            </div>
                            <div class="hover-content">
                                <h1>{{ $kategoriler->baslik }}</h1>
                                <p>{{Str::limit($kategoriler->yazi,30)}}</p>
                                {{--  {{$icerik->created_at->diffForHumans()}} --}}
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{ $kategoriler->resim }}">
                        </div>
                    </div></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- footer -->
    @include('front.layouts.footer')
    @include('front.layouts.modal')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset("assets/front/js/vendor/jquery-1.11.2.min.js") }}"><\/script>')</script>

    <script src="{{ asset("assets/front/js/vendor/bootstrap.js")  }}"></script>

    <script src="{{ asset("assets/front/js/plugins.js") }}"></script>
    <script src="{{ asset("assets/front/js/main.js") }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
</body>
</html>
