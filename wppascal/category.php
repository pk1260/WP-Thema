<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-06-25
 * Time: 08:43
 */
// Header
get_header();
?>

<div class="container">
    <main>
        <div>
            <h2>De berichten van de categorie <em class="zoek-term-in-kop"><?php single_cat_title(); ?></em>:</h2>
            <?php
            // Begin wp loop
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>

                    <article class="bericht">
                        <h3><?php the_title() ?></h3>
                        <?php the_content() ?>
                    </article>

                    <div class="postmetaData">
                        Geplaasts door:
                        <?php the_author(); ?>
                        <br>
                        op:
                        <?php the_date(); ?>
                        <br>
                        in de catogorie:
                        <?php the_category();
                        echo get_the_tag_list('<br>Tags: ',' | ', '<hr>'  )
                        ?>
                    </div>
                    <!-- End container -->
                <?php endwhile;
            else :
                echo "<p>Er zijn geen berichten gevonden voor deze categorie</p>";
            endif;
            // End wp loop
            comments_template("", true)
            ?>
        </div>
        <!-- Aside -->
        <aside>
            <?php dynamic_sidebar('widget_aside '); ?>
            <h4>Vorig bericht</h4>
            <?php
            $previous_post = get_previous_post();
            if (!empty($previous_post)): ?>
                <a href="<?php echo esc_url(get_permalink($previous_post->ID)); ?>"><?php echo esc_attr($previous_post->post_title); ?></a>
            <?php endif; ?>
            <h4>Volgende bericht</h4>
            <?php
            $next_post = get_next_post();
            if (!empty($next_post)): ?>
                <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"><?php echo esc_attr($next_post->post_title); ?></a>
            <?php endif; ?>
        </aside>
    </main>
</div>
<?php
// Footer
get_footer();
?>
