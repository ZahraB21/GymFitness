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
    <li class="gym-class card gradient">
        <?php the_post_thumbnail('mediumSize'); ?>
        <div class="card-content">
            <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
            </a>
        </div>
    </li>
    <?php endwhile; ?>
</ul>
<?php }