@include('layouts.headerassinatura')
       <script src="https://sdk.mercadopago.com/js/v2"></script>

        <section class="section">
            <div class="container">
                <div class=" ">
                    <div class="row">
                        <div class="col-md-6 shop-media">
                            <div class="row">
                                <div class="col-md-12">
                                <div class="image-wrap entry">
                                    <img src="images/assinatuastory.png" alt="" class="img-responsive" style="max-height:600px; max-width: 300px">
                                    
                                </div><!-- end image-wrap -->
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                           
                        </div><!-- end col -->

                        <div class="col-md-6">
                            <div class="shop-desc">
                                <h3>Assinatura Anual</h3>
                                <small>$82.90 /Mês no plano anual</small>
                                <p>Pague apenas R$990 reais por mais de 3 mil horas de capacitação, usando este nosso plano você pode se capacitar em todos os cursos de gestão que oferecemos.</p>
                                <div class="shop-meta">
                                   
                                      <script>
                
   
                            const mp = new MercadoPago('APP_USR-b0820842-a6fb-44fe-b59b-ead639377144', {
                            locale: 'pt-BR', 
                            });
                            const bricksBuilder = mp.bricks();

                </script>
                                     <div id="wallet_container"></div>
                                </div><!-- end shop meta -->
                            </div><!-- end desc -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                    </div><!-- end related -->
                </div><!-- end boxed -->
            </div><!-- end container -->
        </section>

<script>

mp.bricks().create("wallet", "wallet_container", {
   initialization: {
       preferenceId: "{{$preference->id}}",
   }, 
});

</script>
@include('layouts.footer')