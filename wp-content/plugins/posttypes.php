<?php
/**
* Plugin Name: Custom Post Types
* Description: Um plugin para posts personalizados
* Version: 0.1
* Author: Allan Lima 
* License: GPL2
*/

/*Custom Post Types is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Custom Post Types is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Custom Post Types.
*/

function my_custom_posttypes() {

    //Notícias Post Type
	$labels = array(
        'name'               => 'Notícias',
        'singular_name'      => 'Notícia',
        'menu_name'          => 'Notícias',
        'name_admin_bar'     => 'Notícia',
        'add_new'            => 'Adicionar Notícia',
        'add_new_item'       => 'Adicionar nova Notícia',
        'new_item'           => 'Nova Notícia',
        'edit_item'          => 'Editar Notícia',
        'view_item'          => 'Visualizar Notícia',
        'all_items'          => 'Todas as Notícias',
        'search_items'       => 'Procurar Notícias',
        'parent_item_colon'  => 'Parent Notícias:',
        'not_found'          => 'Nenhuma Notícia encontrada.',
        'not_found_in_trash' => 'Nenhuma Notícia encontrada na lixeira.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-format-aside',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'noticias' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'taxonomies'         => array('post_tag'),
        'supports'           => array( 'title', 'editor', 'thumbnail', 'post-formats' )
    );
	register_post_type('noticias', $args);

    //Equipe Post Type
    $labels = array(
        'name'               => 'Equipe',
        'singular_name'      => 'Equipe',
        'menu_name'          => 'Equipe',
        'name_admin_bar'     => 'Equipe',
        'add_new'            => 'Adicionar Membro de Equipe',
        'add_new_item'       => 'Adicionar novo Membro de Equipe',
        'new_item'           => 'Novo Membro de Equipe',
        'edit_item'          => 'Editar Membro de Equipe',
        'view_item'          => 'Visualizar Membro de Equipe',
        'all_items'          => 'Todos os Membros da Equipe',
        'search_items'       => 'Procurar Membro da Equipe',
        'parent_item_colon'  => 'Parent Membro de Equipe:',
        'not_found'          => 'Nenhum Membro encontrado.',
        'not_found_in_trash' => 'Nenhum Membro encontrado na lixeira.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-universal-access',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'equipe' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title',  'thumbnail', 'post-formats', 'custom-fields' )
    );
    register_post_type('equipe', $args);

    //Publicacoes Post Type
    $labels = array(
        'name'               => 'Publicações',
        'singular_name'      => 'Publicações',
        'menu_name'          => 'Publicações',
        'name_admin_bar'     => 'Publicações',
        'add_new'            => 'Postar Publicação',
        'add_new_item'       => 'Postar nova Publicação',
        'new_item'           => 'Nova Publicação',
        'edit_item'          => 'Editar Publicação',
        'view_item'          => 'Visualizar Publicação',
        'all_items'          => 'Todas as Publicações',
        'search_items'       => 'Procurar Publicações',
        'parent_item_colon'  => 'Parent Publicação:',
        'not_found'          => 'Nenhuma Publicação encontrada.',
        'not_found_in_trash' => 'Nenhuma Publicação encontrada na lixeira.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-universal-access',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'publicacoes' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'taxonomies'         => array('category'),
        'supports'           => array( 'title', 'editor', 'thumbnail', 'post-formats', 'custom-fields' )
    );
    register_post_type('publicacoes', $args);

    //Artigos Post Type
    $labels = array(
        'name'               => 'Artigos',
        'singular_name'      => 'Artigos',
        'menu_name'          => 'Artigos',
        'name_admin_bar'     => 'Artigos',
        'add_new'            => 'Postar Artigo',
        'add_new_item'       => 'Postar novo Artigo',
        'new_item'           => 'Novo Artigo',
        'edit_item'          => 'Editar Artigo',
        'view_item'          => 'Visualizar Artigo',
        'all_items'          => 'Todos os Artigos',
        'search_items'       => 'Procurar Artigos',
        'parent_item_colon'  => 'Parent Artigo:',
        'not_found'          => 'Nenhum Artigo encontrado.',
        'not_found_in_trash' => 'Nenhum Artigo encontrado na lixeira.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-format-aside',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'artigos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'taxonomies'         => array('post_tag'),
        'supports'           => array( 'title', 'editor', 'thumbnail', 'post-formats', 'custom-fields' )
    );
    register_post_type('artigos', $args);

    //Palestras Post Type
    $labels = array(
        'name'               => 'Palestras',
        'singular_name'      => 'Palestras',
        'menu_name'          => 'Palestras',
        'name_admin_bar'     => 'Palestras',
        'add_new'            => 'Postar Palestra',
        'add_new_item'       => 'Postar nova Palestra',
        'new_item'           => 'Nova Palestra',
        'edit_item'          => 'Editar Palestra',
        'view_item'          => 'Visualizar Palestra',
        'all_items'          => 'Todas as Palestras',
        'search_items'       => 'Procurar Palestras',
        'parent_item_colon'  => 'Parent Palestra:',
        'not_found'          => 'Nenhuma Palestra encontrada.',
        'not_found_in_trash' => 'Nenhuma Palestra encontrada na lixeira.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-format-video',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'palestras' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'taxonomies'         => array('post_tag'),
        'supports'           => array( 'title', 'editor', 'thumbnail', 'post-formats', 'custom-fields' )
    );
    register_post_type('palestras', $args);
}

add_action('init', 'my_custom_posttypes');

function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
   my_custom_posttypes();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );