<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Foundation Template | Banded</title>
<link rel="stylesheet" href="/css/foundation.css">

<!-- Final CSS -->
<!--
<link rel="stylesheet" href="/css/app.css">
-->

<link rel="stylesheet" href="/css/app/base.css">
<link rel="stylesheet" href="/css/app/login.css">

<script src="/js/vendor/modernizr.js"></script>

</head>
<body>
	<div class="off-canvas-wrap" data-offcanvas>
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
		        <!-- whatever you want goes here -->
		        <ul class="off-canvas-list">
		          <li role="menuitem"><a href="/pda/ngo/newRequest">New Request</a></li>
				   	<li role="menuitem"><a href="#">Link 2</a></li>
				   	<li role="menuitem"><a href="#">Link 3</a></li>
				   	<li role="menuitem"><a href="#">Link 4</a></li>
		        </ul>
		    </aside>

		    <div class="row hide-for-small">
				<div class="large-12 columns">
					<h1>Top Bar</h1>
				</div>	
			</div>	

			<div class="row" style="padding-top:10px;">
				<div class="large-3 columns hide-for-small">
					<ul class="side-nav" role="navigation" title="Link List">
						<li role="menuitem"><a href="/pda/ngo/newRequest">New Request</a></li>
					   	<li role="menuitem"><a href="#">Link 2</a></li>
					   	<li role="menuitem"><a href="#">Link 3</a></li>
					   	<li role="menuitem"><a href="#">Link 4</a></li>
					</ul>
				</div>	
				<div class="large-9 columns">
					<!--Body Content -->
		        	<?php  if(isset($content_body))echo $content_body; ?>
				</div>
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