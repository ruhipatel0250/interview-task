<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 
get_header(); ?>
 
 <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="slider-container">

            <?php

// Check rows exists.
if( have_rows('gallery') ):

    // Loop through rows.
    while( have_rows('gallery') ) : the_row();?>
      <div class="slide fade">
        <?php $image = get_sub_field('images'); ?>
        <img class="slide-image" src="<?php echo esc_url($image['url']); ?>">
        <div class="slide-content">
      <h3 class="slide-title"><?php the_title(); ?></h3>
      
      <a href="<?php the_field('button_link_to_project'); ?>" class="slide-btn">
        View Project <ion-icon name="arrow-forward-circle"></ion-icon>
      </a>
    </div>
      </div>
   <?php
    endwhile;
endif;?>
  <!-- Next and previous buttons -->
  <div class="slider-nav">
    <a class="slider-nav-btn" onclick="plusSlides(-1)">
      <ion-icon name="caret-back-outline"></ion-icon>
    </a>
    <a class="slider-nav-btn" onclick="plusSlides(1)">
      <ion-icon name="caret-forward-outline"></ion-icon>
    </a>
  </div>

 
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <div class="main-post-divd">
    <div class="left-side">
    <?php $description = the_field('description');?>
    </div>
    <div class="right-side">
    <div class="inner-main-div">
    <div class="title-project">
        Portfolio Detail:
    </div>
    <div class="project-date">
    project Completion Date: <span class="diff-fonts"><?php $date = the_field('date_of_project_completed');?></span>
    </div>
    <div class="client-name">
    Client Name: <span class="diff-fonts"><?php $name = the_field('client_name');?></span>
    </div>
    <div class="project_category">
    Project Category: <span class="diff-fonts"> <?php $category = the_field('project_category');?></span>
    </div>
    </div>
    </div>
    </div>

            <?php endwhile; ?>
 
<?php get_footer(); ?>