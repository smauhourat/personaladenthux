<?php
/**
* Theme Name: Personal Adhentuxxx
* Author: Adhentux
* Author URI: https://www.adhentux.com/
* Description: Sitio Personal LandPage
* Version: 1.0
* License: GNU General Public License v3 or later
* License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

/* FUENTE
https://www.hostinger.com.ar/tutoriales/crear-tema-wordpress?ppc_campaign=google_search_generic_hosting_all&bidkw=defaultkeyword&lo=1000073&gad_source=1&gclid=Cj0KCQiA5rGuBhCnARIsAN11vgS-_7AzEc6UcjtCHs5-5uh8ckPQFlaL8vr0f3mjB5PjD9xLmY1PKzUaAhkYEALw_wcB
*/
?>

<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-loop">
        <header>
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          By: <?php the_author(); ?>
        </header>
        <?php the_excerpt(); ?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>Sorry, no posts were found!</p>
      </article>
<?php endif; ?>
  </section><?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>

