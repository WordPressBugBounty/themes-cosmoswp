<?php
defined( 'ABSPATH' ) || exit;

$theme_directory = get_template_directory();
$file_path       = $theme_directory . '/patterns/landing.php';

ob_start();
require $file_path;
$file_contents = ob_get_clean();

return array(
	'home' => array(
		'post_title'   => esc_html__( 'Home', 'cosmoswp' ),
		'post_content' => $file_contents,
		'template'     => 'page-templates/template-full-width.php',
	),
);
