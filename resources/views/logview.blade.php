<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Log Viewer</title>
		<meta name="keywords" content="Developer Template" />
		<meta name="description" content="Developer Generic Template">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="/assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="/assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img height="35" alt="Developer" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<!--<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-tasks"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Tasks
								</div>
			
								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Generating Sales Report</span>
												<span class="message pull-right text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Importing Contacts</span>
												<span class="message pull-right text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Uploading something big</span>
												<span class="message pull-right text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-xs">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="badge">4</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">230</span>
									Messages
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2014</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
			
					<span class="separator"></span>-->
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="https://avatars.githubusercontent.com/u/6491945?v=3" alt="Developer1" class="img-circle" data-lock-picture="https://avatars.githubusercontent.com/u/6491945?v=3" />
							</figure>
							<div class="profile-info" data-lock-name="Developer1" data-lock-email="Developer1@okler.com">
								<span class="name">Developer1</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="/dev/dashboard">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li>
										<a href="mailbox-folder.html">
											<span class="pull-right label label-primary">182</span>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Mail</span>
										</a>
									</li>
									<li class="nav-parent nav-expanded nav-active">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>General Information</span>
										</a>
										<ul class="nav nav-children">
											<!--<li>
												<a href="pages-signup.html">
													 Sign Up
												</a>
											</li>
											<li>
												<a href="pages-signin.html">
													 Sign In
												</a>
											</li>-->
											<li>
												<a href="pages-user-profile.html">
													 User Profile
												</a>
											</li>
											<li>
												<a href="/dev/logs">
													<span class="pull-right label label-primary"><?php $count=DB::table('users')->count(); echo $count;?></span>
													 <span>Log Viewer</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-table" aria-hidden="true"></i>
											<span>User Info</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="/dev/users">
													 Users
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-stats">
								<div class="widget-header">
									<h6>Project Stats</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul>
										<li>
											<span class="stats-title">API Integration</span>
											<span class="stats-complete">80%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
													<span class="sr-only">80% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Developer Dashboard</span>
											<span class="stats-complete">30%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
													<span class="sr-only">30% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Overall Completion</span>
											<span class="stats-complete">50%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
													<span class="sr-only">50% Complete</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
				
					</div>
				
				</aside>

				<section role="main" class="content-body has-toolbar">
					<header class="page-header">
						<h2>Log Viewer</h2>
					
						<div class="left-wrapper pull-left">
							<ol class="breadcrumbs">
								<li>
									<a href="/dev/dashboard">
										<i class="fa fa-home"></i>
									</a>
								</li>
							</ol>
						</div>
					</header>

					<!-- start: page -->
					<div class="inner-toolbar clearfix">
						<ul>
							<!--<li>
								<button type="button" class="btn btn-primary"><i class="fa fa-pause m-none"></i> Pause</button>
							</li>-->
							<li class="right">
								<ul class="nav nav-pills nav-pills-primary">
									<li>
										<label>Type</label>
									</li>
									<li class="active">
										<a href="#access-log" data-toggle="tab">Access Log</a>
									</li>
									<li>
										<a href="#error-log" data-toggle="tab">Error Log</a>
									</li>
									<li>
										<a href="#custom-log" data-toggle="tab">Custom Log</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>

					<section class="panel">
						<div class="panel-body tab-content">
							<div id="access-log" class="tab-pane active">
								<table class="table table-striped table-no-more table-bordered  mb-none">
									<thead>
										<tr>
											<th style="width: 20%"><span class="text-normal text-sm">Name</span></th>
											<th style="width: 10%"><span class="text-normal text-sm">API</span></th>
											<th style="width: 15%"><span class="text-normal text-sm">Date</span></th>
											<th><span class="text-normal text-sm">Token</span></th>
										</tr>
									</thead>
									<tbody class="log-viewer">
										<?php 
											$users = DB::table('users')->get();

											foreach ($users as $title) {
												echo "<tr>";
												echo "<td data-title=\"Name\" class=\"pt-md pb-md\">".$title->name."</td>";
											    echo "<td data-title=\"API\" class=\"pt-md pb-md\">".$title->API."</td>";
											    echo "<td data-title=\"Date\" class=\"pt-md pb-md\">".$title->created_at."</td>";
											    echo "<td data-title=\"Token\" class=\"pt-md pb-md\">".$title->remember_token."</td></tr>";
											}
											?>
									</tbody>
								</table>
							</div>
							<div id="error-log" class="tab-pane">
								<table class="table table-striped table-no-more table-bordered mb-none">
									<thead>
										<tr>
											<th style="width: 10%"><span class="text-normal text-sm">Type</span></th>
											<th style="width: 15%"><span class="text-normal text-sm">Date</span></th>
											<th><span class="text-normal text-sm">Message</span></th>
										</tr>
									</thead>
									<tbody class="log-viewer">
										<tr>
											<td data-title="Type" class="pt-md pb-md">
												<i class="fa fa-times-circle fa-fw text-danger text-md va-middle"></i> Error
											</td>
											<td data-title="Date" class="pt-md pb-md">
												13/04/2014 21:55:30
											</td>
											<td data-title="Message" class="pt-md pb-md">
												File does not exist: /var/www/porto-admin/favicon.ico
											</td>
										</tr>
										<tr>
											<td data-title="Type" class="pt-md pb-md">
												<i class="fa fa-times-circle fa-fw text-danger text-md va-middle"></i> Error
											</td>
											<td data-title="Date" class="pt-md pb-md">
												13/04/2014 21:55:29
											</td>
											<td data-title="Message" class="pt-md pb-md">
												File does not exist: /var/www/porto-admin/favicon.ico
											</td>
										</tr>
										<tr>
											<td data-title="Type" class="pt-md pb-md">
												<i class="fa fa-times-circle fa-fw text-danger text-md va-middle"></i> Error
											</td>
											<td data-title="Date" class="pt-md pb-md">
												13/04/2014 21:55:28
											</td>
											<td data-title="Message" class="pt-md pb-md">
												File does not exist: /var/www/porto-admin/favicon.ico
											</td>
										</tr>
										<tr>
											<td data-title="Type" class="pt-md pb-md">
												<i class="fa fa-times-circle fa-fw text-danger text-md va-middle"></i> Error
											</td>
											<td data-title="Date" class="pt-md pb-md">
												13/04/2014 21:55:27
											</td>
											<td data-title="Message" class="pt-md pb-md">
												File does not exist: /var/www/porto-admin/favicon.ico
											</td>
										</tr>
										<tr>
											<td data-title="Type" class="pt-md pb-md">
												<i class="fa fa-times-circle fa-fw text-danger text-md va-middle"></i> Error
											</td>
											<td data-title="Date" class="pt-md pb-md">
												13/04/2014 21:55:26
											</td>
											<td data-title="Message" class="pt-md pb-md">
												File does not exist: /var/www/porto-admin/favicon.ico
											</td>
										</tr>
										<tr>
											<td data-title="Type" class="pt-md pb-md">
												<i class="fa fa-times-circle fa-fw text-danger text-md va-middle"></i> Error
											</td>
											<td data-title="Date" class="pt-md pb-md">
												13/04/2014 21:55:25
											</td>
											<td data-title="Message" class="pt-md pb-md">
												File does not exist: /var/www/porto-admin/favicon.ico
											</td>
										</tr>
										<tr>
											<td data-title="Type" class="pt-md pb-md">
												<i class="fa fa-ban fa-fw text-danger text-md va-middle"></i> Fatal
											</td>
											<td data-title="Date" class="pt-md pb-md">
												12/04/2014 22:13:39
											</td>
											<td data-title="Message" class="pt-md pb-md">
												not a tree object
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="custom-log" class="tab-pane">
								<table class="table table-striped table-no-more table-bordered  mb-none">
									<thead>
										<tr>
											<th style="width: 10%"><span class="text-normal text-sm">Type</span></th>
											<th style="width: 15%"><span class="text-normal text-sm">Date</span></th>
											<th><span class="text-normal text-sm">Message</span></th>
										</tr>
									</thead>
									<tbody class="log-viewer">
										<tr>
											<td data-title="Type" class="pt-md pb-md">
												<i class="fa fa-info fa-fw text-info text-md va-middle"></i> Info
											</td>
											<td data-title="Date" class="pt-md pb-md">
												12/04/2014 21:50:54
											</td>
											<td data-title="Message" class="pt-md pb-md">
												"GET / HTTP/1.1" 200 1225
											</td>
										</tr>
										<tr>
											<td data-title="Type" class="pt-md pb-md">
												<i class="fa fa-info fa-fw text-info text-md va-middle"></i> Info
											</td>
											<td data-title="Date" class="pt-md pb-md">
												12/04/2014 21:50:53
											</td>
											<td data-title="Message" class="pt-md pb-md">
												"GET /assets/vendor/bootstrap/css/bootstrap.css HTTP/1.1" 200 110495
											</td>
										</tr>
										<tr>
											<td data-title="Type" class="pt-md pb-md">
												<i class="fa fa-info fa-fw text-info text-md va-middle"></i> Info
											</td>
											<td data-title="Date" class="pt-md pb-md">
												12/04/2014 21:50:52
											</td>
											<td data-title="Message" class="pt-md pb-md">
												"GET /assets/stylesheets/theme.css HTTP/1.1" 200 1273
											</td>
										</tr>
										<tr>
											<td data-title="Type" class="pt-md pb-md">
												<i class="fa fa-info fa-fw text-info text-md va-middle"></i> Info
											</td>
											<td data-title="Date" class="pt-md pb-md">
												12/04/2014 21:50:51
											</td>
											<td data-title="Message" class="pt-md pb-md">
												"GET /assets/stylesheets/skin.css HTTP/1.1" 200 230
											</td>
										</tr>
										<tr>
											<td data-title="Type" class="pt-md pb-md">
												<i class="fa fa-info fa-fw text-info text-md va-middle"></i> Info
											</td>
											<td data-title="Date" class="pt-md pb-md">
												12/04/2014 21:50:50
											</td>
											<td data-title="Message" class="pt-md pb-md">
												"GET /assets/vendor/jquery/jquery.js HTTP/1.1" 200 244962
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</section>
					<!-- end: page -->
				</section>
			</div>
		</section>

		<!-- Vendor -->
		<script src="/assets/vendor/jquery/jquery.js"></script>
		<script src="/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/assets/javascripts/theme.init.js"></script>

	</body>
</html>