<?php get_header(); ?>

<main class="main" role="main">
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
      <article <?php post_class(); ?>>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
