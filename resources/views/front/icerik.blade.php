<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Highway Grid CSS Template</title>
        @include('front.layouts.head')
    </head>
    
<body style="background: #232323;">
    @include('front.layouts.header')
    
    <div class="grid-portfolio icerik-main" style="padding-top:100px!important;" id="portfolio">
        <div class="container">
              <div class="row col-12" style="display:flex;flex-wrap: wrap;" >
                @foreach ( $icerik as $item)
                  <div class="moreBox">
                    <a href="{{ $item->resim }}" data-fancybox="gallery" data-caption="{{ $item->yazi }}">
                      <div class="portfolio-item">
                          <div class="thumb">
                                <div class="hover-effect">
                                  <div class="hover-content">
                                      <h1>{{ $item->baslik }}</h1>
                                      <p>{{ Str::limit($item->yazi,50,'...') }}</p>
                                  </div>
                              </div>
                              <div class="image">
                                  <img class="icerik-resim rounded" src="{{ $item->resim }}">
                              </div>
                          </div>
                      </div>
                    </a>
                  </div>
                  @endforeach
              </div>
               <div class="row">
                   <div class="col-md-12">
                     <a href="#" id="loadMore">
                       <div  class="">
                           Load More
                       </div>
                     </a>
                   </div>
               </div>
          </div>
      </div>
    
 <!-- footer -->
    @include('front.layouts.footer')
  </div>
    @include('front.layouts.modal')

     <script>
       $(document).ready(function(){
    $(".moreBox").slice(0, 8).show();
    $("#loadMore").on("click", function(e){
        e.preventDefault();
        $(".moreBox:hidden").slice(0, 4).slideDown();
        if($(".moreBox:hidden").length == 0) {
          $("#loadMore").text("Elimizdekiler Bitti Daha Fazlası İçin İletişime Geçin...").addClass("dahaFazla-yok");
        }
      });
    })
    </script>
    
</body>
</html>