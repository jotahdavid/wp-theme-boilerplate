<?php get_header(); ?>

<main class="main" role="main">
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
      <article <?php post_class(); ?>>
        <?php the_content(); ?>
        oioioioi
      </article>
      <aside id="aside-right">
        <nav>
          <ul>
            <li>
              <a href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/nav/flag-black.png" alt="Ícone - ">
                <h2>Começando com a ADVBOX</h2>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/nav/configuracoes.png" alt="Ícone - ">
                <h2>Configurações</h2>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/nav/meu-painel.png" alt="Ícone - ">
                <h2>Meu Painel</h2>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/nav/pessoas.png" alt="Ícone - ">
                <h2>Pessoas</h2>
              </a>
            </li>
          </ul>
        </nav>

      </aside>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
