<?php
function gymfitness_classes_list()
{
    $args = array(
        'post_type' => 'gymfitness_classes'
    );

    $classes = new WP_Query($args);
?>
<ul class="classes-list">
    <?php while ($classes->have_posts()) : $classes->the_post(); ?>
    <li><?php the_title(); ?></li>
    <?php endwhile; ?>
</ul>
<?php }