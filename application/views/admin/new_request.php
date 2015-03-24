<div class="large-12 columns" >
	<h3>Donor Search</h3>
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

	<?php echo form_open('pda/ngo/search-donors'); ?>
		<div class="row">
			<div class="large-6 columns">
				<select name="centerId">
					<?php foreach ($center_list_query->result() as $row) :?>
						<option value="<?php echo $row->Id; ?>"><?php echo $row->Name; ?></option>
					<?php endforeach ;?>
				</select>
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
				<input type="text" name="requestDate" id="requestDate" placeholder="Enter Date" value="<?php echo set_value('requestDate',isset($RequestDate) ? $RequestDate : ''); ?>"  />
			</div>
		</div>
		<button type="submit" class="button">Submit</button>
 	</form>
</div>	
