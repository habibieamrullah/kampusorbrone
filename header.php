<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo("name") ?> | <?php bloginfo( 'description' ); ?></title>
		
		<link rel="stylesheet" href="<?php echo bloginfo("stylesheet_directory"); ?>/css/font-awesome.css">
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Georama&display=swap" rel="stylesheet">
		
		<style>
		
			body{
				margin: 0;
				font-family: 'Georama', sans-serif;
			}
			
			h1, h2, h3, h4, h5, p{
				margin: 0px;
				margin-bottom: 10px;
			}
			
			a{
				color: inherit;
				text-decoration: none;
			}
			
			::placeholder{
				color: #e0e0e0;
			}
		
			#header{
				background-color: <?php echo get_option("kampusorborne_wh"); ?>;
				color: white;
				padding: 20px;
				
				position: sticky;
				top: 0;
			}
			
			#scrollToTop{
				position: fixed;
				right: 0;
				bottom: 0;
				font-size: 30px;
				color: <?php echo get_option("kampusorborne_backtotop") ?>;
				padding: 30px;
				display: none;
				cursor: pointer;
			}
			
			#container{
				padding: 20px;
				
			}
			
			#gfooter{
				background-color: <?php echo get_option("kampusorborne_wgf"); ?>;
				color: <?php echo get_option("kampusorborne_wgftext") ?>;
				padding: 20px;
			}
			
			#footer{
				background-color: <?php echo get_option("kampusorborne_wf"); ?>;
				color: <?php echo get_option("kampusorborne_wftext") ?>;
				padding: 20px;
				text-align: center;
				font-size: 12px;
			}
			
			#formpencarian{
				position: fixed;
				top: 0; left: 0; right: 0; bottom: 0;
				background-color: <?php echo get_option("kampusorborne_sbg") ?>;
				display: none;
			}
			
			
			
			
			
			/*Header Menu*/

			.header-menu ul {
				margin: 0;
				list-style: none;
				padding: 0;
			}

			.header-menu ul li {
				float: left;
				line-height: 38px;
				margin: 0 1px;
				position: relative;
			}

			.header-menu ul li a {
				margin: 0 1px;
				padding: 0 15px;
				display: block;
				color: white;
				text-transform: uppercase;
			}

			.header-menu .sub-menu li a,
			.header-menu ul.children li a {
				line-height: 1.5;
				padding: 10px 15px;
			}

			.header-menu ul li:hover>a,
			.header-menu ul li.current-menu-item>a,
			.header-menu ul li.current_page_item>a,
			.header-menu ul li.current-menu-ancestor>a,
			.header-menu ul li.focus>a {
				color: #ededed;
			}

			.header-menu ul.sub-menu,
			.header-menu ul.children {
				background: black none repeat scroll 0 0;
				min-width: 200px;
				position: absolute;
				top: 100%;
				z-index: 99;
				left: -9999rem;
				opacity: 0;
				-webkit-transform: translateY(0.6rem);
				-ms-transform: translateY(0.6rem);
				-o-transform: translateY(0.6rem);
				transform: translateY(0.6rem);
				-webkit-transition: opacity 0.15s linear, transform 0.15s ease, left 0s 0.15s;
				-o-transition: opacity 0.15s linear, transform 0.15s ease, left 0s 0.15s;
				transition: opacity 0.15s linear, transform 0.15s ease, left 0s 0.15s;
			}

			.header-menu ul li:hover>ul.sub-menu,
			.header-menu ul li:hover>ul.children,
			.header-menu ul li.focus>ul.sub-menu,
			.header-menu ul li.focus>ul.children {
				left: 0;
				opacity: 1;
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				-o-transform: translateY(0);
				transform: translateY(0);
				-webkit-transition: opacity 0.15s linear, transform 0.15s ease, right 0s 0.15s;
				-o-transition: opacity 0.15s linear, transform 0.15s ease, right 0s 0.15s;
				transition: opacity 0.15s linear, transform 0.15s ease, right 0s 0.15s;
			}

			.header-menu ul.sub-menu li,
			.header-menu ul.children li {
				float: none;
				display: block;
				border-bottom: 1px solid #e1e1e1;
			}

			.header-menu ul.sub-menu li:last-child,
			.header-menu ul.children li:last-child {
				border: none;
			}

			.header-menu ul.sub-menu li ul,
			.header-menu ul.children li ul {
				right: 9999em;
				left: auto !important;
				top: 0% !important;
				-webkit-transition: opacity 0.15s linear, transform 0.15s ease, right 0s 0.15s;
				-o-transition: opacity 0.15s linear, transform 0.15s ease, right 0s 0.15s;
				transition: opacity 0.15s linear, transform 0.15s ease, right 0s 0.15s;
			}

			.header-menu ul.sub-menu li:hover>ul,
			.header-menu ul.children li:hover>ul,
			.header-menu ul.sub-menu li.focus>ul,
			.header-menu ul.children li.focus>ul {
				right: -100%;
				left: auto !important;
				top: 0% !important;
				-webkit-transition: opacity 0.15s linear, transform 0.15s ease, left 0s 0.15s;
				-o-transition: opacity 0.15s linear, transform 0.15s ease, left 0s 0.15s;
				transition: opacity 0.15s linear, transform 0.15s ease, left 0s 0.15s;
			}

			.header-menu li.menu-item-has-children>a:after,
			.header-menu li.page_item_has_children>a:after {
				content: "\f107";
				font-family: FontAwesome;
				position: absolute;
				right: 15px;
				top: 2px;
			}

			.header-menu ul.sub-menu li.menu-item-has-children>a::after,
			.header-menu ul.sub-menu li.page_item_has_children>a::after {
				top: 10px;
			}

			.header-menu ul.sub-menu li.menu-item-has-children>a:after,
			.header-menu ul.children li.page_item_has_children>a:after {
				content: "\f105";
			}

			.header-menu ul li.menu-item-has-children a,
			.header-menu ul li.page_item_has_children a {
				margin-right: 15px;
			}
			/*End of Header Menu*/
			
			
	
		
		</style>
		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		
	</head>
	<body>
	
	<div id="header">
		
		<div style="display: table; width: 100%;">
			<div style="display: table-cell; vertical-align: middle;">
				<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				if ( has_custom_logo() ) {
						echo '<a href="' .get_site_url(). '"><img src="' . $logo[0] . '" alt="' . get_bloginfo( 'name' ) . '" height="64px" style="margin-top: 10px;"></a>';
				} else {
						echo '<h1><a href="' .get_site_url(). '">'. get_bloginfo( 'name' ) .'</a></h1><h3>' . get_bloginfo( 'description' ) . '</h3>';
				}
				?>
			</div>
			
			<div style="display: table-cell; vertical-align: middle;">
			<?php
			//Showing Header Menu, for header block of your theme
			wp_nav_menu(array(
				'theme_location' => 'kampusorborne-headernavigation',
				'container_class' => 'header-menu'
			));
			?>
			</div>
			
			<div style="cursor: pointer; display: table-cell; width: 10%; text-align: right; font-size: 20px; vertical-align: middle;" onclick="tampilkanFormPencarian()">
				<i class="fa fa-search"></i>
			</div>
		</div>
		
	</div>
	
	<div id="container">