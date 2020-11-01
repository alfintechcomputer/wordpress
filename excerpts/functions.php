/* sets the excerpt length */
function customize_the_excerpt_length() {
	return 30;
}
add_filter('excerpt_length','customize_the_excerpt_length');