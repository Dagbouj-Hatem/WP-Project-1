<?php
// this file contains the contents of the popup window
/* FindWPConfig - searching for a root of wp */
function FindWPConfig($directory){
	global $confroot;
	foreach(glob($directory."/*") as $f){
		if (basename($f) == 'wp-config.php' ){
			$confroot = str_replace("\\", "/", dirname($f));
			return true;
		}
		if (is_dir($f)){
		$newdir = dirname(dirname($f));
		}
	}
	if (isset($newdir) && $newdir != $directory){
		if (FindWPConfig($newdir)){
			return false;
		}	
	}
	return false;
}
if (!isset($table_prefix)){
	global $confroot;
	FindWPConfig(dirname(dirname(__FILE__)));
	include_once $confroot."/wp-load.php";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php _e("Insert Shortcode",'weblizar');?></title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo home_url(); ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
<style type="text/css" src="<?php echo home_url(); ?>/wp-includes/js/tinymce/themes/advanced/skins/wp_theme/dialog.css"></style>
<link rel="stylesheet" href="css/shortcode_tinymce.css" />

<script>
 jQuery(document).ready(function($){
	//select shortcode
	$("#shortcode-select").change(function WLselect() {
		  var shortcodeSelectVal = "";
		  var shortcodeSelectText = "";
		  $("#shortcode-select option:selected").each(function WLselect() {
				shortcodeSelectVal += $(this).val();
				shortcodeSelectText += $(this).text();
			});
			  
		  if( shortcodeSelectVal != 'default')
		  {	$('#selected-shortcode').load('types/'+shortcodeSelectVal+'.php',
			function WLselect(){
				$('.shortcode-editor-title').text(shortcodeSelectText + ' Editor');
			});
		  } else {
			$('#selected-shortcode').text('Select Your Shortcode Above To Get Started').addClass('padding-bottom');
			$('.shortcode-editor-title').text('Shortcode Editor');
		  }
		})
		.trigger('change');	
 });
</script>    
</head>
<body>
<div id="wpex-shortcodes-popup">

	<h2 id="shortcode-selector-title"><?php _e("Shortcode Selector",'weblizar');?></h2>

	<div id="select-shortcode">
    	<div id="select-shortcode-inner">
    
		<form action="/" method="get" accept-charset="utf-8">
			<div>
				<select name="shortcode-select" id="shortcode-select" size="1">
               		<option value="default" selected="selected"><?php _e("Shortcodes",'weblizar');?></option> 
					<option value="accordion"><?php _e("Accordion",'weblizar');?></option>	
					<option value="alert"><?php _e("Alert",'weblizar');?></option>					
               		<option value="button"><?php _e("Button",'weblizar');?></option>
					<option value="column"><?php _e("Column",'weblizar');?></option>					
					<option value="drop"><?php _e("Drop-Caps",'weblizar');?></option>
					<option value="heading"><?php _e("Heading",'weblizar');?></option>					
					<option value="panel"><?php _e("Panel",'weblizar');?></option>
					<option value="popover"><?php _e("Popover",'weblizar');?></option>
					<option value="progressbar"><?php _e("Progress bar",'weblizar');?></option>
					<option value="tabs"><?php _e("Tabs",'weblizar');?></option>		
					<option value="tooltip"><?php _e("Tool Tip",'weblizar');?></option>
					<option value="portfolio"><?php _e("Portfolio",'weblizar');?></option>
					<option value="blog"><?php _e("Blog",'weblizar');?></option>					
				</select>
			</div>
		</form>
        </div>
        <!-- /select-shortcode-inner -->
	</div>
    <!-- /select-shortcode-wrap -->
    
    <h2 class="shortcode-editor-title"></h2>
	<div id="shortcode-editor">
    		<div id="shortcode-editor-inner" class="clearfix">
				<div id="selected-shortcode"> </div>
			</div>       
	</div>
</div>
</body>
</html>