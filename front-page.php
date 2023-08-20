<?php
get_header();
$idioma = pll_current_language();


// if($idioma == 'es'){

//     echo 'Contenido en castellano';

//     }

// elseif($idioma == 'en'){

//     echo 'Contenido en Ingles';

// }
get_template_part('template-parts/home-page/hero'); //hero


get_template_part('template-parts/home-page/about'); //hero

//get_template_part('template-parts/home-page/jobsapply'); //hero

get_template_part('template-parts/home-page/services'); //hero

get_template_part('template-parts/home-page/blog'); //hero

get_template_part('template-parts/home-page/contact'); //hero

get_footer();
