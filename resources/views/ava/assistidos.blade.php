@include('layouts.headerava')

<body>
 <!--=========== Loader =============-->
    <div id="gen-loading">
        <div id="gen-loading-center">
            <h1>UNYFLEX ONLINE</h1>
        </div>
    </div>
    <!--=========== Loader =============-->

@include('ava.header')
    <!-- owl-carousel Banner Start -->
  <!-- breadcrumb -->
    <div class="gen-breadcrumb" style="background-image: url('images/background/asset-25.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="gen-breadcrumb-title">
                            <h1>
                               Cursos Assistidos
                            </h1>
                        </div>
                        <div class="gen-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i
                                            class="fas fa-home mr-2"></i>Cursos</a></li>
                                <li class="breadcrumb-item active">Assistidos</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <!-- Section-1 Start -->
    <section class="gen-section-padding-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                     @foreach ($views as $view)
                      @php 
                      $recente = $view->class;
                      @endphp
                     @if($recente->unyflex == 1 && $recente->status == 'able') 
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                <div class="gen-movie-contain">
                                    <div class="gen-movie-img">
                                     <img src="https://unyflex.com.br/storage/cursos/banner/{{$recente->photo}}" alt="streamlab-image">
                                      
                                        <div class="gen-movie-action">
                                            <a href="{{route('curso', ['slug' => $recente->slug ])}}" class="gen-button">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="gen-info-contain">
                                        <div class="gen-movie-info">
                                         
                                        </div>
                                        <div class="gen-movie-meta-holder">
                                            <ul>
                                                <li>18h</li>
                                                <li>
                                                    <a href="#"><span>Assistidos</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                
                       

                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Section-1 End -->
@include('layouts.footerava')

@include('layouts.scripts')
