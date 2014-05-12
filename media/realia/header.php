<?php
$color_class = 'blue';

if (get_theme_mod('general_variant') != '') {
    $general_variant = get_theme_mod('general_variant');
    $classes = explode('-', $name);
    $name = explode('.', $general_variant[0]);

    if (!empty($classes[1])) {
        $color_class = $classes[1];
    }
}

$locations = get_nav_menu_locations();
$main_menu_settings = array(
    'theme_location' => 'main',
    'menu_class' => 'nav',
    'echo' => FALSE
);

if ($locations['main'] == 0) {
    $main_menu_settings['menu'] = 'Main';
}


$anonymous_menu_settings = array(
    'theme_location' => 'anonymous',
    'menu_class' => 'nav nav-pills',
    'echo' => FALSE
);

if ($locations['anonymous'] == 0) {
    $anonymous_menu_settings['menu'] = 'Anonymous';
}

$authenticated_menu_settings = array(
    'theme_location' => 'authenticated',
    'menu_class' => 'nav nav-pills',
    'echo' => FALSE
);

if ($locations['authenticated'] == 0) {
    $authenticated_menu_settings['menu'] = 'Authenticated';
}

echo View::render('helpers/header.twig', array(
    'color_class' => $color_class,
    'main_menu' => wp_nav_menu($main_menu_settings),
    'anonymous_menu' => wp_nav_menu($anonymous_menu_settings),
    'authenticated_menu' => wp_nav_menu($authenticated_menu_settings),
));

