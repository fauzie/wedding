<?php

$user = wp_get_current_user();
$step = get_query_var( 'step', 0 );
$vali = get_query_var( 'validate', '' );

if ( isset($_POST['validate-user-signup']) ) {

if( wpmu_validate_user_signup($_POST['user_name'], $_POST['user_email']) ){}

}

if( $vali == '' ): ?>

<div class="mu_register col-md-10 col-md-offset-1">

<?php
/**
 * Fires before the site sign-up form.
 *
 * @since 3.0.0
 */
do_action( 'before_signup_form' );

if ( $step <= 1 ): ?>

<form id="setupform" method="post" action="" novalidate="novalidate" class="form-horizontal" data-toggle="validator" role="form">
	<input type="hidden" name="stage" value="validate-user-signup">
	<input id="signupblog" type="hidden" name="signup_for" value="blog">
	<?php
	/** This action is documented in wp-signup.php */
	do_action( 'signup_hidden_fields', 'validate-user' );
	?>

	<div class="form-group clearfix">
		<div class="col-md-6">
			<input name="user_name" type="text" class="form-control" value="" maxlength="60" autocomplete="off" placeholder="<?php _e('Username','wedding') ?>" pattern="^[A-Za-z][A-Za-z0-9]{4,20}$" data-minlength="4" required>
			<span class="help-block"><?php _e('Must be at least 4 characters, letters and numbers only.', 'wedding') ?></span>
			<span class="fa fa-lg form-control-feedback" aria-hidden="true"></span>
		</div>

		<div class="col-md-6">
			<input name="user_email" type="email" class="form-control" value="" maxlength="200" autocomplete="off" placeholder="<?php _e('Email Address','wedding') ?>" required>
			<span class="help-block"><?php _e('We send your registration email to this address.', 'wedding') ?></span>
			<span class="fa fa-lg form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>

	<?php
	/**
	 * Fires at the end of the user registration form on the site sign-up form.
	 *
	 * @since 3.0.0
	 *
	 * @param array $errors An array possibly containing 'user_name' or 'user_email' errors.
	 */
	do_action( 'signup_extra_fields' ); ?>

	<?php if( isset($_REQUEST['domain']) ) { ?>
	<div class="col-md-6">
		<h3><?php _e('Your Wedding Site Address','wedding') ?></h3>
		<p class="lead">http://<?php echo $_REQUEST['domain'] . '.' . $_SERVER['SERVER_NAME'] ?>
			<a href="#" id="extend">
			<span class="label label-primary"><?php _e('FREE','wedding') ?></span>
			<span class="label label-warning hide"><?php _e('Extend','wedding') ?>?</span>
			<input type="hidden" id="premium" name="premium" value="0">
			</a>
		</p>
		<div class="form-group" style="margin-left:0;margin-right:0">
			<input name="blog_title" type="text" class="form-control" maxlength="200" placeholder="<?php _e('Site Title','wedding') ?>" data-minlength="5" required>
			<span class="help-block"><?php _e('Give this site a readable name.', 'wedding') ?></span>
			<span class="fa fa-lg form-control-feedback" aria-hidden="true"></span>
		</div>
		<input type="hidden" name="blogname" value="<?php echo esc_attr($_REQUEST['domain']) ?>">
		<script>
		jQuery(document).ready(function($) {
			$('#extend').hover(function(){
				var span = $(this).find('span');
				$(span).each(function(){
					$(this).toggleClass('hide');
				})
			}).click(function(e){
				$(this).find('.label-primary').text('EXTEND').removeClass('hide');
				$(this).find('.label-warning').remove();
				$(this).find('#premium').val('1');
				$(this).unbind('hover');
				e.preventDefault();
			});
		});
		</script>
	</div>
	</div>
	<?php } ?>

	<div class="form-group text-center clearfix submit">
		<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="<?php _e('Next Step','wedding') ?>">
	</div>
</form>

<?php elseif( $step == 2 ): ?>



<?php endif; //step ?>

<?php
/**
 * Fires after the sign-up forms, before wp_footer.
 *
 * @since 3.0.0
 */
do_action( 'after_signup_form' ); ?>
</div>

<?php endif; //$vali ?>
