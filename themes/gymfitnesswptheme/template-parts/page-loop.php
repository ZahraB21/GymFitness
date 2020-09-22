<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1 class="text-center text-primary"><?php the_title(); ?></h1>
<?php
        if (has_post_thumbnail()) :
            echo the_post_thumbnail('blog', array('class' => 'featured-image'));
        else :
            echo "<p>Has no image</p>";
        endif;
        ?>
<p><?php the_content(); ?></p>

<?php endwhile;
endif; ?>