<?php get_header() ?>

<?php
    $args = array(
        'post_type' => 'post'
    );

    $post_query = new WP_Query($args);
if($post_query->have_posts() ) {
  while($post_query->have_posts() ) {
    $post_query->the_post();
    ?>
    <h2><?php the_title(); ?></h2>
    <p> <?php the_content(); ?> </p>
    <?php
  }
}
?>

<?php get_footer()?>