<?php
/*
Template name: Site em Construção
*/
?>

        <?php get_header(); ?>

        <div id="main-stock" class="container-fluid">
            
            <!-- banner home -->
            <div class="banner-construcao">
                
                <img src="http://entrenuvens.com/wp-content/uploads/2019/07/DJI_0092-HDR.jpg" class="img-banner">
                
                <div class="construcao-title branco text-align-center justify-content-center">
                    
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/_imagens/entre-nuvens-br.png" class="brand">
                    
                    <p>Até onde você iria se não houvesse nada lhe prendendo?</p>
                    
                    <h2>Lançamento em <span id="crono"></span></h2>
                    
                    
<script>
// Set the date we're counting down to
var countDownDate = new Date("Nov 12, 2019 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("crono").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("crono").innerHTML = "";
  }
}, 1000);
</script> 
                    
                    <p>Não aguenta esperar?<br>Entre em contato por
 <strong>eai@entrenuvens.com</strong></p>
                    
                    
                </div>
                
                <div class="blur blur-construcao"></div>
                
            </div>
                       
            <!-- FOOTER -->
            <?php get_footer(); ?>