<div class="large-12 columns" >
	<h3>Edit Donation Center</h3>
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

	<?php echo form_open('pda/ngo/update_donation_center'); ?>
		<input type="hidden" name="centerId" id="centerId" value="<?php echo set_value('Id',isset($Id) ? $Id : ''); ?>"  />

		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="centerName" id="centerName" value="<?php echo set_value('centerName',isset($Name) ? $Name : ''); ?>" placeholder="Enter Center Name" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<textarea name="centerAddress" rows="4" id="centerAddress" placeholder="Enter Center Address"><?php echo set_value('centerAddress',isset($Address) ? $Address : ''); ?></textarea>
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="centerCity" id="centerCity" value="<?php echo set_value('centerCity',isset($City) ? $City : ''); ?>" placeholder="Enter Center City" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="centerPincode" id="centerPincode" value="<?php echo set_value('centerPincode',isset($Pincode) ? $Pincode : ''); ?>" placeholder="Enter Center Pincode" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<button type="submit" class="button small">Update Center</button>
			</div>
		</div>
	</form>
</div>
