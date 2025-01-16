<?php
defined( 'ABSPATH' ) || exit;

$theme_directory = get_template_directory();
$file_path       = $theme_directory . '/patterns/landing.php';

ob_start();
require $file_path;
$file_contents = ob_get_clean();

return array(
	'home'  => array(
		'post_title'   => 'Home',
		'post_content' => $file_contents,
		'template'     => 'page-templates/template-full-width.php',
	),
	'about' => array(
		'post_title'   => 'About Us',
		'post_content' => 'This is a demo about page.',
	),
);
