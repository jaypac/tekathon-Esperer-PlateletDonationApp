<div class="large-12 columns" >
	<h3>Manage Donors</h3>
	<hr/>

	<a href="/pda/ngo/add-donor" class="button">Add Donor</a>

	<table id="donors-table" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Mobile No</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($query->result() as $row) :?>
			<tr>
				<td><?php echo $row->FirstName; ?></td>
				<td><?php echo $row->LastName; ?></td>
				<td><?php echo $row->MobileNumber; ?></td>
				<td>
					<a href="/pda/ngo/edit-donor/<?php echo $row->Id; ?>"> 
						<i class="fa fa-edit fa-lg"></i> 
					</a>
				</td>
			</tr>
			<?php endforeach ;?>
		</tbody>
	</table>
</div>
