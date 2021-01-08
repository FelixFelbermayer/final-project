<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$context = Timber::context();
$context['posts'] = Timber::get_posts(array('category_name' => 'news','posts_per_page' => 3));
$context['ueber'] = Timber::get_posts(array('category_name' => 'ueber','posts_per_page' => 1));
$context['kontakt'] = Timber::get_posts(array('category_name' => 'kontakt'));

$post = new Timber\Post();
if (isset($post->hero_img) && strlen($post->hero_img)){
	$post->hero_img = new Timber\Image($post->hero_img);
}
$context['post'] = $post;


Timber::render( 'index.twig', $context );

