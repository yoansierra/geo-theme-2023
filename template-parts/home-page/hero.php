<section class="hero jarallax position-relative" data-jarallax data-speed="0.5">

   <!--Imagen Parallax  -->
   <?php $imagen_del_hero = get_field('imagen_del_hero'); ?>
   <?php if ($imagen_del_hero) : ?>
   <img src="<?php echo esc_url($imagen_del_hero['url']); ?>" alt="<?php echo esc_attr($imagen_del_hero['alt']); ?>"
      class="jarallax-img" />
   <?php endif; ?>

   <div class="container d-flex">
      <div class="row align-items-center">
         <article class="text-white col-md-8">
            <?php if (have_rows('hero')) : ?>
            <?php while (have_rows('hero')) : the_row(); ?>
            <!-- titulo del hero -->
            <?php if (get_sub_field('titulo_hero')) { ?>
            <h1 class="site-title display-1 fw-bold"><?php the_sub_field('titulo_hero'); ?></h1>
            <?php } else { ?>
            <h1 class="site-title display-1 fw-bold"><?php bloginfo('name'); ?></h1>
            <?php } ?>
            <!-- Descripción del hero -->
            <?php if (get_sub_field('descripcion_hero')) { ?>
            <p class="site-description lead"><?php the_sub_field('descripcion_hero'); ?></p>
            <?php } else { ?>
            <?php
                     $geotheme2023_description = get_bloginfo('description', 'display');
                     if ($geotheme2023_description || is_customize_preview()) :
                     ?>
            <p class="site-description lead"><?php echo $geotheme2023_description; ?></p>
            <?php endif; ?>
            <?php } ?>

            <?php $boton = get_sub_field('boton'); ?>
            <?php if ($boton) { ?>
            <!-- <p class="mt-4">
                                <a href="<?php echo esc_url($boton['url']); ?>" class="btn btn-outline-light btn-lg px-2 px-md-5" target="<?php echo esc_attr($boton['target']); ?>">
                                    <?php echo esc_html($boton['title']); ?>
                                </a>
                            </p> -->

            <?php } else { ?>
            <!-- <p class="mt-4">
                                <a href="#" class="btn btn-outline-light btn-lg px-2 px-md-5">
                                    <?php echo pll_e("Read more"); ?>
                                </a>
                            </p> -->
            <?php } ?>
            <?php endwhile; ?>
            <?php endif; ?>

            <hr class="my-5">

            <div class="text-center text-md-start">
               <div class="row justify-content-center justify-content-md-start ">
                  <div class="col-md-4">
                     <button data-bs-toggle="modal" data-bs-target="#quickContact"
                        class="btn btn-success btn-lg w-100 rounded-pill text-white fs-5 fw-semibold"><i
                           class="bi bi-patch-plus-fill"></i> <?php echo pll_e("Contact Us"); ?>
                     </button>
                  </div>
                  <div class="col-md-4 d-block d-sm-none">
                     <a href="tel:+18639404938"
                        class="btn btn-outline-success btn-lg w-100 rounded-pill text-white fs-5 fw-semibold mt-2"> <i
                           class="bi bi-telephone-fill  text-center"></i> (863) 940-4938</a>
                  </div>
                  <div class="col-md-4 mt-4 mt-md-0 d-none d-sm-block">
                     <div class="d-flex position-relative">
                        <div class="flex-shrink-0 me-3 border rounded-circle icon-phone-hero"
                           style="width: 50px; height:50px"><i class="bi bi-telephone-fill  text-center"></i></div>
                        <div class="text-button">
                           <small class="text-success"
                              style="letter-spacing: 2px;"><?php echo pll_e("Call Everyday"); ?></small>
                           <h5 class="mt-0">(863) 940-4938</h5>
                           <a href="tel:+18639404938" class="stretched-link"><span
                                 class="visually-hidden"><?php echo pll_e("Llamar ahora"); ?></span></a>
                        </div>
                     </div>
                  </div>
               </div>

            </div>





            <!-- boton de accion -->

         </article>
      </div>
   </div>

</section>





<?php if (have_rows('quick_contacts')) : ?>
<?php while (have_rows('quick_contacts')) : the_row(); ?>
<div class="contactos-hero d-none">
   <div class="container content py-5">
      <div class="row text-center text-white">
         <div class="col-md-4 ">
            <?php if (have_rows('column_1')) : ?>
            <?php while (have_rows('column_1')) : the_row(); ?>
            <span class="display-5"><i class="bi bi-<?php the_sub_field('icon'); ?>"></i></span>
            <h3><?php the_sub_field('titulo'); ?></h3>
            <p><?php the_sub_field('content'); ?></p>
            <?php endwhile; ?>
            <?php endif; ?>
         </div>
         <div class="col-md-4 border-start border-end border-success">
            <?php if (have_rows('column_2')) : ?>
            <?php while (have_rows('column_2')) : the_row(); ?>
            <span class="display-5"><i class="bi bi-<?php the_sub_field('icon'); ?>"></i></span>
            <h3><?php the_sub_field('titulo'); ?></h3>
            <p><?php the_sub_field('content'); ?></p>
            <?php endwhile; ?>
            <?php endif; ?>
         </div>
         <div class="col-md-4 ">
            <?php if (have_rows('column_3')) : ?>
            <?php while (have_rows('column_3')) : the_row(); ?>
            <span class="display-5"><i class="bi bi-<?php the_sub_field('icon'); ?>"></i></span>
            <h3><?php the_sub_field('titulo'); ?></h3>
            <p><?php the_sub_field('content'); ?></p>
            <?php endwhile; ?>
            <?php endif; ?>
         </div>
      </div>
   </div>
</div>


<?php endwhile; ?>
<?php endif; ?>