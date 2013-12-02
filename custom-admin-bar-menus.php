<?php
/*
* Plugin Name: Custom Admin Bar Menus
* Plugin URI: http://urre.me
* Description: Removes/Adds custom links to admin bar
* Version: 1.0
* Author: @Urre
* Author URI: http://urre.me
* License: GPL
*/

function custom_admin_bar_render() {
    global $wp_admin_bar;

    # Remove some menus
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('wpseo-menu');

    # Ex. add quick link to media
    $wp_admin_bar->add_menu( array(
        'parent' => 'new-content',
        'id' => 'new_media',
        'title' => __('Media'),
        'href' => admin_url( 'media-new.php')
        ) );
    # Ex. Add quick link to Page tree view (I'm using http://wordpress.org/plugins/cms-tree-page-view/)
    $wp_admin_bar->add_menu( array(
        'id' => 'tree_view',
        'title' => __('☰ Trädvy sidor'),
        'href' => admin_url( 'edit.php?post_type=page&page=cms-tpv-page-page')
        ) );
    # Ex. Add link to menus
    $wp_admin_bar->add_menu( array(
        'id' => 'menus',
        'title' => __('☷ Menyer'),
        'href' => admin_url( 'nav-menus.php')
        ) );
    # Ex. Add link to plugins
    $wp_admin_bar->add_menu( array(
        'id' => 'tillagg',
        'title' => __('Tillägg'),
        'href' => admin_url( 'plugins.php')
        ) );
}

add_action( 'wp_before_admin_bar_render', 'custom_admin_bar_render' );
?>