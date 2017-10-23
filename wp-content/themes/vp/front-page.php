<?php get_header() ?>
<div class="services-wrap">
    <div class="container">
        <div class="services-header">
            <h2><span>QUALITY SERVICES</span></h2>
            <p>Our firm's strongest in-house areas of specialization are as follows</p>
        </div>
        <div class="services-wrapper">
            <div class="services-container">
                <?php //Home Page Widget Start 
    if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Box1')): ?>
                <?php endif; ?>
            </div>
            <div class="services-container">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Box2')) : ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php if (have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="about-wrapper">
    <div class="container">
        <h2 class="about-title"><?php the_title(); ?></h2>
        <div class="about-container">
            <div class="about-section">
                <p class="about-content">
                    <?php the_content(); ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php else : ?>
<p>
    <?php __('No Posts Found'); ?>
</p>
<?php endif; ?>
<?php get_footer() ?>