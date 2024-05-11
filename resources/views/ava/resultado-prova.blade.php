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
        <div class="gen-more-like" style="margin-top: 30px">
        @if ($resultado >= 50)
            <h5 class="gen-more-title">Parabéns você concluiu a prova do curso {{$curso->title}}. Emita seu certificado.</h5>
        @else
            <h5 class="gen-more-title">Infelizmente você não obteve mais de 50% de acertos, faça a prova novamente para liberação de certificado.</h5>
        @endif
        
              <div class="row">
                <div class="col-lg-12">
                    <div class="gen-load-more-button">
                        <div class="gen-btn-container">
                             @if ($resultado >= 50)
                             <a href="{{route('certificado', ['id' => $certificado->id])}}">
                            <button type="button" class="gen-button gen-button-loadmore">
                                <span class="button-text">Emitir Certificado</span>
                                <span class="loadmore-icon" style="display: none;"><i
                                        class="fa fa-spinner fa-spin"></i></span>
                            </button>
                            </a>
                            @else
                               <a href="{{route('prova', ['slug' => $curso->slug])}}">
                            <button type="button" class="gen-button gen-button-loadmore">
                                <span class="button-text">Refazer Prova</span>
                                <span class="loadmore-icon" style="display: none;"><i
                                        class="fa fa-spinner fa-spin"></i></span>
                            </button>
                            </a>
                               <a href="{{route('curso', ['slug' => $curso->slug ])}}">
                            <button type="button" class="gen-button gen-button-loadmore">
                                <span class="button-text">Voltar ao Curso</span>
                                <span class="loadmore-icon" style="display: none;"><i
                                        class="fa fa-spinner fa-spin"></i></span>
                            </button>
                            @endif
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
