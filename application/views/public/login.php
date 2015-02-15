
<style>
.vertical-center {
	min-height: 100%; /* Fallback for browsers do NOT support vh unit */
	min-height: 100vh; /* These two lines are counted as one :-)       */
	display: flex;
	align-items: center;
}
</style>

<div style="height:100%" class="login login-background">
	<div class="row large-collapse vertical-center" style="padding-top: 4em;">
		<div class="large-6 large-centered columns">
				<div class="row">
				<div class="large-12 columns">
					<div class="panel login-box-shadow" style="background-color: #ffffff">
						<div class="row">
							<div class="large-12 columns">
								<span>Log in or </span> <span><a class="link" href="<?php echo site_url("pda/donorRegisration"); ?>">register</a></span>
							</div>
						</div>
						<div class="row large-collapse" style="padding-top:10px;">
							<div class="large-12 columns">
								<?php if(validation_errors() != null) : ?>
									<div data-alert class="alert-box alert round">
										<?php echo validation_errors(); ?>
									</div>
								<?php endif; ?>

								<?php echo form_open('pda/do_login'); ?>
									<div class="row">
										<div class="large-12 columns">
											<input type="email" name="email" id="email"placeholder="Enter email" />
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns">
											<input type="password" name="password" id="password" placeholder="Enter password" />
										</div>
									</div>
									<div class="row">
										<div class="large-6 columns">
											<input id="rememberme" type="checkbox"  /><label for="rememberme">Remember me</label>
										</div>
										<div class="large-6 columns">
											<a class="link" href="#" >Forgot a password?</a>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns">
											<button type="submit" class="button small login-button">Log in</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>




