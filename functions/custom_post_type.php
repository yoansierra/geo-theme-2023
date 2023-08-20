<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: Servicios.
	 */

	$labels = [
		"name" => esc_html__( "Servicios", "geotheme2023" ),
		"singular_name" => esc_html__( "servicio", "geotheme2023" ),
		"all_items" => esc_html__( "Todos los servicios", "geotheme2023" ),
		"add_new" => esc_html__( "Nuevo servicio", "geotheme2023" ),
		"add_new_item" => esc_html__( "Agregar nuevo servicio", "geotheme2023" ),
		"edit_item" => esc_html__( "Editar servicio", "geotheme2023" ),
		"new_item" => esc_html__( "Nuevo servicio", "geotheme2023" ),
		"view_item" => esc_html__( "Ver servicio", "geotheme2023" ),
		"view_items" => esc_html__( "Ver servicios", "geotheme2023" ),
		"search_items" => esc_html__( "Buscar servicios", "geotheme2023" ),
		"not_found" => esc_html__( "No se encuentra el servicio", "geotheme2023" ),
		"not_found_in_trash" => esc_html__( "No se han encontrado el  servicio en la papelera", "geotheme2023" ),
		"featured_image" => esc_html__( "Imagen del servicio", "geotheme2023" ),
		"set_featured_image" => esc_html__( "Establecer imagen del servicio", "geotheme2023" ),
		"remove_featured_image" => esc_html__( "Eliminar foto del servicio", "geotheme2023" ),
		"use_featured_image" => esc_html__( "Usa esta imagen como destacada para el servicio", "geotheme2023" ),
		"archives" => esc_html__( "Archivo de servicios", "geotheme2023" ),
	];

	$args = [
		"label" => esc_html__( "Servicios", "geotheme2023" ),
		"labels" => $labels,
		"description" => "Services of Care and Life LLC.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "services", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-universal-access-alt",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "page-attributes" ],
		"show_in_graphql" => false,
	];

	register_post_type( "services", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
