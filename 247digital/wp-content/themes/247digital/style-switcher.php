<!-- Switcher CSS -->
	<link href="<?php echo WL_TEMPLATE_DIR_URI; ?>/css/switcher/layout-responsive.css" rel="stylesheet">
    <link href="<?php echo WL_TEMPLATE_DIR_URI; ?>/css/switcher/switcher.css" rel="stylesheet">
    <link href="<?php echo WL_TEMPLATE_DIR_URI; ?>/css/switcher/spectrum.css" rel="stylesheet">
	
	<!--Switcher Js-->
	<script type="text/javascript" src="<?php echo WL_TEMPLATE_DIR_URI; ?>/js/switcher/spectrum.js"></script>
    <script type="text/javascript" src="<?php echo WL_TEMPLATE_DIR_URI; ?>/js/switcher/switcher.js"></script>
	
<!--Scroll To Top--> 
<a href="#" title="Go Top" class="enigma_scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/Scroll To Top--> 

<!--Switcher Style-->
      <section id="style-switcher">
        <h2>Style Switcher <a href="#"><i class="fa fa-gear"></i></a></h2>
        <div>
           <h3>Predefined Colors</h3>
           <ul id="colors" class="colors">
				<li>
					<a title="Default" class="default" href="#" onclick="changeCSS('default.css');"></a>
				</li>
				
				<li>
					<a  class="red" href="#" onclick="changeCSS('red.css');"></a>
				</li>
				
					<li>
					<a  class="skyblue" href="#" onclick="changeCSS('skyblue.css');"></a>
				</li>
				<li>
					<a  class="green" href="#" onclick="changeCSS('green.css');"></a>
				</li>
				<li>
					<a  class="blue" href="#" onclick="changeCSS('blue.css');"></a>
				</li>
				
				<li>
					<a  class="orange" href="#" onclick="changeCSS('orange.css');"></a>
				</li>
				<li>
					<a  class="purple" href="#" onclick="changeCSS('purple.css');"></a>
				</li>
				<li>
					<a  class="brown" href="#" onclick="changeCSS('brown.css');"></a>
				</li>
				<li>
					<a  class="litered" href="#" onclick="changeCSS('litered.css');"></a>
				</li>
				<li>
					<a  class="pink" href="#" onclick="changeCSS('pink.css');"></a>
				</li>
				
           </ul>
          <h3>Header Position</h3>
           <div class="layout-style">
              <select autocomplete="off" id="header-position"  onchange="headerchange();">
                 <option value="fixed">Fixed</option>
                 <option value="static">Static</option>
              </select>
           </div>
		   <h3>Layout Style</h3>
           <div class="layout-style">
              <select autocomplete="off" id="layout-style" >
                 <option value="1">Wide Layout</option>
                 <option value="2">Boxed Layout</option>
              </select>
           </div>
           <h3>Background Image</h3>
           <ul id="bg" class="colors bg">
              <li><a class="bg1" href="#"></a></li>
              <li><a class="bg2" href="#"></a></li>
              <li><a class="bg3" href="#"></a></li>
              <li><a class="bg4" href="#"></a></li>
              <li><a class="bg5" href="#"></a></li>
              <li><a class="bg6" href="#"></a></li>
              <li><a class="bg7" href="#"></a></li>
              <li><a class="bg8" href="#"></a></li>
              <li><a class="bg9" href="#"></a></li>
              <li><a class="bg10" href="#"></a></li>
			  <li><a class="bg11" href="#"></a></li>
              <li><a class="bg12" href="#"></a></li>
              <li><a class="bg13" href="#"></a></li>
              <li><a class="bg14" href="#"></a></li>
              <li><a class="bg15" href="#"></a></li>
           </ul>
        </div>
     </section>
	<script>
	function changeCSS(cssFile) {
		var oldlink = document.getElementById("color-css-css"); 
        var newlink = document.createElement("link");
        newlink.setAttribute("id", "color-css-css");
		newlink.setAttribute("rel", "stylesheet");
        newlink.setAttribute("type", "text/css");
        newlink.setAttribute("href", "<?php echo WL_TEMPLATE_DIR_URI; ?>/css/"+ cssFile );		
        document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);		
    }
	
	function headerchange()
	{
		var headerclass =jQuery('#header-position').val();		
		if(headerclass =="static"){
        jQuery(".navigation_menu").attr('id','');
		}
		if(headerclass =="fixed"){
		 jQuery(".navigation_menu").attr('id','enigma_nav_top');
		}
		
	}
	jQuery(document).ready(function() 
	 {
		jQuery('#style-switcher').css( "left" ,'0');  
	 });
	 
	</script>
<!--/Switcher Style-->