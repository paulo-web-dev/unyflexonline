@include('layouts.headerava')
    <!-- Log-in  -->
    <section class="position-relative pb-0">
        <div class="gen-login-page-background" style="background-image: url('imagesava/background/asset-54.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <form name="pms_login" id="pms_login" action="{{ route('login') }}" method="post">
                        @csrf
                            <h4>Log In</h4>
                            <p class="login-username">
                                <label for="user_login">Email</label>
                                <input id="email" class="input" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </p>
                            <p class="login-password">
                                <label for="user_pass">Senha</label>
                                <input id="password" type="password" class="input" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </p>
                      
                            <p class="login-submit">
                                <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary"
                                    value="Log In">
                                <input type="hidden" name="redirect_to">
                            </p>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Log-in  -->

    <!-- Back-to-Top start -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!-- Back-to-Top end -->

   @include('layouts.scripts')