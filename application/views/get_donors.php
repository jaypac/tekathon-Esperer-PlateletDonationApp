<div class="row" style="padding-top:3em"/>
<div class="row">
	<div class="col-md-10 col-md-offset-1">

		<div class="panel panel-primary panel-default">
			 <div class="panel-heading">Donor Search</div>
			 <div class="panel-body">
		<!-- 
				<form method="post" action="/pda/ngo/getDonors">
				  <div class="form-group">
				    <label for="pincode">Enter Pincode</label>
				    <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter Pincode" value="<?php echo $pincode; ?>">
				  </div>
				  <div class="form-group">
				    <label for="bloodGroup">Enter Blood Group</label>
				    <input type="text" class="form-control" name="bloodGroup" id="bloodGroup" placeholder="Blood groups" value="<?php echo $bloodgrp; ?>">
				  </div>
				  <div class="form-group">
				    <label for="RequestDate">Enter Date</label>
				    <input type="date" class="form-control" name="RequestDate" id="RequestDate" placeholder="Enter Date" value="<?php echo $requestdate; ?>">
				  </div>
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
			 -->
			 
			 <form method="post" action="/pda/ngo/getDonors" class="form-horizontal">
	 		 <div class="form-group">
			    <label class="col-sm-2" for="pincode">Enter Pincode</label>
			    <div class="col-sm-10">
			    	<input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter Pincode" value="<?php echo $pincode; ?>">
			    	</div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2" for="bloodGroup">Enter Blood Group</label>
			    <div class="col-sm-10">
			    <input type="text" class="form-control" name="bloodGroup" id="bloodGroup" placeholder="Blood groups" value="<?php echo $bloodgrp; ?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2" for="RequestDate">Enter Date</label>
			    <div class="col-sm-10">
			    <input type="date" class="form-control" name="RequestDate" id="RequestDate" placeholder="Enter Date" value="<?php echo $requestdate; ?>">
			    </div>
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
	 	
	 	</form>
			 
		</div>
		</div>

	<div class="panel panel-primary panel-default">
			 <div class="panel-heading">Search Results</div>
			 <div class="panel-body">

<form method="post" action="/pda/sms/startfollowup">
	<button type="submit" class="btn btn-success btn-primary btn-default">Send SMS</button>
	<table class="table table-striped">
	  <thead>
	  	<th>Select</th>
	  	<th>First Name</th>
	  	<th>Last Name</th>
	  	<th>Mobile No</th>
	  	<th>Status</th>
	  </thead>
	  <tbody>
	  
		<?php 
			foreach ($query->result() as $i => $row) {
		?>
		  	<tr>
		  		<td>
		  			<input type="checkbox" name = "<?php echo "sendSMS".$i ?>" id= "<?php echo "sendSMS".$i ?>" value="Y"/>
		  			<input type="hidden" name= "<?php echo "sendSMSDetails".$i ?>" id= "<?php echo "sendSMSDetails".$i ?>" value="<?php echo $row->FirstName." ".$row->LastName."#".$row->MobileNumber."#".$requestdate."#".$pincode."#".$requestid."#".$row->Id ?>"/>
		  		</td>
		  		<td><?php  echo $row->FirstName; ?></td>
		  		<td><?php  echo $row->LastName; ?></td>
		  		<td><?php  echo $row->MobileNumber; ?></td>
		  		<td>Not Contacted</td>
		  	</tr>
		<?php } ?>
	  
	  </tbody>
	</table>
</form>

	</div>
</div>


<div class="panel panel-primary panel-default">
	 <div class="panel-heading">Close Request</div>
	 <div class="panel-body">

	<form class="form-horizontal" method="post" action="/pda/sms/closeRequest">
		<div class="form-group">
			<label class="col-sm-4" for="pincode">Enter name of person who Donated : </label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="donorName" id="donorName" placeholder="Enter Name">
			</div>
	    </div>
		<button type="submit" class="btn btn-success btn-default">Close Request</button>
	</form>
	</div>
</div>
</div>
		</div>