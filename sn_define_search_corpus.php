<?php

/* Add a function to to filter search results corpus */

add_filter( 'pre_get_posts', 'sn_define_search_corpus' );
  function sn_define_search_corpus( $query ) {
    if ( $query->is_search ) {
      $query->set( 'post_type', array( 'X', 'Y', 'Z' ) );
     }
    return $query;
}

/* Use filter only in the frontend, otherwise it interferes with backend search */
if(!is_admin()) {
  add_filter( 'pre_get_posts', 'sn_define_search_corpus' );
}

/*
 * Add this code into your theme's functions.php file.
 * Rename X, Y and Z with the names of the custom post types you want to be added to your the search results.
 * Don't forget to add posts or pages to the array, when you want them to be integrated too.
 */
