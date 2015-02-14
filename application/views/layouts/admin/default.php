<!DOCTYPE html>
<head>
	 <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

	<!-- 
	<div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="/pda/ngo/newRequest">New Request</a></li>
              <li><a href="#">History</a></li>
            </ul>
          </div>
          
      -->     
      
      	<style>
      		nav#myNav a{
	
			color:white;
			}
	
      	
      	</style>
      
          
            <nav id="myNav" class="navbar navbar-fixed-top" style="background-color: #4D4D4D">
		      <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="#"></a>
		        </div>
		        <div id="navbar" class="collapse navbar-collapse">
		          <ul class="nav navbar-nav">
		            <li style="color:white"><a href="/pda/loginSuccessful">Home</a></li>
		            <li style="color:white"><a href="/pda/ngo/newRequest">New Request</a></li>
		            <li style="color:white"><a href="#">History</a></li>
		          </ul>
		        </div><!--/.nav-collapse -->
		      </div>
		    </nav>

		    
	<div style="padding-top: 20px;" />	    
		    
	<div class="container-fluid">
			<!--Body Content -->
             <?php  if(isset($content_body))echo $content_body; ?>
        
        </div>
        
        
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>