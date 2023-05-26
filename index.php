<?php get_header(); ?>

<main id="post" class="main container" role="main">
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
      <section class="grid-6" <?php post_class(); ?>>
        <aside id="aside-left">
          <nav>
            <ul class="ul">
              <li>
                <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/nav/flag-black.png" alt="Ícone - ">
                  <h2 class="h2">Começando com a ADVBOX</h2>
                </a>
              </li>
              <li class="active">
                <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/nav/configuracoes.png" alt="Ícone - ">
                  <h2 class="h2">Configurações</h2>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/nav/meu-painel.png" alt="Ícone - ">
                  <h2 class="h2">Meu Painel</h2>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/nav/pessoas.png" alt="Ícone - ">
                  <h2 class="h2">Pessoas</h2>
                </a>
              </li>
            </ul>
          </nav>

        </aside>

        <article id="article-content-advbox">
          <?php the_content(); ?>
        </article>

        <aside id="aside-right"></aside>
      </section>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
