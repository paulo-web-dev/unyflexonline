
    <!-- footer start -->
    <footer id="gen-footer">
        <div class="gen-footer-style-1">
            <div class="gen-footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="widget">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <img src="/images/logounyflexonline.png" class="gen-footer-logo" alt="gen-footer-logo">
                                        <p>Acompanhe a plataforma mais completa do Brasil nas redes sociais
                                        </p>
                                        <ul class="social-link">
                                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="widget">
                                <h4 class="footer-title">Categorias</h4>
                                <div class="menu-explore-container">
                                    <ul class="menu">
                                        @for ($i = 0; $i <= 7; $i++)
                                                <li class="menu-item">
                                                    <a href="{{route('categoria', ['slug' => $categorias[$i][0]->category->slug])}}">{{$categorias[$i][0]->category->title}}</a>
                                                </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="widget">
                                <h4 class="footer-title">Categorias</h4>
                                <div class="menu-about-container">
                                    <ul class="menu">
                                        @for ($i = 8; $i <= 15; $i++)
                                                <li class="menu-item">
                                                    <a href="{{route('categoria', ['slug' => $categorias[$i][0]->category->slug])}}">{{$categorias[$i][0]->category->title}}</a>
                                                </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3  col-md-6">
                            <div class="widget">
                                <h4 class="footer-title">Baixe Nosso Aplicativo</h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>Baixe nosso aplicativo nas lojas.
                                        </p>
                                        <a href="#">
                                            <img src="{{url('imagesava/asset-35.png')}}" class="gen-playstore-logo" alt="playstore">
                                        </a>
                                        <a href="#">
                                            <img src="{{url('imagesava/asset-36.png')}}" class="gen-appstore-logo" alt="appstore">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gen-copyright-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center">
                            <span class="gen-copyright"><a target="_blank" href="#"> Copyright {{date('Y')}} UNYFLEX ONLINE</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer End -->

    <!-- Back-to-Top start -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>