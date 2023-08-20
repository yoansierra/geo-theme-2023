<section class="services home-section">

   <div class="container">
      <div class="row">
         <?php if (have_rows('servicios')) : ?>
            <?php while (have_rows('servicios')) : the_row(); ?>
               <h2 class="order-1 col-12 title-section mb-5"><?php the_sub_field('services_title'); ?></h2>
               <div class="order-0 col-12 text-center"><span class="subtitle-section"><?php echo pll_e('Our services'); ?></span></div>
               <?php if (have_rows('content_services')) : ?>
                  <?php while (have_rows('content_services')) : the_row(); ?>
                     <?php if (have_rows('loop_services')) : ?>
                        <?php while (have_rows('loop_services')) : the_row(); ?>
                           <!-- inicio -->

                           <div class="col-md-6 order-2">
                              <div class="card mb-3">
                                 <div class="row g-0">
                                    <div class="col-md-4">
                                       <?php $imagen_del_servicio = get_sub_field('imagen_del_servicio');
                                       $size = 'img-services-home';
                                       $thumb =  $imagen_del_servicio['sizes'][$size]; ?>
                                       <?php if ($imagen_del_servicio) : ?>
                                          <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($imagen_del_servicio['alt']); ?>" class="img-fluid rounded-start" />
                                       <?php endif; ?>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="card-body">
                                          <?php if (have_rows('info_del_servicio')) : ?>
                                             <?php while (have_rows('info_del_servicio')) : the_row(); ?>
                                                <h5 class="card-title mb-3"><?php the_sub_field('name'); ?></h5>
                                                <p class="card-text ellipsis-3-lines"> <?php the_sub_field('description'); ?></p>
                                                <p><a href="#" class="btn-more"><?php echo pll_e('Read more'); ?> <i class="bi bi-arrow-right-short"></i> </a></p>
                                             <?php endwhile; ?>
                                          <?php endif; ?>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>


                           <!-- fin -->
                        <?php endwhile; ?>
                     <?php else : ?>
                        <?php // No rows found 
                        ?>
                     <?php endif; ?>
                  <?php endwhile; ?>
               <?php endif; ?>


               <?php $mas_servicios = get_sub_field('mas_servicios'); ?>
               <?php if ($mas_servicios) : ?>
                  <div class="col-12 order-3 text-center mt-5">
                     <a href="<?php echo esc_url($mas_servicios); ?>" class="btn btn-outline-primary btn-lg px-5">Read More</a>
                  </div>
               <?php endif; ?>

            <?php endwhile; ?>
         <?php endif; ?>
      </div>
   </div>
</section>