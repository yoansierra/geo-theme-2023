<section class="about-home home-section">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-6">

            <?php if (have_rows('about_us_group')) : ?>
            <?php while (have_rows('about_us_group')) : the_row(); ?>
            <!-- <h2 class="title-section text-start"><?php echo pll_e('About US'); ?></h2> -->
            <h2 class="title-section text-start"> <?php the_sub_field('about_us_title'); ?></h2>
            <div><?php the_sub_field('about_us_description'); ?></div>
            <p><a href="#" class="btn btn-outline-primary btn-lg"><?php echo pll_e('Read more'); ?> <i
                     class="bi bi-arrow-right-short"></i></a></p>

            <?php endwhile; ?>
            <?php endif; ?>
         </div>
         <div class="col-md-6 position-relative col-graphics">
            <?php
                $foto_de_about_us = get_field('foto_de_about_us');
                $size = 'img-about-us-home';
                $thumb =  $foto_de_about_us['sizes'][$size];
                ?>
            <?php if ($foto_de_about_us) : ?>
            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($foto_de_about_us['alt']); ?>"
               class="rounded-4 img-fluid" />
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>