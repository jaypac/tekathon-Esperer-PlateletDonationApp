<div class="large-12 columns" >
	<h3>Add Donation Center</h3>
	<hr/>

	<?php if(validation_errors() != null) : ?>
		<div class="row">
			<div class="large-6 columns">
				<div data-alert class="alert-box alert">
					<?php echo validation_errors(); ?>
				</div>
			</div>
		</div>		
	<?php endif; ?>

	<?php if(isset($success)) : ?>
		<div class="row">
			<div class="large-6 columns">
				<div data-alert class="alert-box success">
					<?php echo $success; ?>
				</div>
			</div>
		</div>		
	<?php endif; ?>

	<?php echo form_open('pda/ngo/save_donation_center'); ?>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="centerName" id="centerName" value="<?php echo set_value('centerName'); ?>" placeholder="Enter Center Name" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<textarea name="centerAddress" rows="4" id="centerAddress" placeholder="Enter Center Address"><?php echo set_value('centerAddress',''); ?></textarea>
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="centerCity" id="centerCity" value="<?php echo set_value('centerCity'); ?>" placeholder="Enter Center City" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="centerPincode" id="centerPincode" value="<?php echo set_value('centerPincode'); ?>" placeholder="Enter Center Pincode" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<button type="submit" class="button small">Add Center</button>
			</div>
		</div>
	</form>
</div>
