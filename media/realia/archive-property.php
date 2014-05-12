<?php
wp_reset_query();

global $wp_query;

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$wp_query = new WP_Query();

$properties = array(
    'post_type' => 'property',
    'posts_per_page' => aviators_settings_get_value('properties', 'properties', 'per_page'),
    'paged' => $paged,
    'tax_query' => array(),
    'meta_query' => array(),
);

if (!empty($_GET['filter_order'])) {
    $properties['order'] = $_GET['filter_order'];
} else {
    $properties['order'] = 'ASC';
}

if (!empty($_GET['filter_sort_by'])) {
    if ($_GET['filter_sort_by'] == 'price') {
        $properties['orderby'] = 'meta_value_num';
        $properties['meta_key'] = '_property_price';
    }

    if ($_GET['filter_sort_by'] == 'published') {
        $properties['orderby'] = 'date';
    }
} else {
    $properties['orderby'] = 'meta_value_num';
    $properties['meta_key'] = '_property_price';
}

if (!empty($_GET['filter_location'])) {
    $properties['tax_query'][] = array(
        'taxonomy' => 'locations',
        'field' => 'id',
        'terms' => $_GET['filter_location'],
        'operator' => 'IN',
    );
}

if (!empty($_GET['filter_type'])) {
    $properties['tax_query'][] = array(
        'taxonomy' => 'property_types',
        'field' => 'id',
        'terms' => $_GET['filter_type'],
        'operator' => 'IN',
    );
}

if (!empty($_GET['filter_bedrooms'])) {
    $properties['meta_query'][] = array(
        'key' => '_property_bedrooms',
        'value' => $_GET['filter_bedrooms'],
        'compare' => '>=',
        'type' => 'numeric',
    );
}

if (!empty($_GET['filter_bathrooms'])) {
    $properties['meta_query'][] = array(
        'key' => '_property_bathrooms',
        'value' => $_GET['filter_bathrooms'],
        'compare' => '>=',
        'type' => 'numeric',
    );
}

if (!empty($_GET['filter_contract_type']) && is_array($_GET['filter_contract_type'])) {
    $types = array();

    foreach($_GET['filter_contract_type'] as $type) {
        $types[] = $type;
    }

    $properties['meta_query'][] = array(
        'key' => '_property_contract_type',
        'value' => $types,
        'compare' => 'IN',
    );
}

if (!empty($_GET['filter_price_from']) && !empty($_GET['filter_price_to'])) {
    $properties['meta_query'][] = array(
        'key' => '_property_price',
        'value' => array($_GET['filter_price_from'], $_GET['filter_price_to']),
        'type' => 'numeric',
        'compare' => 'BETWEEN'
    );
} elseif (!empty($_GET['filter_price_from'])) {
    $properties['meta_query'][] = array(
        'key' => '_property_price',
        'value' => $_GET['filter_price_from'],
        'type' => 'numeric',
        'compare' => '>='
    );
} elseif (!empty($_GET['filter_price_to'])) {
    $properties['meta_query'][] = array(
        'key' => '_property_price',
        'value' => $_GET['filter_price_to'],
        'type' => 'numeric',
        'compare' => '<='
    );
}

$wp_query->query($properties);

echo View::render('archive-property.twig', array(
    'wp_query' => $wp_query,
    'properties' => _aviators_properties_prepare($wp_query),
));
