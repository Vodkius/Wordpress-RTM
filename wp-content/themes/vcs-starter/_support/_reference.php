<?php

// ACF
$logo = get_field('vcs_h_logo'); // Get ACF field data

// Statements
if($logo): else: endif;

// Other
home_url(); // Home page url
$logo['url']; // Data from array

// Translations
_e('Menu','vcs'); // Without echo
echo __('Menu','vcs'); // With echo

// Elements
get_template_part('elements/site-header'); // Get element part

// Debug
var_dump($logo);exit;

?>