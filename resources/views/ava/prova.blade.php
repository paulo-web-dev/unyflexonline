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
    <div class="pm-inner">
        <div class="gen-more-like">
            <h5 class="gen-more-title">Prova Curso: {{$curso->title}}</h5>

            <div class="row">
            <form action="{{route('corrige-prova')}}" method="POST">
            @csrf
            @foreach ($provas->questoes as $questao)
                <div class="col-lg-12">
                    <h6>Questão {{$loop->iteration}}:</h6>
                    <p>{{$questao->texto}}</p>
                    @foreach ($questao->alternativas as $alternativa)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="questao{{$loop->parent->iteration}}" id="alternativa{{$alternativa->id}}" value="{{$alternativa->correta}}">
                            <label class="form-check-label" for="alternativa{{$alternativa->id}}" onclick="document.getElementById('alternativa{{$alternativa->id}}').click()">
                                {{$alternativa->texto}}
                            </label>
                        </div><br>
                
                    @endforeach
                </div>
                
            @endforeach
            <input type="hidden" name="questoes" value="{{count($provas->questoes)}}">
            <input type="hidden" name="class" value="{{$curso->id}}">
            </div>
              <div class="row">
                <div class="col-lg-12">
                    <div class="gen-load-more-button">
                        <div class="gen-btn-container">
                            <button type="submit" class="gen-button gen-button-loadmore">
                                <span class="button-text">Entregar Prova</span>
                                <span class="loadmore-icon" style="display: none;"><i
                                        class="fa fa-spinner fa-spin"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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

@include('layouts.footerava')

@include('layouts.scripts')
