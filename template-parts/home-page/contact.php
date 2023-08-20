<?php if (have_rows('contact_us')) : ?>
<?php while (have_rows('contact_us')) : the_row(); ?>
<section class="contact-home">
   <div class="container rounded-4 bg-info container-contact jarallax shadow" data-jarallax data-speed="0.5">
      <div class="row">
         <div class="col-lg-6 offset-lg-3 text-center content">
            <h2 class="mb-25 text-white animated"><?php the_sub_field('titulo'); ?></h2>
            <p class="mb-50 text-white animated"><?php the_sub_field('description'); ?></p>
            <div class="animated">
               <!-- Button-->
               <button type="button" class="btn btn-success px-5 btn-lg rounded-5" data-bs-toggle="modal"
                  data-bs-target="#quickContact">
                  <i class="bi bi-telephone-fill"></i> <?php echo pll_e('Contact us'); ?>
               </button>
            </div>
         </div>
      </div>

   </div>
</section>


<!-- Modal -->
<div class="modal fade" id="quickContact" tabindex="-1" aria-labelledby="quickContactLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="modal-title fs-5" id="quickContactLabel"><?php echo pll_e('Formulario de contacto'); ?></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <?php the_sub_field('formulario_de_contacto'); ?>
         </div>
      </div>
   </div>
</div>
<?php endwhile; ?>
<?php endif; ?>