<!DOCTYPE>
 lang="">
<head>
	<meta charset="utf-8">
	<title>Retina Dashboard</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="css/style.css" media="all" />
	<!--[if IE]><link rel="stylesheet" href="css/ie.css" media="all" /><![endif]-->
</head>
<body>
<div class="testing">
<header class="main">
	<h1><strong>Retina</strong> Dashboard</h1>
	<input type="text" value="search" />
</header>
<section class="user">
	<div class="profile-img">
		<p><img src="images/uiface2.png" alt="" height="40" width="40" /> Welcome back John Doe</p>
	</div>
	<div class="buttons">
		<button class="ico-font">&#9206;</button>
		<span class="button dropdown">
			<a href="#">Notifications <span class="pip">4</span></a>
			<ul class="notice">
				<li>
					<hgroup>
						<h1>You have a new task</h1>
						<h2>Report web statistics week by week.</h2> 
					</hgroup>
					<p><span>14:24</span></p>
				</li>
				<li>
					<hgroup>
						<h1>New comment</h1>
						<h2>Comment on <em>About page</em> by Darren.</h2> 
					</hgroup>
					<p><span>11:04</span></p>
				</li>
				<li>
					<hgroup>
						<h1>Broken link</h1>
						<h2>We've spotted a broken link on the <em>Blog page</em>.</h2> 
					</hgroup>
					<p><span>10:46</span></p>
				</li>
				<li>
					<hgroup>
						<h1>User report</h1>
						<h2><em>Lee Grant</em> has been promoted to admin.</h2> 
					</hgroup>
					<p><span>09:57</span></p>
				</li>
			</ul>
		</span> 
		<span class="button dropdown">
			<a href="#">Inbox <span class="pip">6</span></a>
			<ul class="notice">
				<li>
					<hgroup>
						<h1>Hi, I need a favour</h1>
						<h2>John Doe</h2>
						<h3>Lorem ipsum dolor sit amet, consectetuer sed aidping putamus delo de sit felume...</h3>
					</hgroup>
					<p><span>11:24</span></p>
				</li>
				<li>
					<hgroup>
						<h1><span class="icon">&#59154;</span>Hi, I need a favour</h1>
						<h2>John Doe</h2>
						<h3>Lorem ipsum dolor sit amet, consectetuer sed aidping putamus delo de sit felume...</h3>
					</hgroup>
					<p><span>11:24</span></p>
				</li>
				<li>
					<hgroup>
						<h1><span class="icon">&#59154;</span>Hi, I need a favour</h1>
						<h2>John Doe</h2>
						<h3>Lorem ipsum dolor sit amet, consectetuer sed aidping putamus delo de sit felume...</h3>
					</hgroup>
					<p><span>11:24</span></p>
				</li>
			</ul>
		</span> 
		<span class="button">Live</span>
		 <span class="button">Help</span>
		 <span class="button blue"><a href="/Admin/index">Logout</a></span>
	</div>
</section>
</div>
<nav>
	<ul>
		<li><a href="/Admin/dashboard"><span class="icon">&#128711;</span> Dashboard</a></li>
		<li>
			<a href="/Admin/pages-table"><span class="icon">&#128196;</span> Pages</a>
			<ul class="submenu">
				<li><a href="/Admin/page-new">Create page</a></li>
				<li><a href="/Admin/page-timeline">View pages</a></li>
			</ul>	
		</li>
		<li>
			<a href="/Admin/files"><span class="icon">&#127748;</span> Media <span class="pip">7</span></a>
			<ul class="submenu">
				<li><a href="/Admin/files-upload">Upload file</a></li>
				<li><a href="/Admin/files">View files</a></li>
			</ul>
		</li>
		<li class="section">
			<a href="/Admin/blog-timeline"><span class="icon">&#59160;</span> Blog <span class="pip">12</span></a>
			<ul class="submenu">
				<li><a href="/Admin/blog-new">New post</a></li>
				<li><a href="/Admin/blog-table">All posts</a></li>
				<li><a href="/Admin/comments-timeline">View comments</a></li>
			</ul>
		</li>
		<li><a href="/Admin/statistics"><span class="icon">&#128202;</span> Statistics</a></li>
		<li><a href="/Admin/users"><span class="icon">&#128101;</span> Users <span class="pip">3</span></a></li>
		<li>
			<a href="/Admin/ui-elements"><span class="icon">&#9881;</span> UI Elements</a>
			<ul class="submenu">
				<li><a href="/Admin/icon-fonts">Icon fonts</a></li>
			</ul>
		</li>
	</ul>
</nav>


<section class="alert">
	<form method="link" action="blog-new">
		<button class="green">Create new blog page</button>
	</form>
</section>
<section class="content">
	<section class="widget">
		<header>
			<span class="icon">&#59160;</span>
			<hgroup>
				<h1>Blog</h1>
				<h2>CMS blog pages</h2>
			</hgroup>
			<aside>
				<span>
					<a href="#">&#9881;</a>
					<ul class="settings-dd">
						<li><label>Option a</label><input type="checkbox" /></li>
						<li><label>Option b</label><input type="checkbox" checked="checked" /></li>
						<li><label>Option c</label><input type="checkbox" /></li>
					</ul>
				</span>
			</aside>
		</header>
		<div class="content no-padding timeline">
			<div class="tl-post">
				<span class="icon">&#59160;</span>
				<p><a href="#">The benefits of SEO</a> blog page. <span class="time">Created 15 hours ago</span></p>
			</div>
			<div class="tl-post">
				<span class="icon">&#59160;</span>
				<p><a href="#">Web designs of the month</a> blog page. <span class="time">Created 6 days ago</span></p>
			</div>
			<div class="tl-post">
				<span class="icon">&#59160;</span>
				<p><a href="#">The design history of apple</a> blog page. <span class="time">Created 14 days ago</span></p>
			</div>
			<div class="tl-post">
				<span class="icon">&#59160;</span>
				<p><a href="#">How to design for retina display</a> blog page. <span class="time">Created 25 days ago</span></p>
			</div>
			<div class="tl-post">
				<span class="icon">&#59160;</span>
				<p><a href="#">Responsive design</a> blog page. <span class="time">Created 30 days ago</span></p>
			</div>
			
			<div class="tl-post">
				<span class="icon">&#59160;</span>
				<p><a href="#">Sidebar design inspiration</a> blog page. <span class="time">Created 38 days ago</span></p>
			</div>
			<div class="tl-post">
				<span class="icon">&#59160;</span>
				<p><a href="#">Colours in web design</a> blog page. <span class="time">Created 44 days ago</span></p>
			</div>
			<div class="tl-post">
				<span class="icon">&#59160;</span>
				<p><a href="#">How to choose a colour pallette</a> blog page. <span class="time">Created 49 dayss ago</span></p>
			</div>
			<div class="tl-post">
				<span class="icon">&#59160;</span>
				<p><a href="#">The best designs of 2012</a> blog page. <span class="time">Created 51 days ago</span></p>
			</div>
			<div class="tl-post">
				<span class="icon">&#59160;</span>
				<p><a href="#">The anatomy of design</a> blog page. <span class="time">Created 61 day ago</span></p>
			</div>
		</div>
	</section>
</section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="js/jquery.wysiwyg.js"></script>
<script src="js/custom.js"></script>
<script src="js/cycle.js"></script>
<script src="js/jquery.checkbox.min.js"></script>
<!--<script src="js/flot.js"></script>
<script src="js/flot.resize.js"></script>
<script src="js/flot-graphs.js"></script>
<script src="js/flot-time.js"></script>
<script src="js/cycle.js"></script>-->
<script src="js/jquery.tablesorter.min.js"></script>
</body>
<>