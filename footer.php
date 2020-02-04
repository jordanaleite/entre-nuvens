
       
            <div id="footer" class="branco">

                <div class="container">

                    <div class="row">
                        
                        <div class="col-12 col-lg-4 col-footer-logo">
                            
                            <img class="footer-logo" src="<?php echo get_bloginfo('template_directory'); ?>/_imagens/entre-nuvens-br.png">
                            
                            <p>Livre como o vento.<br><strong>Feita com calma em São Paulo.</strong></p>
                            
                        </div>
                        
                        <div class="col col-md-6 col-lg-3 footer-list">
                            
                            <h3>serviços</h3>
                            
                            <ul>
                                <li class="">
                                    <a class="" href="<?php bloginfo('url'); ?>/portfolio/#produtora">Produtora</a>
                                </li>
                                <li class="">
                                    <a class="" href="<?php bloginfo('url'); ?>/stock">Adquirir imagens aéreas</a>
                                </li>
                                <li class="">
                                    <a class="" href="<?php bloginfo('url'); ?>/divulgue-se">Licenciar imagens aéreas</a>
                                </li>
                                <li class="">
                                    <a target="_blank" href="http://entrenuvens.com/wp-content/uploads/2019/11/Entre-Nuvens-_-Termos-de-Uso-Política-de-Privacidade-entrenuvens.com_.pdf">Termos & Licenças</a>
                                </li>
                                <li class="">
                                    <a class="" href="<?php bloginfo('url'); ?>/sobre/#duvidas">Dúvidas frequentes</a>
                                </li>
                            </ul>
                            
                        </div>
                        
                        <div class="col col-md-6 col-lg-3 footer-list">
                            
                            <h3>galerias</h3>
                            
                            <ul>
                                <li class="">
                                    <a class="" href="<?php bloginfo('url'); ?>/imagens-populares">Mais vendidas</a>
                                </li>
                                <li class="">
                                    <a class="" href="<?php bloginfo('url'); ?>/fotografo/entre-nuvens">Fotógrafo selecionado</a>
                                </li>
                                <li class="">
                                    <a class="" href="<?php bloginfo('url'); ?>/quadros">Loja de quadros</a>
                                </li>
                            </ul>
                            
                        </div>
                        
                        <div class="col-12 col-lg-2 footer-list list-icons">
                            
                            <ul>
                                <li class="">
                                    <a class="" target="_blank" href="https://www.instagram.com/entrenuvens/"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="">
                                    <a class="" target="_blank" href="https://www.facebook.com/entrenuvens.ia/"><i class="fab fa-facebook-square"></i></a>
                                </li>
                                <li class="">
                                    <a class="" target="_blank" href="https://vimeo.com/entrenuvens"><i class="fab fa-vimeo-square"></i></a>
                                </li>
                            </ul>
                            
                            <p>E aí, quer voar com a gente?</p>
                            
<a style="font-size: 1rem;" tabindex="0" role="button" class="btn btn-outline-branco btn-footer" data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-content="Você é uma pessoa incrível com uma ideia irresistível? Enfim a Entre Nuvens te encontrou! :)<br>
Se quiser pedir um orçamento, é só clicar <a href='<?php echo esc_url( home_url( '/' ) ); ?>orcamento' class=''>clicar aqui</a>. Mas se quiser falar sobre qualquer outra coisa, é só mandar um email para <b>eai@entrenuvens.com</b>.">
  entre em contato
</a>                            
                            
                        </div>
                        
                    </div>
                    
                    <div class="row text-align-center">
                        
                        <div class="col col-copyrights">
                            <p><span class="copyright">&#9400;</span> Entre Nuvens 2015 - 2019. Todos os direitos reservados. </p>
                        </div>
                        
                    </div>

                </div>

            </div>

        </div> <!-- main ends -->
        
    </div>
    
    <!-- JavaScript -->
    
    <!-- Bootstrap javascript -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha256-CjSoeELFOcH0/uxWu6mC/Vlrc1AARqbm/jiiImDGV3s=" crossorigin="anonymous"></script>

    <!-- Masonry -->
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>

    <!-- masonry -->
    <script>
        
        $('.grid').masonry({
          // options
          itemSelector: '.grid-item',
      });
                    
    </script>

    <!-- tooltip -->
    <script>
        
        $(function () {
            $('[data-toggle="popover"]').popover();
            $('[data-toggle="tooltip"]').tooltip();
        })
        
    </script>

    <!-- images for quadros -->
    <script>
        
        var images = new Array ();
        images[0] = "https://entrenuvens.com/wp-content/uploads/2019/11/quadro-cabo-frio-passagem-5.jpg";
        images[1] = "https://entrenuvens.com/wp-content/uploads/2019/11/quadro-buzios-praia-da-ferradura.jpg";
        images[2] = "https://entrenuvens.com/wp-content/uploads/2019/11/quadro-buzios-praia-da-foca.jpg";
        images[3] = "https://entrenuvens.com/wp-content/uploads/2019/11/quadro-buzios-praia-do-forno-2.jpg";
        images[4] = "https://entrenuvens.com/wp-content/uploads/2019/11/quadro-cabo-frio-passagem-3.jpg";
        images[5] = "https://entrenuvens.com/wp-content/uploads/2019/11/quadro-gramado-vinicola.jpg";
        images[6] = "https://entrenuvens.com/wp-content/uploads/2019/11/quadro-juquehy.jpg";
        
        var size = images.length
        var z = Math.floor(size*Math.random())

        $('#img-quadros').attr('src',images[z]);
        
    </script>

    <!-- images for divulga -->
    <script>
        
        var image = new Array ();
        image[0] = "https://entrenuvens.com/wp-content/uploads/2019/07/drone-sana-rj.jpg";
        image[1] = "https://entrenuvens.com/wp-content/uploads/2019/07/drone-cabofrio-rj-05.jpg";
        image[2] = "https://entrenuvens.com/wp-content/uploads/2019/07/drone-gramado-rs-01.jpg";
        image[3] = "https://entrenuvens.com/wp-content/uploads/2019/07/drone-gramado-rs-03.jpg";
        image[4] = "https://entrenuvens.com/wp-content/uploads/2019/07/drone-saopaulo-sp-01.jpg";
        image[5] = "https://entrenuvens.com/wp-content/uploads/2019/07/drone-saopedro-rj-01.jpg";
        image[6] = "https://entrenuvens.com/wp-content/uploads/2019/07/drone-buzios-rj-01.jpg";
        
        var size = image.length
        var x = Math.floor(size*Math.random())

        $('#img-divulga').attr('src',image[x]);
        
    </script>
    
    <!-- hide menu -->
    <script>
        
        // Get the navbars
        var navbar = document.getElementById("navbar");
        
        var menu = document.getElementById("menu");
        
        var shadow = document.getElementById("shadow-nav");
        
        //get the exception pages
        var conta = '<?php echo is_account_page(); ?>';
        
        var single = '<?php echo is_single() ?>';
        
        var carrinho = '<?php echo is_cart() ?>';
        
        var checkout = '<?php echo is_checkout(); ?>';
        
        var upload = '<?php echo is_page('upload'); ?>'
        
        /*função das exceções
        
        $(document).ready(function(){
            
           if ( single === '1' || conta === '1' || carrinho === '1' || checkout === '1' ) {
                
                navbar.classList.add("bg-light");
                navbar.classList.remove("bg-transparent");
                shadow.classList.add("display-none");
                
            } else {
                //do nothing
            } 
            
        }) */
        
        // Get the offset position of the navbar
        var bg = navbar.offsetTop;
        
        // Get page offset position
        var prevScroll = window.pageYOffset;
        
        // Execute functon on scrolls
        window.onscroll = function() {
            
            // Get the current position
            var currentScroll = window.pageYOffset;
            
            if (prevScroll > currentScroll) {
                
                menu.style.opacity = "1";
                
            } else {
                
                if (prevScroll < 60) {
                    
                    menu.style.opacity = "1";
                    
                } else {
                
                menu.style.opacity = "0";
            }};
            
            prevScroll = currentScroll;
            
            if ( prevScroll > bg || single === '1' || conta === '1' || carrinho === '1' || checkout === '1' || upload === '1' ) {
                
                navbar.classList.add("bg-light");
                navbar.classList.remove("bg-transparent");
                shadow.classList.add("display-none");
                
            } else {
                
                navbar.classList.remove("bg-light");
                navbar.classList.add("bg-transparent");
                shadow.classList.remove("display-none");
                
            };
            
        }
        
    </script>

    <!-- banner home active -->
    <script>
        
        $(document).ready(function() {
            $('#bannerhome .carousel-inner').find('>:first-child').addClass('active');
        })
        
    </script>

    <!-- mobile imagens -->
    <script>
        
    $(document).ready(function() {
    
        if (window.matchMedia("(max-width: 500px)").matches) {
        
            $(".img-banner").removeAttr("style");
        
        }
    
    }) 
        
    </script>

    <!-- search no mobile -->

    <script>
        
        //btn-menu
        var btnmenu = $("#searchsubmit");
        
        //tablets and mobiles
        function isMobile() { return ('ontouchstart' in document.documentElement); }
        
        var isTouchDevice = 'ontouchstart' in document.documentElement;
        
        if ( isTouchDevice ) {
            
            //muda tipo de botão
            btnmenu.attr('type','button');
            
            //ao clicar
            $(document).click(function(event){
            
                $target = $(event.target)

                //ao pesquisar no celular
                if( $target.closest('#searchsubmit').length && window.matchMedia("(max-width: 500px)").matches ) {

                    //$(".form-menu-mobile").removeClass("display-none");
                    //$(".navbar-brand").addClass('display-none');
                    $('.navbar-collapse').collapse('hide');

                } 
                //ao pesquisar no tablet
                else if( $target.closest('#searchsubmit').length && window.matchMedia("(max-width: 900px) and (min-width: 500px)").matches ) {

                    //$(".form-menu-mobile").removeClass("display-none");
                    //$(".navbar-brand").addClass('');
                    $('.navbar-collapse').collapse('hide');

                } else if( $('#navbarSupportedContent').target ) {

                    //$(".form-menu-mobile").addClass("display-none");
                    //$(".navbar-brand").removeClass('display-none');
                    $('.navbar-collapse').collapse('show');

                } else {

                    //$(".form-menu-mobile").addClass("display-none");
                    //$(".navbar-brand").removeClass('display-none');
                    $('.navbar-collapse').collapse('hide');

                } 

            });

        } else {
            //do nothing
        };
        
    </script>

    <!-- search form -->

    <script>
        
        //input de pesquisa
        var pesquisar = $('#pesquisaInput');
        
        //botão de limpar pesquisa
        var pesquisaBtn = $('#pesquisaBtn');
        
        // função clean
        pesquisaBtn.on('click', function() {
            
            $('#pesquisaInput').attr('value', '');
            $('#pesquisaInput').attr('placeholder', 'pesquisa');
            return false;
            
        });
        
        //função pesquisa
        pesquisar.on('click', function() {
            
            $('#pesquisaInput').attr('name', 's');
            $('#pesquisaForm').attr('method', 'get');
            $('#pesquisaForm').attr('action', '<?php bloginfo('url'); ?>/');
            
        })
        
    </script>

    <script>
        $(document).ready(function() {
            
            function text(text) {

                document.getElementById('text-filtro').innerHTML = text;
            }
        });
    </script> 

    <!-- Finalizar compra -->
    <script>
        $(document).ready(function() {
            
            $('.woocommerce-billing-fields input').addClass('form-control');
            $('#billing_address_1_field .woocommerce-input-wrapper').attr('style', 'width: 100%');
            $('#billing_address_2_field .woocommerce-input-wrapper').attr('style', 'width: 100%');
            $('#billing_email_field .woocommerce-input-wrapper').attr('style', 'width: 100%');
            $('.select2').removeAttr('style');
        });
    </script> 

    <!-- load more button -->

    <script>
        
    jQuery(document).ready(function($) {

        jQuery('#carregar a').on('click', function(e) {
            e.preventDefault();

                //link da página
                var link = jQuery(this).attr('href');
                
                //muda botÃ£o
                jQuery('#carregar a').fadeOut();
                
                //adiciona posts acima do botÃ£o
                $.get(link, function(data){
                    var post = $('.grid .grid-item', data);
                    var paginacao = $('#carregar a', data);
                    jQuery('.grid').append(post).masonry( 'appended', post );

                    if(paginacao.length > 0){
                      jQuery('#carregar a').attr('href', jQuery(paginacao).attr('href')).fadeIn();
                  }

              });
                
                //carrega
                jQuery('.grid').load(link+ + '.grid-item');
            });
    });

</script>

    <!-- PagSeguro boostrap -->
    <script>
        
        window.onload = function() {
            
            jQuery(document).find("#bootstrap-styles-css").remove();
            jQuery(document).find("#direct-payment-styles-css").remove();
            
        };
        
    </script>
  
    <!-- mobile content minha conta -->
    <script>
        
$(document).ready(function() {
    
    if (window.matchMedia("(min-width: 500px)").matches) {
        
        $(".user-menu").removeClass('collapse');
        $(".user-menu").addClass('show');
        
    } else {
        
        $(".user-menu").addClass('collapse');
        $(".user-menu").removeClass('show');
        
        
        //filtros forms
        $(".btn-mobile-content").click(function() {
            
            if( $('.user-menu').hasClass("show") ) {
                
                $('.user-menu').removeClass("show");
                
            } else {
                
                $('.user-menu').addClass("show");
                
            }
            
        });
        
    };
    
})
        
    </script>

    <?php wp_footer(); ?>
    
</body>