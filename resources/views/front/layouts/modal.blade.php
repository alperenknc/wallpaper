     {{--  <!-- Modal button --> --}}
     @if(!Auth::check())
     <div class="popup-icon">
        <button id="modBtn" class="modal-btn">
          <i class="bi bi-person-circle" style="font-size: 5rem;color:#8a8b94;"></i>
        </button>
      </div>
      @endif
  
      <!-- Modal -->
      <div id="modal" class="modal">
        <!-- Modal Content -->
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h3 class="header-title">Kullanici <em>Girişi</em></h3>
            <div class="close-btn"><img src="{{ asset("assets/front/img/close_contact.png") }}" alt=""></div>
          </div>
          <!-- Modal Body -->
          <div class="modal-body">
            <div class="col-md-6 col-md-offset-3">
              <form id="login" action="{{ route('login.post') }}" method="post">
                @csrf
                  <div class="row">
                      {{-- <div class="col-md-12">
                        <fieldset>
                          <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                        </fieldset>
                      </div> --}}
                      <div class="col-md-12">
                        <fieldset>
                          <input name="email" type="email" class="form-control" id="email" placeholder="E-mail Adresi Giriniz" required="">
                        </fieldset>
                      </div>
                      <div class="col-md-12">
                        <fieldset>
                          <input name="password" type="password" class="form-control" id="password..." placeholder="Şifrenizi Giriniz" required="">
                        </fieldset>
                      </div>
                      {{-- <div class="col-md-12">
                        <fieldset>
                          <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                        </fieldset>
                      </div> --}}
                      <div class="col-md-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="btn">Giriş</button>
                        </fieldset>
                      </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  
  
  
      <section class="overlay-menu">
        <div class="container">
          <div class="row">
            <div class="main-menu">
                <ul>
                    <li>
                        <a href="{{ route("front.index") }}">Ana Sayfa</a>
                    </li>
                    <li>
                        <a href="masonry.html">Kategoriler</a>
                    </li>
                    <li>
                        <a href="grid.html">Hakkımızda</a>
                    </li>
                    <li>
                        <a href="about.html">İletişim</a>
                    </li>
                    @if(Auth::check())
                    <li>
                        <a href="{{ route('kullanici') }}">Profil Ayarları</a>
                    </li>
                    <li>
                      <a class="" href="{{ route('logout') }}">
                        <i style="font-size: 3rem;    display: flex;
                        align-items: center;
                        justify-content: center;" class="bi bi-box-arrow-right"></i> 
                      </a>
                  </li>       
                    @endif
                </ul>
            </div>
          </div>
        </div>
      </section>