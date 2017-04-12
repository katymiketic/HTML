<!DOCTYPE html>
<html lang="en-US">

<?php 

$list1 = '<ul class="list list-orange list-caret">
   <li>...</li>
   <li>...</li>
   <li>...</li>
</ul>';

$blockquote = '<blockquote class="blockquote-blue">
    <p>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
       Integer posuere erat a ante.
    </p>
</blockquote>';	
				
$blockquote2 =	'<blockquote class="blockquote-dark bg-gray">
   <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Integer posuere erat a ante.
   </p>
   <footer>
      Someone famous in 
      <cite title="Source Title">Source Title</cite>
   </footer>
</blockquote>';

$text =	'<p class="text-md text-red">
     Lorem ipsum dolor sit amet, consectetur adipiscing elit.
     Nullam tristique lectus convallis.
</p>';

$buttons = '<span class="btn1 btn1-md btn1-blue">Blue Button</span>';

$buttons2 = '<span class="btn1 btn1-md btn1-blue-no-bg">Blue Button</span>';

$headers = '<h3 class="header-title-center">Heading - Bottom Line Blue - Center</h3>';

$headers2 = '<h3 class="header-title-green-right">Heading - Bottom Line Green - Right</h3>';

$headers3 = '<h3 class="header-title-red-center">Heading - Bottom Line Red - Center</h3>';

$header_bg = '<h3 class="header-bg-orange">Heading - Background Orange</h3>';

$heading = '<h1 class="top-title">TOP TITLE !</h1>

<h1 class="header-big header-title-green">HEADING</h1>

<p class="bottom-title">
	Bottom title
</p>
';

$progress_bar = '<div class="progress">
      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
      style="width: 60%">60%</div>
</div>';

?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<!-- STYLESHEETS
	===============================================================-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Menuzord Css -->
	<link rel="stylesheet" type="text/css" href="css/menuzord.css"/>	
	<!-- Fonts Css -->
	<link rel="stylesheet" type="text/css" href="fonticons/flaticon.css"/>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
	<!-- Google Fonts -->	
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'/>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type='text/css'/>

	<title>Minti / Typography</title>

</head>

<body class="bg-white">

	<!-- MENU BEGIN           
	===============================================================-->
	<div class="bg-white minti-navbar menuzord-dark">
		<div class="container">
			<div class="col-lg-12">
				<div id="menuzord" class="menuzord menuzord-responsive padding-0">	
					
					<a href="index.html" class="menuzord-brand"><img src="images/logo/logo.png" alt=""/></a>
					<ul class="menuzord-menu menuzord-indented scrollable menuzord-right">
						<li class="active"><a href="index.html">HOME</a>
							<ul class="dropdown">
								<li><a href="index.html">Home Version 1</a></li>
								<li><a href="home-2.html">Home Version 2</a></li>
								<li><a href="home-3.html">Home Version 3</a></li>							
								<li><a href="home-4.html">Home Version 4</a></li>
								<li><a href="onepage-1.html" target="_blank">Onepage Version 1</a></li>
								<li><a href="onepage-2.html" target="_blank">Onepage Version 2</a></li>
								<li><a href="onepage-3.html" target="_blank">Onepage Version 3</a></li>						
								<li><a href="onepage-4.html" target="_blank">Onepage Version 4</a></li>
							</ul>   
						</li>
						<li><a href="#">PAGES</a>
							<div class="megamenu">
								<div class="megamenu-row">
								
									<div class="col4">
										<ul>
											<li><h5>PAGE SAMPLES</h5></li>
											<li><a href="about-us-1.html"><i class="fa fa-angle-right"></i> About Us 1</a></li>
											<li><a href="about-us-2.html"><i class="fa fa-angle-right"></i> About Us 2</a></li>
											<li><a href="about-us-3.html"><i class="fa fa-angle-right"></i> About Us 3</a></li>
											<li><a href="about-us-4.html"><i class="fa fa-angle-right"></i> About Us 4</a></li>
											<li><a href="contact-us-1.html"><i class="fa fa-angle-right"></i> Contact Us 1</a></li>
											<li><a href="contact-us-2.html"><i class="fa fa-angle-right"></i> Contact Us 2</a></li>
											<li><a href="contact-us-3.html"><i class="fa fa-angle-right"></i> Contact Us 3</a></li>
											<li><a href="faq-1.html"><i class="fa fa-angle-right"></i> FAQ 1</a></li>
											<li><a href="faq-2.html"><i class="fa fa-angle-right"></i> FAQ 2</a></li>
											<li><a href="404-page.html"><i class="fa fa-angle-right"></i> 404 Page</a></li>
										</ul>
									</div>
									<div class="col4">										
										<ul>
											<li><h5>PORTFOLIO PAGES</h5></li>
											<li><a href="portfolio-v1-2-columns.html"><i class="fa fa-angle-right"></i> Portfolio V1 - 2 Columns</a></li>
											<li><a href="portfolio-v1-3-columns.html"><i class="fa fa-angle-right"></i> Portfolio V1 - 3 Columns</a></li>
											<li><a href="portfolio-v1-4-columns.html"><i class="fa fa-angle-right"></i> Portfolio V1 - 4 Columns</a></li>
											<li><a href="portfolio-v2-2-columns.html"><i class="fa fa-angle-right"></i> Portfolio V2 - 2 Columns</a></li>
											<li><a href="portfolio-v2-3-columns.html"><i class="fa fa-angle-right"></i> Portfolio V2 - 3 Columns</a></li>
											<li><a href="portfolio-v2-4-columns.html"><i class="fa fa-angle-right"></i> Portfolio V2 - 4 Columns</a></li>
											<li><a href="portfolio-fullwidth-3-columns.html"><i class="fa fa-angle-right"></i> Portfolio 3 Cloumns - Full Width</a></li>		
											<li><a href="portfolio-fullwidth-4-columns.html"><i class="fa fa-angle-right"></i> Portfolio 4 Cloumns - Full Width</a></li>	
											<li><a href="portfolio-detail.html"><i class="fa fa-angle-right"></i> Portfolio Detail</a></li>	
										</ul>
									</div>
									<div class="col4">
										<ul>
											<li><h5>GALLERY PAGES</h5></li>
											<li><a href="photogallery-v1-2-columns.html"><i class="fa fa-angle-right"></i> Gallery V1 - 2 Columns</a></li>
											<li><a href="photogallery-v1-3-columns.html"><i class="fa fa-angle-right"></i> Gallery V1 - 3 Columns</a></li>
											<li><a href="photogallery-v1-4-columns.html"><i class="fa fa-angle-right"></i> Gallery V1 - 4 Columns</a></li>
											<li><a href="photogallery-v2-2-columns.html"><i class="fa fa-angle-right"></i> Gallery V2 - 2 Columns</a></li>
											<li><a href="photogallery-v2-3-columns.html"><i class="fa fa-angle-right"></i> Gallery V2 - 3 Columns</a></li>
											<li><a href="photogallery-v2-4-columns.html"><i class="fa fa-angle-right"></i> Gallery V2 - 4 Columns</a></li>
											<li><a href="photogallery-fullwidth-3-columns.html"><i class="fa fa-angle-right"></i> Gallery 3 Columns - Full Width</a></li>
											<li><a href="photogallery-fullwidth-4-columns.html"><i class="fa fa-angle-right"></i> Gallery 4 Columns - Full Width</a></li>
										</ul>
									</div>
									
								</div>      
							</div>
						</li>
						<li><a href="#">BLOG</a>
							<ul class="dropdown">
							
								<li><a href="#">Blog Grids</a>							
									<ul class="dropdown dropdown-right">
									   <li><a href="blog-1-col-sidebar-right.html">1 Column + Sidebar Right</a></li>
									   <li><a href="blog-1-col-sidebar-left.html">1 Column + Sidebar Left</a></li>
									   <li><a href="blog-2-col-sidebar-right.html">2 Columns + Sidebar Right</a></li>
									   <li><a href="blog-2-col-sidebar-left.html">2 Columns + Sidebar Left</a></li>
									   <li><a href="blog-2-col-no-sidebar.html">2 Columns - No Sidebar</a></li>
									   <li><a href="blog-3-col-no-sidebar.html">3 Columns - No Sidebar</a></li>
									   <li><a href="blog-list-post.html">List Post</a></li>
									</ul>									
								</li>
								
								<li><a href="#">Single Post</a>
									<ul class="dropdown dropdown-right">
									   <li><a href="blog-single-post-sidebar-right.html">Single Post + Sidebar Right</a></li>
									   <li><a href="blog-single-post-sidebar-left.html">Single Post + Sidebar Left</a></li>
									   <li><a href="blog-single-post-fullwidth.html">Single Post + Full Width</a></li>	
									</ul>	
								</li>	
								
								<li><a href="#">Post Types</a>
									<ul class="dropdown dropdown-right">
										<li><a href="blog-single-post-sidebar-right.html">Standart Post</a></li>
										<li><a href="blog-post-type-qoute.html">Qoute Post</a></li>
										<li><a href="blog-post-type-youtube.html#">Youtube Video Post</a></li>	
										<li><a href="blog-post-type-vimeo.html">Vimeo Video Post</a></li>
										<li><a href="blog-post-type-soundcloud.html">Soundcloud Post</a></li>
										<li><a href="blog-post-type-mixcloud.html">Mixcloud Post</a></li>
										<li><a href="blog-post-type-link.html">Link Post</a></li>		
										<li><a href="blog-post-type-slider.html">Slider Post</a></li>
										<li><a href="blog-post-type-gallery.html">Gallery Post</a></li>
									</ul>	
								</li>
								
							</ul>      
						</li>	
						<li><a href="#">COMPONENTS</a>
							<div class="megamenu">
								<h5 class="text-white">COMPONENTS</h5>
								<div class="megamenu-row">										
									<div class="col4">
										<ul>	
										
											<li>
												<a href="components-services.html">
													<i class="fa fa-angle-right"></i>Services
												</a>
											</li>
											
											<li>
												<a href="components-parallax-blocks.html">
													<i class="fa fa-angle-right"></i>Parallax Blocks
												</a>
											</li>
											
											<li>
												<a href="components-team.html">
													<i class="fa fa-angle-right"></i>Team
												</a>
											</li>
											
											<li>
												<a href="components-fonts.html">
													<i class="fa fa-angle-right"></i>Fonts
												</a>
											</li>	
										</ul>
									</div>
									<div class="col4">
										<ul>										
											<li>
												<a href="components-accordions.html">
													<i class="fa fa-angle-right"></i>Accordions
												</a>
											</li>
											
											<li>
												<a href="components-counters.html">
													<i class="fa fa-angle-right"></i>Counters
												</a>
											</li>
											
											<li>
												<a href="components-tabs.html">
													<i class="fa fa-angle-right"></i>Tabs
												</a>
											</li>
											
											<li>
												<a href="components-pricings.html">
													<i class="fa fa-angle-right"></i>Pricings
												</a>
											</li>
										</ul>
									</div>
									<div class="col4">
										<ul>
										
											<li>
												<a href="components-latest-works.html">
													<i class="fa fa-angle-right"></i>Latest Works
												</a>
											</li>
											
											<li>
												<a href="components-blog-elements.html">
													<i class="fa fa-angle-right"></i>Blog Elements
												</a>
											</li>
											
											<li>
												<a href="components-effects.html">
													<i class="fa fa-angle-right"></i>Effects
												</a>
											</li>
											
											<li>
												<a href="components-about-blocks.html">
													<i class="fa fa-angle-right"></i>About Blocks
												</a>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li><a href="typography.php">TYPOGRAPHY</a></li>						
						<li class="search">
							<form action="#your-action-page" method="get">
								<input type="text" name="search" placeholder="Search"/>
							</form>
						</li>
						
					</ul>
				 
				</div>
			</div>
		</div>
	</div>
	<!-- MENU END           
	===============================================================-->

	<div class="clearfix"></div>
	
	<!-- Page Header Begin -->
	<div class="page-header-one bg-gray">
		<div class="container">
			<div class="col-lg-12">
				<h3 class="pull-left">TYPOGRAPHY</h3>
				<ol class="breadcrumb-wrapper breadcrumb pull-right">
					<li class="active">Typography</li>
				</ol>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->
					
	<div class="container">	
		<div class="col-md-12">
		
			<h1 class="header-title-center">TYPOGRAPHY</h1>
			
			<h1>Grids</h1>
			
			<div class="col-md-1 grids">.col-md-1</div>
			<div class="col-md-1 grids">.col-md-1</div>
			<div class="col-md-1 grids">.col-md-1</div>
			<div class="col-md-1 grids">.col-md-1</div>
			<div class="col-md-1 grids">.col-md-1</div>
			<div class="col-md-1 grids">.col-md-1</div>
			<div class="col-md-1 grids">.col-md-1</div>
			<div class="col-md-1 grids">.col-md-1</div>
			<div class="col-md-1 grids">.col-md-1</div>
			<div class="col-md-1 grids">.col-md-1</div>
			<div class="col-md-1 grids">.col-md-1</div>
			<div class="col-md-1 grids">.col-md-1</div>
								
			<div class="col-md-8 grids">.col-md-8</div>
			<div class="col-md-4 grids">.col-md-4</div>
				
			<div class="col-md-4 grids">.col-md-4</div>
			<div class="col-md-4 grids">.col-md-4</div>
			<div class="col-md-4 grids">.col-md-4</div>
						
			<div class="col-md-6 grids">.col-md-6</div>
			<div class="col-md-6 grids">.col-md-6</div>
			
			<div class="clearfix"></div>
			<div class="divider-solid"></div>
						
			<h1>Heading 1</h1>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h2>Heading 2</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h3>Heading 3</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h4>Heading 4</h4>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h5>Heading 5</h5>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h6>Heading 6</h6>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<div class="divider-solid"></div>
			
			<div class="col-md-6">
			
				<h1 class="header-big">Heading Big (header-big)</h1>
				<p class="bottom-title">
					Bottom title (Class: bottom-title)
				</p>
				
				<h1 class="header-middle">Heading Middle (header-middle)</h1>
				<p class="bottom-title">
					Bottom title (Class: bottom-title)
				</p>
				
				<h1 class="header-small">Heading Small (header-small)</h1>
				<p class="bottom-title">
					Bottom title (Class: bottom-title)
				</p>
				
				<h1 class="header-xsmall">Heading XSmall (header-xsmall)</h1>
				<p class="bottom-title">
					Bottom title (Class: bottom-title)
				</p>
				
				<h1 class="header-xxsmall">Heading XXSmall (header-xxsmall)</h1>
				<p class="bottom-title">
					Bottom title (Class: bottom-title)
				</p>
				
			</div>
			
			<div class="col-md-6">
				
				<div class="row">
					<h4 class="top-title wow fadeInUp">TOP TITLE !</h4>
					<h2 class="text-dark header-big header-title-green margin-top-0 wow fadeInUp">HEADING</h2>
					<p class="bottom-title">
						Bottom title
					</p>
				</div>
				
				<div class="row">
					<h4 class="top-title text-center wow fadeInUp">TOP TITLE !</h4>
					<h2 class="text-dark header-big header-title-green-center margin-top-0 wow fadeInUp">HEADING</h2>
					<p class="bottom-title text-center">
						Bottom title
					</p>
				</div>
				
				<div class="row">
					<h4 class="top-title text-right wow fadeInUp">TOP TITLE !</h4>
					<h2 class="text-dark header-big header-title-green-right margin-top-0 wow fadeInUp">HEADING</h2>
					<p class="bottom-title text-right">
						Bottom title
					</p>
				</div>
				
			</div>
			
			<div class="margin-bottom-30 margin-top-30">
				<h4 class="header-title">Example :</h4>
				<pre><?php echo htmlspecialchars($heading); ?></pre>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="divider-solid"></div>
			
			<h3 class="header-bg-dark">Heading - Background Dark</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h3 class="header-bg-green">Heading - Background Green</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h3 class="header-bg-red">Heading - Background Red</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h3 class="header-bg-blue">Heading - Background Blue</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h3 class="header-bg-orange">Heading - Background Orange</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<div class="margin-bottom-30 margin-top-30">
				<h4 class="header-title">Example :</h4>
				<pre><?php echo htmlspecialchars($header_bg); ?></pre>
			</div>
									
			<div class="divider-solid"></div>
			
			<h3 class="header-title">Heading - Bottom Line Blue</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h3 class="header-title-green">Heading - Bottom Line - Green</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h3 class="header-title-red">Heading - Bottom Line - Red</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h3 class="header-title-center">Heading - Bottom Line Blue - Center</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h3 class="header-title-green-center">Heading - Bottom Line Green - Center</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h3 class="header-title-red-center">Heading - Bottom Line Red - Center</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h3 class="header-title-right">Heading - Bottom Line Blue - Right </h3>
			<p class="text-right">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h3 class="header-title-green-right">Heading - Bottom Line Green - Right</h3>
			<p class="text-right">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<h3 class="header-title-red-right">Heading - Bottom Line Red - Right</h3>
			<p class="text-right">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. Curabitur consectetur in tortor in tempus. Sed at feugiat erat. Praesent imperdiet diam non eros sollicitudin, nec interdum ex tincidunt. Nunc et ligula sit amet mauris suscipit rhoncus viverra et felis.
			</p>
			
			<div class="margin-bottom-30 margin-top-30">
				<h4 class="header-title">Example :</h4>
				<pre><?php echo htmlspecialchars($headers); ?></pre>
			</div>
			
			<div class="margin-bottom-30 margin-top-30">
				<h4 class="header-title">Example :</h4>
				<pre><?php echo htmlspecialchars($headers2); ?></pre>
			</div>
			
			<div class="margin-bottom-30 margin-top-30">
				<h4 class="header-title">Example :</h4>
				<pre><?php echo htmlspecialchars($headers3); ?></pre>
			</div>
						
			<div class="divider-solid"></div>
			
			<h3>BUTTON STYLES</h3><br/>
			
			

			<h4>Button XS</h4>
			
			<a href="#">
				<span class="btn1 btn1-xs btn1-dark">Dark Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xs btn1-default">Default Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xs btn1-red">Red Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xs btn1-blue">Blue Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xs btn1-orange">Orange Button</span>
			</a>
			
			
			<h4>Button SM</h4>
			
			<a href="#">
				<span class="btn1 btn1-sm btn1-dark">Dark Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-sm btn1-default">Default Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-sm btn1-red">Red Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-sm btn1-blue">Blue Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-sm btn1-orange">Orange Button</span>
			</a>
				
			
			<h4>Button MD</h4>
			
			<a href="#">
				<span class="btn1 btn1-md btn1-dark">Dark Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-md btn1-default">Default Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-md btn1-red">Red Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-md btn1-blue">Blue Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-md btn1-orange">Orange Button</span>
			</a>
			
						
			<h4>Button LG</h4>
			
			<a href="#">
				<span class="btn1 btn1-lg btn1-dark">Dark Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-lg btn1-default">Default Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-lg btn1-red">Red Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-lg btn1-blue">Blue Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-lg btn1-orange">Orange Button</span>
			</a>
							
						
			<h4>Button XL</h4>
			
			<a href="#">
				<span class="btn1 btn1-xl btn1-dark">Dark Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xl btn1-default">Default Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xl btn1-red">Red Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xl btn1-blue">Blue Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xl btn1-orange">Orange Button</span>
			</a>
			
			
			<br/>
			
			
			<h4>Transparent Button XS</h4>
			
			<a href="#">
				<span class="btn1 btn1-xs btn1-dark-no-bg">Dark Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xs btn1-default-no-bg">Default Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xs btn1-red-no-bg">Red Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xs btn1-blue-no-bg">Blue Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xs btn1-orange-no-bg">Orange Button</span>
			</a>
			
			
			<h4>Transparent Button SM</h4>
			
			<a href="#">
				<span class="btn1 btn1-sm btn1-dark-no-bg">Dark Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-sm btn1-default-no-bg">Default Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-sm btn1-red-no-bg">Red Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-sm btn1-blue-no-bg">Blue Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-sm btn1-orange-no-bg">Orange Button</span>
			</a>
			
			
			<h4>Transparent Button MD</h4>
			
			<a href="#">
				<span class="btn1 btn1-md btn1-dark-no-bg">Dark Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-md btn1-default-no-bg">Default Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-md btn1-red-no-bg">Red Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-md btn1-blue-no-bg">Blue Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-md btn1-orange-no-bg">Orange Button</span>
			</a>
			
			
			<h4>Transparent Button LG</h4>
			
			<a href="#">
				<span class="btn1 btn1-lg btn1-dark-no-bg">Dark Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-lg btn1-default-no-bg">Default Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-lg btn1-red-no-bg">Red Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-lg btn1-blue-no-bg">Blue Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-lg btn1-orange-no-bg">Orange Button</span>
			</a>
			
						
			
			<h4>Transparent Button XL</h4>
			
			<a href="#">
				<span class="btn1 btn1-xl btn1-dark-no-bg">Dark Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xl btn1-default-no-bg">Default Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xl btn1-red-no-bg">Red Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xl btn1-blue-no-bg">Blue Button</span>
			</a>
			
			<a href="#">
				<span class="btn1 btn1-xl btn1-orange-no-bg">Orange Button</span>
			</a>
												
		
			
			<div class="margin-bottom-30 margin-top-30">
				<h4 class="header-title">Example :</h4>
				<pre><?php echo htmlspecialchars($buttons); ?></pre>
			</div>
			
			<div class="margin-bottom-30 margin-top-30">
				<h4 class="header-title">Example :</h4>
				<pre><?php echo htmlspecialchars($buttons2); ?></pre>
			</div>
			
			<div class="divider-solid"></div>
			
			<h3>BLOCKQUOTE STYLES</h3>		
			
			<div class="col-md-6">
				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>	
				
				<blockquote class="bg-gray">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>			
				</blockquote>	
											
			</div>
			
			<div class="col-md-6">
				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>			
				</blockquote>	
				
				<blockquote class="bg-gray">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>
				
			</div>	

			<div class="col-md-6">
				<blockquote class="blockquote-blue">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>	
				
				<blockquote class="blockquote-blue bg-gray">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>			
				</blockquote>	
											
			</div>
			
			<div class="col-md-6">
				<blockquote class="blockquote-blue">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>			
				</blockquote>	
				
				<blockquote class="blockquote-blue bg-gray">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>
				
			</div>	
			
			<div class="col-md-6">
				<blockquote class="blockquote-red">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>	
				
				<blockquote class="blockquote-red bg-gray">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>			
				</blockquote>	
											
			</div>
			
			<div class="col-md-6">
				<blockquote class="blockquote-red">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>			
				</blockquote>	
				
				<blockquote class="blockquote-red bg-gray">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>
				
			</div>	
			
			<div class="col-md-6">
				<blockquote class="blockquote-orange">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>	
				
				<blockquote class="blockquote-orange bg-gray">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>			
				</blockquote>	
											
			</div>
			
			<div class="col-md-6">
				<blockquote class="blockquote-orange">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>			
				</blockquote>	
				
				<blockquote class="blockquote-orange bg-gray">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>
				
			</div>	
			
			<div class="col-md-6">
				<blockquote class="blockquote-dark">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>	
				
				<blockquote class="blockquote-dark bg-gray">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>			
				</blockquote>	
											
			</div>
			
			<div class="col-md-6">
				<blockquote class="blockquote-dark">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>			
				</blockquote>	
				
				<blockquote class="blockquote-dark bg-gray">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>
				
			</div>	
			
			<div class="col-md-6">
				<h4>Example :</h4>
				<pre><?php echo htmlspecialchars($blockquote); ?></pre>				
			</div>
			
			<div class="col-md-6">
				<h4>Example :</h4>
				<pre><?php echo htmlspecialchars($blockquote2); ?></pre>
			</div>	
			<div class="clearfix"></div>
			
			<div class="divider-solid"></div>
			
			<h3>LIST STYLES</h3>
						
			<div class="col-md-3">
				<div class="padding-20 margin-bottom-20">
					<h4 class="header-title">Blue List - Circle</h4>
					<ul class="list list-blue list-circle">
						<li>Lorem Ipsum
							<ul>
								<li>List 1</li>
								<li>List 2</li>
							</ul>
						</li>
						<li>Dolor Sit Amet</li>
						<li>Consectetur Adipiscing</li>
						<li>Integer Posuere</li>
						<li>Ante Erat</li>
					</ul>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="padding-20 margin-bottom-20">
					<h4 class="header-title">Green List - Star</h4>
					<ul class="list list-green list-star">
						<li>Lorem Ipsum
							<ul>
								<li>List 1</li>
								<li>List 2</li>
							</ul>
						</li>
						<li>Dolor Sit Amet</li>
						<li>Consectetur Adipiscing</li>
						<li>Integer Posuere</li>
						<li>Ante Erat</li>
					</ul>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="padding-20 margin-bottom-20">
					<h4 class="header-title">Dark List - Arrow</h4>
					<ul class="list list-dark list-arrow">
						<li>Lorem Ipsum
							<ul>
								<li>List 1</li>
								<li>List 2</li>
							</ul>
						</li>
						<li>Dolor Sit Amet</li>
						<li>Consectetur Adipiscing</li>
						<li>Integer Posuere</li>
						<li>Ante Erat</li>
					</ul>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="padding-20 margin-bottom-20">
					<h4 class="header-title">Red List - Check</h4>
					<ul class="list list-red list-check">
						<li>Lorem Ipsum
							<ul>
								<li>List 1</li>
								<li>List 2</li>
							</ul>
						</li>
						<li>Dolor Sit Amet</li>
						<li>Consectetur Adipiscing</li>
						<li>Integer Posuere</li>
						<li>Ante Erat</li>
					</ul>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="padding-20 margin-bottom-20">
					<h4 class="header-title">Orange List - Caret</h4>
					<ul class="list list-orange list-caret">
						<li>Lorem Ipsum
							<ul>
								<li>List 1</li>
								<li>List 2</li>
							</ul>
						</li>
						<li>Dolor Sit Amet</li>
						<li>Consectetur Adipiscing</li>
						<li>Integer Posuere</li>
						<li>Ante Erat</li>
					</ul>
				</div>
			</div>
						
			<div class="col-md-9">
				<div class="padding-20 margin-bottom-20">
					<h4 class="header-title">Example :</h4>
					<pre><?php echo htmlspecialchars($list1); ?></pre>
				</div>
			</div>	
			
			<div class="clearfix"></div>
			
			<div class="divider-solid"></div>
						
			<h3>TEXT STYLES</h3><br/>
			<h4>Text Dark</h4>
			<p class="text-dark">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. 
			</p>
			
			<h4>Text Green</h4>
			<p class="text-green">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. 
			</p>
			
			<h4>Text Blue</h4>
			<p class="text-blue">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. 
			</p>
			
			<h4>Text Red</h4>
			<p class="text-red">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. 
			</p>
			
			<h4>Text Orange</h4>
			<p class="text-orange">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. 
			</p>
			
			<div class="divider-solid"></div>
			
			<h3>TEXT SIZES</h3><br/>
			
			<h4>Text XXS</h4>
			<p class="text-xxs">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. 
			</p>
			
			<h4>Text XS</h4>
			<p class="text-xs">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. 
			</p>
			
			<h4>Text SM</h4>
			<p class="text-sm">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. 
			</p>
			
			<h4>Text MD</h4>
			<p class="text-md">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. 
			</p>
			
			<h4>Text LG</h4>
			<p class="text-lg">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. 
			</p>
			
			<h4>Text XL</h4>
			<p class="text-xl">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. 
			</p>
			
			<h4>Text XXL</h4>
			<p class="text-xxl">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique lectus convallis, rhoncus sapien vel, mattis orci. Aliquam et mollis ligula, ac facilisis libero. Phasellus sagittis metus in quam ornare, nec rhoncus nisl scelerisque. 
			</p>
			
			<div class="margin-bottom-30 margin-top-30">
				<h4 class="header-title">Example :</h4>
				<pre><?php echo htmlspecialchars($text); ?></pre>
			</div>
							
			<div class="divider-solid"></div>
			
			<h3>PROGRESS BARS</h3><br/>
			
			<h4>progress-bar-info</h4>
			<div class="progress">
				<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
			</div>
			
			<h4>progress-bar-success</h4>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
			</div>
			
			<h4>progress-bar-warning</h4>
			<div class="progress">
				<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%</div>
			</div>
			
			<h4>progress-bar-danger</h4>
			<div class="progress">
				<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
			</div>
			
			<br/>
			<h4 class="header-title">Example :</h4>
			<pre><?php echo htmlspecialchars($progress_bar); ?></pre>
			
		</div>	
	</div><!--container-->
		
	<div class="clearfix"></div>

	<!-- Footer Begin -->
	<div class="onepage-footer">		
		<div class="container">		
			<div class="col-md-12">
				<div class="col-md-6">
					<p>Copyright © 2016 Minti</p>
				</div>
				
				<div class="col-md-6 padding-0">
				
					<ul class="op-contact-social">
					
						<li>
							<a href="#" class="fb-icon"><i class="fa fa-facebook"></i></a>
						</li>
						
						<li>
							<a href="#" class="twitter-icon"><i class="fa fa-twitter"></i></a>
						</li>
						
						<li>
							<a href="#" class="google-icon"><i class="fa fa-google-plus"></i></a>
						</li>	
						
						<li>
							<a href="#" class="linkedin-icon"><i class="fa fa-linkedin"></i></a>
						</li>					
						
					</ul>
					<div class="clearfix"></div>
				</div>
				
			</div>		
		</div>
	</div>
	<!-- Footer End -->
	
	<!-- JAVASCRIPT FILES
	===============================================================-->
	<!-- JQUERY -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Menuzord -->
	<script type="text/javascript" src="js/menuzord.js"></script>		
	<!-- ToTop -->
	<script type="text/javascript" src="js/toTop.js"></script>
	<!-- Bootstrap.min.js -->
	<script src="js/bootstrap.min.js"></script> 
	<!-- Smooth-Scrool.js -->
	<script src="js/smooth-scroll.js"></script> 
	<!-- typography.js -->
	<script type="text/javascript" src="js/customs/typography.js"></script> 

</body>
</html>