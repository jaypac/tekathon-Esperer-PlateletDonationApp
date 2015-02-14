<!-- 
<div class="row ">
	<div class="col-md-7 col-md-offset-2">
		<form class="form-horizontal" method="post" action="loginSuccessful">
			<div class="form-group">
				<label for="exampleInputEmail1" class="col-sm-2 control-label">Enter Username</label>
				<div class="col-sm-10">
				 <input type="text" class="form-control" name="loginName" id="loginName" placeholder="Enter Username">
				</div>	
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Enter password</label> <input
					type="text" class="form-control" name="Password" id="Password"	placeholder="Enter password">
			</div>
			<div align="center">
				<button type="submit" name="login" value="login" class="btn btn-default">Submit</button>
			</div>
		</form>

		<form style="float: left;" action="donorRegisration" method="post">

			<div>
				<button type="submit" name="donorRegisration"
					value="donorRegisration" class="btn btn-default">Blood donor
					register here</button>
			</div>
		</form>

		<form method="post">
			<div>
				<button type="submit" name="login" value="hosReg"
					class="btn btn-default">Hospital registration</button>
			</div>

		</form>
	</div>
</div>
 -->

<style>
	.vertical-center {
		  min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
		  min-height: 100vh; /* These two lines are counted as one :-)       */
		
		  display: flex;
		  align-items: center;
		}

</style>

<div class="row vertical-center">
	<div class="col-md-5 col-md-offset-3">

		<div class="panel panel-primary panel-default">
			 <div class="panel-heading">Login/Register</div>
			 <div class="panel-body">
			 		<form class="form-horizontal"  method="post" action="loginSuccessful">
						  <div class="form-group">
						    <label for="loginName" class="col-sm-3 control-label">Username</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" name="loginName" id="loginName" placeholder="Enter Username">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="Password" class="col-sm-3 control-label">Password</label>
						    <div class="col-sm-9">
						      <input type="password" class="form-control" name="Password" id="Password" placeholder="Enter Password">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-3 col-sm-9">
						      <div class="checkbox">
						        <label>
						          <input type="checkbox"> Remember me
						        </label>
						      </div>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-3 col-sm-9">
						      <button type="submit" class="btn btn-default">Sign in</button>
						       <a class="btn btn-primary btn-default" href="/pda/donorRegisration" role="button">Register as a donor</a>
						    </div>
						  </div>
						</form>
			 
			 </div>
		</div>
	
	
	</div>
</div>




