<!DOCTYPE html>
<html lang="en">
<?php 
	$wl_theme_options = get_option('enigma_options_pro');
?>
	<head>
	<meta charset="utf-8">
	<title>
		<?php bloginfo( 'name' ); $site_description = get_bloginfo( 'description' ); ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/bootstrap.css'; ?>" />
	<style>
		body {
		padding-top:9%;
		padding-bottom:9%;
		<?php if($wl_theme_options['coming_soon_img']==""){?>
		background:	<?php echo('#3498db ');?>  ;
        <?php } 
		else{
		?>
		 background:url('<?php echo $wl_theme_options['coming_soon_img']; ?>') ;
		 background-repeat: no-repeat;
         background-attachment: fixed;
         background-position: top center;
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
		 <?php } 
		 ?>
		 
		  }
		  .weblizar_maintenance{
			text-align:center;
			color:#fff;
		  }
		  
		  .maintenance_page_title{
				font-family: "Dosis", sans-serif;
				color: #fff;
				font-size: 60px;
				line-height: 1.5;
				text-align: center;
				padding-bottom: 10px;
				padding-top: 10px;
				margin-bottom: 0px;
				text-transform: uppercase;
			
			}
			
			
			.maintenance_page_title small {
				color: rgba(255, 255, 255, 0.9);
				font-size: 30px;
				line-height: 40px;
				font-weight: 400;
				display:block;
				text-transform: none;
			}
			.separator{
			height: 4px;
			margin: 27px auto 0;
			width: 300px;
			background:#ffffff;
			}
	</style>
	<!-- ==============================================
	Fonts
	=============================================== -->
	<link href='http://fonts.googleapis.com/css?family=Dosis:600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	
</head>
<body>
<div class="container">
	<div class="weblizar_maintenance">
		<div class="separator" id=""></div>
		<h1 class="maintenance_page_title"><?php echo $wl_theme_options['coming_soon_heading']; ?>
		<small><?php echo esc_attr($wl_theme_options['coming_soon_desc']);  ?></small>
		</h1>
		<div class="separator" id=""></div>
		
	</div>
</div>
</body>
</html>