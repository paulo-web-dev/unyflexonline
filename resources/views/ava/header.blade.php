
    <!--========== Header ==============-->
    <header id="gen-header" class="gen-header-style-1 gen-has-sticky">
        <div class="gen-bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="{{route('home-ava')}}">
                                <img class="img-fluid logo" src="{{url('images/logounyflexonline.png')}}" alt="streamlab-image">
                            </a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div id="gen-menu-contain" class="gen-menu-contain">
                                    <ul id="gen-main-menu" class="navbar-nav ml-auto">
                                        <li class="menu-item active">
                                            <a href="#" aria-current="page">Cursos</a>
                                            <i class="fa fa-chevron-down gen-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="{{route('recentes')}}" aria-current="page">Recentes</a>
                                                </li>
                                                <li class="menu-item active">
                                                    <a href="{{route('assistidos')}}" aria-current="page">Assistidos</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{route('favoritos')}}" aria-current="page">Favoritos</a>
                                                </li>
                                                 <li class="menu-item">
                                                    <a href="{{route('certificados')}}" aria-current="page">Meus Certificados</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Categorias</a>
                                            <i class="fa fa-chevron-down gen-submenu-icon"></i>
                                            <ul class="sub-menu">
                                        @for ($i = 0; $i <= 11; $i++)
                                                <li class="menu-item">
                                                    <a href="{{route('categoria', ['slug' => $categorias[$i][0]->category->slug])}}">{{$categorias[$i][0]->category->title}}</a>
                                                </li>
                                        @endfor
                                            </ul>
                                        </li>
                                       
                                     
                                    </ul>
                                </div>
                            </div>
                            <div class="gen-header-info-box">
                                <div class="gen-menu-search-block">
                                    <a href="javascript:void(0)" id="gen-seacrh-btn"><i class="fa fa-search"></i></a>
                                    <div class="gen-search-form">
                                        <form role="search" method="get" class="search-form" action="#" onsubmit="return pesquisa()" >
                                            <label> 
                                                <span class="screen-reader-text"></span>
                                                <input type="search" class="search-field" placeholder="Pesquisa …"
                                                    value="" name="titulo" id="titulo">
                                            </label>
                                            <button type="submit" class="search-submit" ><span
                                                    class="screen-reader-text"></span></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="gen-account-holder">
                                    <a href="javascript:void(0)" id="gen-user-btn"><i class="fa fa-user"></i></a>
                                    <div class="gen-account-menu">
                                        <ul class="gen-account-menu">
                                            <!-- Pms Menu -->
                                            <li>
                                                <a href="{{route('logout')}}"><i class="fas fa-sign-in-alt"></i>
                                                    Log Out </a>
                                            </li>
                                            <li>
                                                <a href="{{route('certificados')}}"><i class="fa fa-user"></i>
                                                    Meus Certificados </a>
                                            </li>
                                      
                                           
                                        </ul>
                                    </div>
                                </div>
                               
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
    function pesquisa() {
      
       titulo = document.getElementById('titulo').value;
     
        window.location.href = 'http://127.0.0.1:8000/pesquisa/cursos/' + titulo;
        return false; 
    }
    </script>
    <!--========== Header ==============-->