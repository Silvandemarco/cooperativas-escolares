<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Cooperativas Escolares</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= get_theme_root_uri(); ?>/localhost/img/2.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/localhost/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/localhost/css/animate.css">
    <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/localhost/css/LineIcons.css">
    <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/localhost/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/localhost/css/owl.theme.css">
    <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/localhost/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/localhost/css/nivo-lightbox.css">
    <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/localhost/css/main.css">    
    <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/localhost/css/responsive.css">
    <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/localhost/functions.php">
    <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/localhost/css/slick.scss">
    <script src="https://kit.fontawesome.com/5317d26dd3.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
  </head>
  
  <body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area">    
      <div class="overlay">
        <!-- <span></span>
        <span></span> -->
      </div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="index.html" class="navbar-brand"><img src="img/logo.png" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#home">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#cooperativas-escolares">O que são as Cooperativas Escolares</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Cooperativas Escolares</a>
              </li>  
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Services</a>
              </li>   -->                          
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#showcase">Showcase</a>
              </li>   -->     
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#pricing">Pricing</a>
              </li>  -->    
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#team">Team</a>
              </li> --> 
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#blog">Blog</a>
              </li>  --> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contato</a>
              </li> 
              <!-- <li class="nav-item">
                <a class="btn btn-singin" href="#">Download</a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
      <?php
      $params = array(
	        'post_type'     => 'banner',
	        'posts_per_page' => -1
	    );

	    $banner = new WP_Query($params);
      ?>
      <div class="list-banners-home">
      <?php
			if($banner->have_posts()){
				while($banner->have_posts()){
					$banner->the_post();
		?>
		<div class="banners">
      <a href="<?= get('link_botao'); ?>"><div class="img" style="background-image: url('<?= get('imagem'); ?>');"></div></a>
    </div>
		<?php
		}
			wp_reset_query();
		}
		?>      
      </div>            
    </header>
    <!-- Header Section End --> 

    <?php
      $params_o_que_sao_coop = array(
          'post_type'     => 'o_que_sao_coop',
          'posts_per_page' => 1
      );

      $o_que_sao_coop = new WP_Query($params_o_que_sao_coop);
      ?>
    <section id="cooperativas-escolares" style="margin-top: 50px;">
      <div class="wrapper-cooperativas-escolares container">
        <?php
          if($o_que_sao_coop->have_posts()){
            while($o_que_sao_coop->have_posts()){
              $o_que_sao_coop->the_post();
        ?>
        <h1><?= get_the_title(); ?></h1>
        <div class="content-oq-sao-coop"><?= the_content(); ?></div>
        <?php
        }
          wp_reset_query();
        }
        ?>
      </div>
    </section>

    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">

        <div class="row">
          <!-- Start Col -->
          <?php echo make_list_shortcode(); ?>
          <!-- End Col -->

        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Contact Us Section -->
    <section id="contact" class="section">
      <!-- Container Starts -->
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="contact-text section-header text-center">  
              <div>   
                <h2 class="section-title">Entre em contato conosco</h2>
                <div class="desc-text">
                  <p>Preencha o formulário abaixo e nos envie uma mensagem!</p>
                </div>
              </div> 
            </div>
          </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->

        <?php
          if(!empty($_POST['email'])){
            if(sendMessage('contato', 'Formulário de contato', 'gabriel.h.bernardi@gmail.com', $_POST['email'])){
              die('true');
            } else {
              die('false');
            }
          }
        ?>
        <div class="row">
          <!-- Start Col -->
          <div class="col-lg-6 col-md-12" style="max-width: 100%;flex: 0 0 100%;">
          <form id="contactForm" method="post" action="">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
                  <div class="help-block with-errors"></div>
                </div>                                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Telefone" id="budget" class="form-control" name="budget">
                  <div class="help-block with-errors"></div>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                  <div class="help-block with-errors"></div>
                </div>                                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Assunto" id="msg_subject" class="form-control" name="msg_subject">
                  <div class="help-block with-errors"></div>
                </div> 
              </div>
              <div class="col-md-12">
                <div class="form-group"> 
                  <textarea class="form-control" id="message"  name="message" placeholder="Mensagem" rows="4"></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="submit-button">
                  <button class="btn btn-common" id="submit" type="submit">Enviar</button>
                  <div id="msgSubmit" class="h3 hidden"></div> 
                  <div class="clearfix"></div> 
                </div>
                <div class="msgs-contact"></div>
              </div>
            </div>            
          </form>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-1">
            
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-4 col-md-12">
            <div class="contact-img">
              <img src="img/contact/01.png" class="img-fluid" alt="">
            </div>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-1">
          </div>
          <!-- End Col -->

        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- Contact Us Section End -->

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section id="footer-Content" style="padding-top: 0px;">

        <div class="copyright">
          <div class="container">
            <!-- Star Row -->
            <div class="row">
              <div class="col-md-12">
                <div class="site-info text-center">
                  <p>Copyright © <?= date('Y'); ?></p>
                </div>              
                
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
      <!-- Copyright End -->
      </section>
      <!-- Footer area End -->
      
    </footer>
    <!-- Footer Section End --> 


    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a> 

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="<?= get_theme_root_uri(); ?>/localhost/js/jquery-min.js"></script>
    <script src="<?= get_theme_root_uri(); ?>/localhost/js/popper.min.js"></script>
    <script src="<?= get_theme_root_uri(); ?>/localhost/js/bootstrap.min.js"></script>
    <script src="<?= get_theme_root_uri(); ?>/localhost/js/owl.carousel.js"></script>      
    <script src="<?= get_theme_root_uri(); ?>/localhost/js/jquery.nav.js"></script>    
    <script src="<?= get_theme_root_uri(); ?>/localhost/js/scrolling-nav.js"></script>    
    <script src="<?= get_theme_root_uri(); ?>/localhost/js/jquery.easing.min.js"></script>     
    <script src="<?= get_theme_root_uri(); ?>/localhost/js/nivo-lightbox.js"></script>     
    <script src="<?= get_theme_root_uri(); ?>/localhost/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= get_theme_root_uri(); ?>/localhost/js/jquery.validate.min.js"></script>  
    <script src="<?= get_theme_root_uri(); ?>/localhost/js/additional-methods.min.js"></script>    
    <script src="<?= get_theme_root_uri(); ?>/localhost/js/slick.min.js"></script>
    <script src="<?= get_theme_root_uri(); ?>/localhost/js/main.js"></script>
    <script src="<?= get_theme_root_uri(); ?>/localhost/js/default.js"></script>
  </body>
</html>