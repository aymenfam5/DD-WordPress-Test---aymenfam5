<?php
get_header();

//this will show post content
if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="deer-test">
        <!-- title of post -->
        <h1><?php the_title(); ?></h1>
        <!-- start date and end date of post -->
        <div class="meta-info">
            <p><strong>Start Date:</strong> <?php the_field('start_date'); ?></p>
            <p><strong>End Date:</strong> <?php the_field('end_date'); ?></p>
        </div>
        <!-- description of post -->
        <div class="description"><strong>Description:</strong> <?php the_field('description'); ?></div>
        <!-- cover image of post -->
        <?php if (get_field('cover_image')): ?>
            <img src="<?php echo esc_url(get_field('cover_image')['url']); ?>" alt="<?php echo esc_attr(get_field('cover_image')['alt']); ?>" />
        <?php endif; ?>
        <!--Appication link of post -->
        <?php if (get_field('application_link')): ?>
            <p><a href="<?php echo esc_url(get_field('application_link')['url']); ?>" target="_blank">Application Link</a></p>
        <?php endif; ?>
    </div>
<?php endwhile; endif;
get_footer();
