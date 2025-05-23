<?php get_header(); ?>

<div class="home">
  <div class="breadcrumbs_container">
    <div class="image_header">
      <div class="header_info">
        <div><?php the_title(); ?></div>
      </div>
    </div>
  </div>
</div>

<div class="course">
  <div class="row content-body">
    <div class="col-lg-8">
      <div class="course_tabs_container">
        <div class="tab_panels">
          <div class="tab_panel">
            <div class="tab_panel_title"><?php the_title(); ?></div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4" style="background-color: #2b7b8e33">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>