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
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/sidebar/flag-black.png" alt="Ícone - ">
                  <h2 class="h2">Começando com a ADVBOX</h2>
                </a>
              </li>
              <li class="active">
                <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/sidebar/configuracoes.png" alt="Ícone - ">
                  <h2 class="h2">Configurações</h2>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/sidebar/meu-painel.png" alt="Ícone - ">
                  <h2 class="h2">Meu Painel</h2>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/sidebar/pessoas.png" alt="Ícone - ">
                  <h2 class="h2">Pessoas</h2>
                </a>
              </li>
            </ul>
          </nav>

        </aside>

        <article id="article-content-advbox">
          <?php the_content(); ?>
          <div class="posts-footer">
            <nav>
              <ul class="ul">
                <li class="posts-prev border">
                  <a href="#">
                    <div class="arrow">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow.svg" alt="Postagem Anterior">
                    </div>
                    <div>
                      <span>Anterior</span>
                      <p>Meta-Acordos da Organização Orgânica</p>
                    </div>
                  </a>
                </li>
                <li class="posts-next border">
                <a href="#">
                    <div>
                      <span>Próximo</span>
                      <p>Padrões</p>
                    </div>
                    <div class="arrow">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow.svg" alt="Próxima Postagem">
                    </div>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="posts-copy">
            <p>Última modificação 5 dias atrás</p>
            <p>Desenvolvido por <a href="https://advbox.com.br/software-juridico">ADVBOX</a></p>
          </div>
        </article>

        <aside id="aside-right"></aside>
      </section>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
