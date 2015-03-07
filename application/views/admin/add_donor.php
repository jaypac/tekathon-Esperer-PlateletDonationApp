<div class="large-12 columns" >
	<h3>Add Donor</h3>
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

	<?php echo form_open('pda/ngo/save_donor'); ?>
		<div class="row">
			<div class="large-6 columns">
				<input type="email" name="email" id="email" value="<?php echo set_value('email'); ?>" placeholder="Enter email address" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>" placeholder="Enter password" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="firstName" id="firstName" value="<?php echo set_value('firstName'); ?>" placeholder="Enter First Name" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="lastName" id="lastName" value="<?php echo set_value('lastName'); ?>" placeholder="Enter Last Name" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="mobileNo" id="mobileNo" value="<?php echo set_value('mobileNo'); ?>" placeholder="Enter Mobile No" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="officePincode" id="officePincode" value="<?php echo set_value('officePincode'); ?>" placeholder="Enter Office Pincode" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="residencePincode" id="residencePincode" value="<?php echo set_value('residencePincode'); ?>" placeholder="Enter Residence Pincode" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" readonly="readonly" name="birthDate" id="birthDate" value="<?php echo set_value('birthDate'); ?>" placeholder="Enter Birth Date" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<select id="gender" name="gender">
					<option value="" <?php echo set_select('gender', '', TRUE); ?> >Select Gender</option>
					<option value="Male" <?php echo set_select('gender', 'Male'); ?> >Male</option>
					<option value="Female"<?php echo set_select('gender', 'Female'); ?> >Female</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<select id="bloodGroup" name="bloodGroup">
					<option value="" <?php echo set_select('bloodGroup', '', TRUE); ?> >Select Blood Group</option>
					<option value="O+" <?php echo set_select('bloodGroup', 'O+'); ?> >O+</option>
					<option value="O-" <?php echo set_select('bloodGroup', 'O-'); ?> >O-</option>
					<option value="A+" <?php echo set_select('bloodGroup', 'A+'); ?> >A+</option>
					<option value="A-" <?php echo set_select('bloodGroup', 'A-'); ?> >A-</option>
					<option value="B+" <?php echo set_select('bloodGroup', 'B+'); ?> >B+</option>
					<option value="B-" <?php echo set_select('bloodGroup', 'B-'); ?> >B-</option>
					<option value="AB+" <?php echo set_select('bloodGroup', 'AB+'); ?> >AB+</option>
					<option value="AB-" <?php echo set_select('bloodGroup', 'AB-'); ?> >AB-</option>
					<option value="BOMBAY+" <?php echo set_select('bloodGroup', 'BOMBAY+'); ?> >BOMBAY+</option>
					<option value="BOMBAY-" <?php echo set_select('bloodGroup', 'BOMBAY-'); ?> >BOMBAY-</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<button type="submit" class="button small">Add Donor</button>
			</div>
		</div>
	</form>
</div>
