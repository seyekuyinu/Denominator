<?php get_header(); ?>

  <nav class="nav">
  <a class="home icon ss-standard ss-home" href="<?php bloginfo('url'); ?>/blog" title="Home"></a>
  
  
</nav>
  <section class="main" role="main">
    <ul class="article-list">
  
  
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
  <li>
    <article class="article">
      <header class="article-header">
        <h1 class="article-title"><a class="article-link" href="<?php the_permalink();?>"><?php the_title();?></a></h1>
        <time class="article-date"><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></time>
        <p><?php the_excerpt();?></p>
        
        <hr>
      </header>
    </article>
  </li>
  
  
  
  
  <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

    
  
</ul>
  </section>

</body></html>