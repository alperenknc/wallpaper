<!DOCTYPE html>
<html lang="tr">
    @include("admin.parts.head")
    <body class="bg-primary">
      @include("admin.parts.header")
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Hoş Geldiniz</h3></div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger" style="display: flex;justify-content: center;">
                                            {{ $errors->first() }}
                                        </div>
                                    @endif
                                    <div class="card-body">
                                        <form method="post" action="{{ route('admin.login.post') }}">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email Adres</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Şifre</label>
                                            </div>
                                            {{-- <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" name="password" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div> --}}
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                               {{--  <a class="small" href="password.html">Şifreni mi Unuttun?</a> --}}
                                                <button class="btn btn-primary" type="submit">
                                                    Giriş
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Kullanıcı Oluşturmak mı İstiyorsun? Kullanıcı Oluştur!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                @include("admin.parts.footer")
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
