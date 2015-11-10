<div class="mu_register col-md-10 col-offset-md-1">

<form id="setupform" method="post" action="wp-signup.php" novalidate="novalidate">
	<input type="hidden" name="stage" value="validate-user-signup">
	<input id="signupblog" type="hidden" name="signup_for" value="blog">

	<input type="hidden" name="signup_form_id" value="1269881389">

	<?php wp_nonce_field( 'wedding_signup_forblog', '_signup_form' ); ?>

	<label for="user_name">Username:</label>
	<input name="user_name" type="text" id="user_name" value="" maxlength="60"><br>
	(Must be at least 4 characters, letters and numbers only.)

	<label for="user_email">Email&nbsp;Address:</label>
	<input name="user_email" type="email" id="user_email" value="" maxlength="200"><br>
	We send your registration email to this address. (Double-check your email address before continuing.)

	<label for="password">Password:</label>
	<input name="password_1" type="password" id="password_1" value="" autocomplete="off" maxlength="20"><br>
	(Leave fields blank for a random password to be generated.)

	<label for="password">Confirm Password:</label>
	<input name="password_2" type="password" id="password_2" value="" autocomplete="off" maxlength="20"><br>
	(Type your new password again.)

	<div id="user-avatar-wrap">
		<label for="user-avatar">Your Avatar</label>
		<div id="user-avatar-container">
			<img alt="" src="http://mywedding.pw/assets/mu-plugins/avatars-files//images/default-avatar-96.png" class="avatar avatar-96 photo avatar-default" height="96" width="96">
			<input type="hidden" id="user-avatar-filename" name="user-avatar-file" value="">
			<button id="user-avatar-field" style="display: block; margin-top: 25px; margin-bottom: 25px;">Choose a file</button>
			<input type="file" name="user_avatar" id="user-avatar" style="display: none;">
		</div>
	</div>
	<script>
	jQuery(document).ready(function($) {
		$('#user-avatar').ajaxfileupload({
		  'action': '<?php echo admin_url('admin-ajax.php')?>?action=avatars_upload_signup_avatar',
		  'params': {
			'extra': 'info'
		  },
		  onStart: function() {
			$('#user-avatar-container img').attr('src', 'http://mywedding.pw/assets/mu-plugins/avatars-files/images/ajax-loader.gif');
		  },
		  onComplete: function(response) {
			if ( response.status == false ) {
				alert(response.message);
			}
			else if ( 'upload-error' == response ) {
				alert( 'There was an error uploading the file. Please try with another image' );
			}
			else {
				$('#user-avatar-container img').attr('src', decodeURIComponent( response ) );
				$('#user-avatar-filename').val(response);
			}
		  },
		  onCancel: function() {
			$('#user-avatar-container img').attr('src', '');
		  }
		});

		$( '#user-avatar' ).hide();
		$( '#user-avatar-field' )
			.show()
			.css( 'display', 'block' )
			.css( 'margin-top', '25px' )
			.css( 'margin-bottom', '25px' )
			.on( 'click', function( e ) {
				e.preventDefault();
				$( '#user-avatar' ).trigger( 'click' );
			});
	});
	</script>

	<p class="submit"><input type="submit" name="submit" class="btn btn-primary btn-lg" value="Next"></p>
</form>
</div>
