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
 <!-- Single movie Start -->
    <section class="gen-section-padding-3 gen-single-movie">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <div class="gen-single-movie-wrapper style-1">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="gen-video-holder">
                                @if(isset($panel))
                                @php 
                                $videos = $panel->video_lesson;
                               
                                foreach($videos as $key => $video){
                                    if($video->link != '' && $video->link != 'https://www.youtube.com/embed/'){
                                    $links[] = $video->link;
                                    }
                                }
                             
                                @endphp
                                    <iframe id="aula" width="100%" height="550px" src="{{$panel->video_lesson[0]->link}}"
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>

                                @else
                                @php 
                                $videos = $curso->panels[0]->video_lesson;
                               
                                foreach($videos as $key => $video){
                                    if($video->link != '' && $video->link != 'https://www.youtube.com/embed/'){
                                    $links[] = $video->link;
                                    }
                                }
                             
                                @endphp
                                    <iframe id="aula" width="100%" height="550px" src="{{$curso->panels[0]->video_lesson[0]->link}}"
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                @endif
                          
                                </div>
                                <div class="gen-single-movie-info">
                                    <h2 class="gen-title">{{$curso->title}} - </h2> <div class="gen-btn-container">
                                                       
                                                        @foreach ($links as $link)
                                                         <a class="gen-button gen-button-loadmore" href="#" onclick="mudaAula('{{$link}}')">
                                                            <span class="button-text">Parte: 0{{$loop->iteration}}</span>
                                                            </a>    &ensp;
                                                        @endforeach
                                                             &ensp;
                                                          <a class="gen-button gen-button-loadmore" href="{{route('prova', ['slug' => $curso->slug])}}" >
                                                            <span class="button-text">Realizar Prova</span>
                                                            </a>
                                                    
                                                    </div>
                              
                                    <div class="gen-single-meta-holder">
                                        <ul>
                                            <li class="gen-sen-rating">{{$curso->panels[0]->title}}</li>
                                            <li>
                                                <i class="fas fa-eye">
                                                </i>
                                                <span>237 Vizualizações</span>
                                            </li>
                                        </ul>
                                    </div>
                                   
                                    @foreach ($curso->panels as $panel)
                                    <a href="{{route('curso-aula', ['slug' => $curso->slug, 'panel'=> $panel->id])}}"  data-bs-toggle="modal" data-bs-target="#exampleModal"><p>Aula 0{{$loop->iteration}}: {{$panel->title}}</p></a>

                                    @endforeach
                                    
                                </div>
                            </div>
                     <div class="col-lg-12">
                                <div class="pm-inner">
                                    <div class="gen-more-like">
                                        <h5 class="gen-more-title">Cursos Semelhantes</h5>
                                        <div class="row">

                                        @foreach ($recentes as $recent)
                                                @php 
                                                $recente = $recent->classes[0];
                                                @endphp
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                    <div class="gen-movie-contain">
                                                        <div class="gen-movie-img">
                                                            <img src="https://unyflex.com.br/storage/cursos/banner/{{$recente->photo}}"
                                                                alt="streamlab-image">
                                                            <div class="gen-movie-add">
                                                                <div class="wpulike wpulike-heart">
                                                                    <div
                                                                        class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                                        <button type="button"
                                                                            class="wp_ulike_btn wp_ulike_put_image"></button>
                                                                    </div>
                                                                </div>
                                                                <ul class="menu bottomRight">
                                                                    <li class="share top">
                                                                        <i class="fa fa-share-alt"></i>
                                                                        <ul class="submenu">
                                                                            <li><a href="#" class="facebook"><i
                                                                                        class="fab fa-facebook-f"></i></a>
                                                                            </li>
                                                                            <li><a href="#" class="facebook"><i
                                                                                        class="fab fa-instagram"></i></a>
                                                                            </li>
                                                                            <li><a href="#" class="facebook"><i
                                                                                        class="fab fa-twitter"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                                <div
                                                                    class="movie-actions--link_add-to-playlist dropdown">
                                                                    <a class="dropdown-toggle" href="#"
                                                                        data-toggle="dropdown"><i
                                                                            class="fa fa-plus"></i></a>
                                                                    <div class="dropdown-menu mCustomScrollbar">
                                                                        <div class="mCustomScrollBox">
                                                                            <div class="mCSB_container">
                                                                                <a class="login-link" href="#">Sign in
                                                                                    to add this movie to
                                                                                    a
                                                                                    playlist.</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="gen-movie-action">
                                                               <a href="{{route('curso', ['slug' => $recente->slug])}}" class="gen-button">
                                                                    <i class="fa fa-play"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="gen-info-contain">
                                                          
                                                            <div class="gen-movie-meta-holder">
                                                                <ul>
                                                                     <li>{{$recente->workload}} Horas</li>
                                                                    <li>
                                                                        <a href="#"><span>Semelhantes</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                           

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="gen-load-more-button">
                                                    <div class="gen-btn-container">
                                                        <a class="gen-button gen-button-loadmore" href="#">
                                                            <span class="button-text">Load More</span>
                                                            <span class="loadmore-icon" style="display: none;"><i
                                                                    class="fa fa-spinner fa-spin"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single movie End -->
    <script>
     function mudaAula(link){
       var aula = document.getElementById('aula');
       aula.src = link;
        }
    </script>
@include('layouts.footerava')

@include('layouts.scripts')
