<?php
add_action('init', function () {
    if (function_exists('pll_register_string')) {
        //pll_register_string( $name, $string, $group, $multiline );
        pll_register_string('read_more', 'Read more');
        pll_register_string('request_service', 'Request service');
        pll_register_string('telephone', 'Telephone');
        pll_register_string('email', 'Email');
        pll_register_string('office_hours', 'Office Hours');
        pll_register_string('our_services', 'Our services');
        pll_register_string('blog', 'Blog');
        pll_register_string('about', 'About US');
        //contact us
        pll_register_string('contact_form', 'Contact Form');
        pll_register_string('contact', 'Contacts');
        pll_register_string('phone', 'Phone');
        pll_register_string('address', 'Dirección');
        pll_register_string('question_contact', 'Do you have a question?');
        pll_register_string('our_office', 'Our offices');

        //pll_register_string('contact_form', 'Formulario de contacto');
        pll_register_string('contact_us', 'Contact Us');
        pll_register_string('call_everyday', 'Call Everyday');
        pll_register_string('call_now', 'Call Now');

        pll_register_string('primary_menu', 'Primary Menu');
        pll_register_string('change_language', 'Change language');
    }
});