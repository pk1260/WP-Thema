<?php
//header
get_header();
//de wordpress loop

  if( have_posts() ) :
    while (have_posts()) : the_post()
    ?>
    <div class="">
      <a href="<?php the_permalink() ?>"> <h2><?php the_title() ?></h2> </a>
      <<?php the_content()  ?>
    </div>
    <!-- einde container -->
<?php endwhile ;
    else :
      echo "<p>no msg</p>";
  endif;
//einde wordpress loop
//footer
get_footer();
?>
