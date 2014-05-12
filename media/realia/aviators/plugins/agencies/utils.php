<?php

function aviators_agencies_get_list() {
    $query = new WP_Query(array(
        'post_type' => 'agency',
        'posts_per_page' => -1,
    ));

    return $query->posts;
}