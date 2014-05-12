<?php
/**
 * Template Name: Table Template
 */
global $wp_query;

echo View::render('page-table.twig', array(
     'wp_query' => $wp_query,
     'posts' => $wp_query->posts,	
));

