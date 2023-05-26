<?php require_once get_stylesheet_directory() . '/assets/inc/functions/custom-class-walker-nav-menu.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- DESCRIÇÃO  -->
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <!-- FONTES -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">

  <!-- HEADER WORDPRESS -->
  <?php wp_head(); ?>
</head>

<body>
  <!-- HEADER -->
  <header id="header">
    <div class="header container">
      <div class="header-logo">
        <a target="_blank" href="https://advbox.com.br/software-juridico"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/advbox-logo.svg" alt="Logotipo ADVBOX"></a>
        <a href="https://blog.advbox.com.br">
          <p class="link-blog">Blog</p>
        </a>
      </div>

      <div class="header-nav">
        <?php
        wp_nav_menu([
          'theme_location'  => 'header_menu',
          'depth'           => 2,
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'container'       => '',
          'walker'          => new Custom_Walker_Nav_Menu(),
          'before'          => "<div class=\"actions\">\n",
          'after'           => "</div>\n",
        ]);
        ?>

        <div class="header-nav--mobile">
          <strong>Siga-nos</strong>
          <ul class="social-medias">
            <li><a target="_blank" href="https://www.facebook.com/advbox/">Facebook</a></li>
            <li><a target="_blank" href="https://www.instagram.com/advbox/">Instagram</a></li>
            <li><a target="_blank" href="https://www.youtube.com/channel/UCbpIpsNmnqL0RqCWs6rltTA">YouTube</a></li>
            <li><a target="_blank" href="https://www.linkedin.com/company/advbox-escritorios-digitais/">LinkedIn</a></li>
          </ul>
        </div>
      </div>

      <div class="header-login">
        <a id="bnt-login" class="btn btn-pri btn-blue" target="_blank" href="https://app.advbox.com.br/login">Login</a>
      </div>

      <button class="menu-hamburger">
        <div class="menu-hamburger__line"></div>
        <div class="menu-hamburger__line"></div>
        <div class="menu-hamburger__line"></div>
      </button>

      <script>
        const $menuHamburger = document.querySelector('.menu-hamburger');
        const $header = document.querySelector('.header');
        $menuHamburger.addEventListener('click', function () {
          const toAdd = $header.classList.toggle('menu-open');
          document.body.classList.toggle('no-scroll', toAdd);
        });
      </script>
    </div>
  </header>
