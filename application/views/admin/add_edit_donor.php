<div class="large-12 columns" >
	<?php if($type == 'add') :?>
		<h3>Add Donor</h3>
	<?php else: ?>
		<h3>Edit Donor</h3>
	<?php endif; ?>
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

	<?php if($type == 'add') :?>
		<?php echo form_open('pda/ngo/save_donor'); ?>
	<?php else: ?>
		<?php echo form_open('pda/ngo/update_donor'); ?>
	<?php endif; ?>
		<input type="hidden" name="DonorId" id="DonorId" value="<?php echo set_value('DonorId',isset($Id) ? $Id : ''); ?>"  />
		<input type="hidden" name="UserId" id="UserId" value="<?php echo set_value('UserId',isset($UserId) ? $UserId : ''); ?>"  />

		<div class="row">
			<div class="large-6 columns">
				<input type="email" name="email" id="email" value="<?php echo set_value('email',isset($Email) ? $Email : ''); ?>" placeholder="Enter email address" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="password" name="password" id="password" value="<?php echo set_value('password',isset($Password) ? $Password : ''); ?>" placeholder="Enter password" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="firstName" id="firstName" value="<?php echo set_value('firstName',isset($FirstName) ? $FirstName : ''); ?>" placeholder="Enter First Name" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="lastName" id="lastName" value="<?php echo set_value('lastName',isset($LastName) ? $LastName : ''); ?>" placeholder="Enter Last Name" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="mobileNo" id="mobileNo" value="<?php echo set_value('mobileNo',isset($MobileNumber) ? $MobileNumber : ''); ?>" placeholder="Enter Mobile No" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="officePincode" id="officePincode" value="<?php echo set_value('officePincode',isset($OfficePincode) ? $OfficePincode : ''); ?>" placeholder="Enter Office Pincode" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" name="residencePincode" id="residencePincode" value="<?php echo set_value('residencePincode',isset($ResidencePincode) ? $ResidencePincode : ''); ?>" placeholder="Enter Residence Pincode" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<input type="text" readonly="readonly" name="birthDate" id="birthDate" value="<?php echo set_value('birthDate',isset($BirthDate) ? $BirthDate : ''); ?>" placeholder="Enter Birth Date" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<?php 
					$options = array(
	                  ''  => 'Select Gender',
	                  'Male'    => 'Male',
	                  'Female'   => 'Female'
	                );

					echo form_dropdown('gender', $options, isset($Gender)?$Gender : $this->input->get_post('gender',''));
				?>	

			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<?php 
					$options = array(
	                  ''  => 'Select Blood Group',
	                  'O+'    => 'O+',
	                  'O-'   => 'O-',
	                  'A+'    => 'A+',
	                  'A-'   => 'A-',
	                  'B+'    => 'B+',
	                  'B-'   => 'B-',
	                  'AB+'    => 'AB+',
	                  'AB-'   => 'AB-',
	                  'BOMBAY+'    => 'BOMBAY+',
	                  'BOMBAY-'   => 'BOMBAY-',
	                );

					echo form_dropdown('bloodGroup', $options, isset($BloodGroup) ? $BloodGroup : $this->input->get_post('bloodGroup',''));
				?>	

			</div>
		</div>			
		<div class="row">
			<div class="large-6 columns">
				<?php if($type == 'add') :?>
					<button type="submit" class="button small">Add Donor</button>
				<?php else: ?>
					<button type="submit" class="button small">Update Donor</button>
				<?php endif; ?>
			</div>
		</div>
	</form>
</div>
