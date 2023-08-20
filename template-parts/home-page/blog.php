<section class="blog home-section">
    <div class="container">
        <div class="row">
            <h2 class="order-1 col-12 title-section"><?php the_field( 'title_blog' ); ?></h2>
            <div class="order-0 col-12 text-center"><span class="subtitle-section">Blog</span></div>
            <?php
            $cantidad = 3;
            // $cat = "noticias";
            // $idioma = pll_current_language();
            // if ($idioma == 'es') {
            //     $cat = "noticias";
            // } elseif ($idioma == 'en') {
            //     $cat = "news";
            // }
            $NoticiasHome = new WP_Query('category_name=News&posts_per_page=' . $cantidad . '&orderby=post_date&order=DESC');
            $item = 1;
            while ($NoticiasHome->have_posts()) : $NoticiasHome->the_post();
                switch ($item) {
                    case 1:
                        $delay = '50';
                        $animation = 'fade-up';
                        break;
                    case 2:
                        $delay = '100';
                        $animation = 'fade-up';
                        break;
                    case 3:
                        $delay = '150';
                        $animation = 'fade-up';
                        break;
                    default:
                        $delay = '60';
                }


                //Obtener el tipo de post
                $post_type = get_post_format();

                $thumbID = get_post_thumbnail_id($post->ID);
                if ($thumbID) {
                    $imgDestacada = wp_get_attachment_image_src($thumbID, 'img-blog-home');
                }
            ?>

              


                <div class="col-md-4 order-3">
                    <div class="card position-relative rounded-0 card-new-home">
                        <div class="blog-post-category">
                            <span><?php $idioma = pll_current_language(); if($idioma == 'es'){ echo 'Noticias'; } elseif($idioma == 'en'){ echo 'News'; }?></span>
                        </div>
                        <img src="<?php echo $imgDestacada['0']; ?>" class="card-img-top rounded-0" alt="<?php the_title(); ?>">
                        <div class="card-body">
                            <h3 class="card-title ellipsis-2-lines"><a href="<?php the_permalink( );?>"><?php the_title(); ?></a></h3>
                            <p class="card-text"><?php excerpt('12');?></p>
                            <a href="<?php the_permalink( );?>" class="btn btn-primary"><?php  echo pll_e('Read more');?> </a>
                        </div>
                    </div>

                    <?php $select_category = get_field( 'select_category' ); ?>
                    <?php $term = get_term_by( 'id', $select_category, 'category' ); ?>
                    <?php if ( $term ) : ?>
                        <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
                    <?php endif; ?>


                </div>

            <?php $item++;
            endwhile;
            wp_reset_postdata(); // reset the query  
            ?>
        </div>
    </div>
</section>