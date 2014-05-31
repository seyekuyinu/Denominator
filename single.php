<?php get_header(); ?>



<?php 
$background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>

<div id="cover" style="background-image:url(<?php echo $background[0];?>);">
<?php //the_post_thumbnail('full');    ?>

<div id="cover-writing" ></div>
</div>

<nav class="nav"> <a class="home icon ss-standard ss-home" href="<?php bloginfo('url'); ?>/blog" title="Home"></a> 



<?php $next_post = get_adjacent_post( false, '', false); ?>
 <?php if ( !empty( $next_post ) ): ?>
 	<a href="<?php echo get_permalink($next_post->ID); ?>" class="next"><?php echo $next_post->post_title; ?></a>
 <?php endif; ?>
 
 <?php $next_post = get_adjacent_post( false, '', true); ?>
 <?php if ( !empty( $next_post ) ): ?>
 	<a href="<?php echo get_permalink($next_post->ID); ?>" class="previous"><?php echo $next_post->post_title; ?></a>
 <?php endif; ?>

 


</nav>
<section class="main" role="main">
  <article class="article">
    <header class="article-header">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1 class="article-title typing"><?php the_title(); ?><span>&nbsp;</span></h1>
      <h2 class="article-byline">By Seye Kuyinu</h2>
      <time class="article-date"><?php the_time('F j, Y'); ?></time>
    </header>
    <div class="article-body">
    

     
    
    
    
    <?php the_content();?>
       
    </div>
    
    <!-- Comments -->
                    <?php comments_template(); ?>
    <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


 <footer class="article-footer">
      <p class="text-shares"> Have anything to add? <a class="twitter-share-link" href="http://twitter.com/seye">Tweet</a> at me. </p>
    
    </footer>
  </article>
</section>
</body>
</html>