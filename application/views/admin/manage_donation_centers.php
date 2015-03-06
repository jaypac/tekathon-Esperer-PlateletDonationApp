<div class="large-12 columns" >
	<h3>Manage Donation Centers</h3>
	<hr/>

	<a href="/pda/ngo/add-donation-center" class="button">Add Donation Center</a>

	<table id="example" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Name</th>
				<th>City</th>
				<th>Pincode</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($query->result() as $row) :?>
			<tr>
				<td><?php echo $row->Name; ?></td>
				<td><?php echo $row->City; ?></td>
				<td><?php echo $row->Pincode; ?></td>
				<td>
					<a href="/pda/ngo/edit-donation-center/<?php echo $row->Id; ?>"> 
						<i class="fa fa-edit fa-lg"></i> 
					</a>
				</td>
			</tr>
			<?php endforeach ;?>
		</tbody>
	</table>
</div>
