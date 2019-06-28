<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-06-25
 * Time: 09:41
 */
// Header
get_header();
?>

<div class="container">
    <main>
        <div>
            <?php
            // Begin wp loop
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>

                    <article class="bericht">
                        <h2><?php the_title() ?></h2>
                        <?php the_content() ?>
                    </article>
                    <!-- End container -->
                <?php endwhile;
            else :
                echo "<p>no msg</p>";
            endif;
            // End wp loop
            ?>
        </div>
        <!-- Aside -->
        <aside>
            <?php dynamic_sidebar('widget_aside '); ?>
        </aside>
    </main>
</div>
<?php
// Footer
get_footer();
?>
