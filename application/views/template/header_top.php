<?php
	echo doctype('html5');
	
	$meta = array(
	        array('name' => 'robots', 'content' => 'no-cache'),
	        array('name' => 'description', 'content' => 'Quality Arusha Chicks'),
	        array('name' => 'keywords', 'content' => 'Chicks, Chicken, Arusha, Quality'),
	        array('name' => 'author', 'content' => 'Yoteyote'),
	        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv'),
			array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0')
	    );
	
	echo meta($meta);
?>
<html lang="en">
	<head>
		<?php echo link_tag('assets/img/favicon.png', 'shortcut icon', 'image/png'); ?>
		
		<title>Quality Arusha Chicks</title>

		<?php
			// Bootstrap CSS
			echo link_tag('assets/css/mystyles.css');
			
			// Bootstrap Theme
			echo link_tag('assets/css/bootstrap-theme.css');
			
			/******* EXTERNAL CSS **********/
			
			// Font Icon
			echo link_tag('assets/css/elegant-icons-style.css');
			echo link_tag('assets/font-awesome/css/font-awesome.css');
			
			/******* CUSTOM STYLES *********/
			
			echo link_tag('assets/css/style.css');
			echo link_tag('assets/css/style-responsive.css');
		
		?>

    	<!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    	<!--[if lt IE 9]>
    		<script src="js/html5shiv.js"></script>
    		<script src="js/respond.min.js"></script>
    	<![endif]-->
</head>