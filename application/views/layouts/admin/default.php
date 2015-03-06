<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Foundation Template | Banded</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans|Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/css/font-awesome.css">
<link rel="stylesheet" href="/css/foundation.css">

<!-- Final CSS -->
<!--
<link rel="stylesheet" href="/css/app.css">
-->

<link rel="stylesheet" href="/css/app/base.css">
<link rel="stylesheet" href="/css/app/login.css">
<link rel="stylesheet" href="/css/app/dashboard.css">

<script src="/js/vendor/modernizr.js"></script>
</head>
<body>
	<div class="off-canvas-wrap main-wrap" data-offcanvas>
		<div class="inner-wrap">

			 <nav class="tab-bar show-for-small">
			      <section class="left-small">
			        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
			      </section>

			      <section class="middle tab-bar-section">
			        <h1 class="title">Think Foundation</h1>
			      </section>

			 </nav>

		    <!-- Off Canvas Menu -->
		    <aside class="left-off-canvas-menu">
		        <ul class="off-canvas-list">
		        	<li role="menuitem"><a href="/pda/admin/dashboard"> <i class="fa fa-desktop fa-lg"></i> <span class="menu-item" >Dashboard</span></a></li>
					<li role="menuitem"><a href="/pda/ngo/new-request"><i class="fa fa-plus-circle fa-lg"></i> <span class="menu-item" >New Request</span></a></li>
					<li role="menuitem"><a href="/pda/ngo/history"><i class="fa fa-history fa-lg"></i> <span class="menu-item" >History</span></a></li>
					<li role="menuitem"><a href="/pda/ngo/manage-donors"><i class="fa fa-users fa-lg"></i> <span class="menu-item" >Donors</span></a></li>
					<li role="menuitem"><a href="/pda/ngo/manage-donation-centers"><i class="fa fa-hospital-o fa-lg"></i> <span class="menu-item" >Donation Centers</span></a></li>
					 
		        </ul>
		    </aside>

		    <div class="nav-header contain-to-grid hidden-for-small">
			  <nav class="top-bar"  style="height:65px;background-color: #ffffff;max-width:100%;">
			  	<div>
			    	<h4 class="logo"> THINK FOUNDATION</h4>
			    </div>
			  </nav>
			</div>

			<div class="dashboard-container">
				<aside class="left-off-menu">
			        <ul class="side-nav topnav" role="navigation" title="Link List">
			        	<li role="menuitem"><a href="/pda/admin/dashboard"> <i class="fa fa-desktop fa-lg"></i> <span class="menu-item" >Dashboard</span></a></li>
					  	<li role="menuitem"><a href="/pda/ngo/new-request"><i class="fa fa-plus-circle fa-lg"></i> <span class="menu-item" >New Request</span></a></li>
					   	<li role="menuitem"><a href="/pda/ngo/history"><i class="fa fa-history fa-lg"></i> <span class="menu-item" >History</span></a></li>
					   	<li role="menuitem"><a href="/pda/ngo/manage-donors"><i class="fa fa-users fa-lg"></i> <span class="menu-item" >Donors</span></a></li>
					   	<li role="menuitem"><a href="/pda/ngo/manage-donation-centers"><i class="fa fa-hospital-o fa-lg"></i> <span class="menu-item" >Donation Centers</span></a></li>
					 </ul>
			    </aside>
			    <section id="content" style="min-height:600px">
		    		<div id="body-content"  >
		    			<div class="row content-wrap" >
			    			<?php  if(isset($content_body))echo $content_body; ?>
			    		</div>
			    	</div>
			    </section>
		    </div>	
		    
			 <!-- close the off-canvas menu -->
  			<a class="exit-off-canvas"></a>

		</div>	
	</div>		
        
	<script src="/js/vendor/jquery.js"></script>
	<script src="/js/foundation.min.js"></script>
	<script>
    	$(document).foundation();
  </script>
</body>
</html>