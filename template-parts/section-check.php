<div class="row">
	<form name="domaincheck" id="domaincheck" method="post" action="" data-toggle="validator" data-delay="100" role="form">
		<div class="form-group col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" data-sr="wait 3s, scale down 40%">
			<label for="domain" class="control-label"><?php echo cs_get_option( 'check-label' ); ?></label>
			<div class="input-group input-group-lg">
				<span class="input-group-addon addon-http">http://</span>
				<input type="text" id="domain" name="domain" class="form-control check-domain" placeholder="wedding name..." data-minlength="5" pattern="^[a-z][-a-z0-9]*$" required>
				<span class="fa fa-lg form-control-feedback" aria-hidden="true"></span>
				<span class="input-group-addon addon-domain">.<?php echo $_SERVER['SERVER_NAME']; ?></span>
			</div>
			<div class="button-group">
				<button id="check" class="btn btn-primary btn-lg" type="submit"><?php echo cs_get_option( 'check-btn' ); ?></button>
				<h6><a href="" data-sr="wait 3.5s, enter top, move 30px"><?php echo cs_get_option( 'check-help' ); ?></a></h6>
			</div>
		</div>
	</form>
</div>
