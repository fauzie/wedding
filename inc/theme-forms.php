<?php

function wedding_validate_blog_form() {
	$user = '';
	if ( is_user_logged_in() )
		$user = wp_get_current_user();

	return wpmu_validate_blog_signup($_POST['blogname'], $_POST['blog_title'], $user);
}
