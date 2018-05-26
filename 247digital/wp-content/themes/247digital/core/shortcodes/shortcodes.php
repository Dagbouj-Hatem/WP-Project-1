<?php	
//get shortcodes pop-up editor == in the dashboard only, would be silly to load on the front end
if(defined('WP_ADMIN') && WP_ADMIN ) {	require_once('shortcode_popup.php'); }
/*--button--*/
function parse_shortcode_content( $content ) {

   /* Parse nested shortcodes and add formatting. */
	$content = trim( do_shortcode( shortcode_unautop( $content ) ) );

	/* Remove '' from the start of the string. */
	if ( substr( $content, 0, 4 ) == '' )
		$content = substr( $content, 4 );

	/* Remove '' from the end of the string. */
	if ( substr( $content, -3, 3 ) == '' )
		$content = substr( $content, 0, -3 );

	/* Remove any instances of ''. */
	$content = str_replace( array( '<p></p>' ), '', $content );
	$content = str_replace( array( '<p>  </p>' ), '', $content );
	return $content;
}
/*--------------------------------------*/
/*	Row
/*--------------------------------------*/

function wl_shortcode_row($params, $content = null) {
    extract(shortcode_atts(array(
        'class' => ''
    ), $params));	
    $result = '<div class="row">';
    $content = str_replace("]<br />", ']', $content);
    $content = str_replace("<br />\n[", '[', $content);
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}
add_shortcode('row', 'wl_shortcode_row');
/*--------------------------------------*/
/*	Columns
/*--------------------------------------*/
function wl_column_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
	  	'offset' =>'',
      	'size' => 'col-md-6',
	  	//'position' =>'first'
      ), $atts ) );	
	$atts = shortcode_atts( array(	'offset' => '','size' => 'col-md-6'), $atts );
	$out = '<div class="'.$size.'"><p>' . do_shortcode($content). '</p></div>';
	 return $out;
}
add_shortcode('column', 'wl_column_shortcode');


function wl_button_shortcode( $atts,$content = null ){ 
   $atts = shortcode_atts(
    array(	'style' => '',
			'size' => 'small',
			'target'=> 'self',
			'url' => '#',
			'textdata' => 'Button'
		), $atts );		 
	$size = $atts['size'];
	$style = $atts['style'];
	$url = $atts['url'];
	$target = $atts['target'];	
	$target = ($target == 'blank') ? ' target="_blank"' : '';
	$style = ($style) ? ' '.$style : ''; 
	$out = '<a' .$target. ' class="' .$style.' '. $size.'  " href="' .$url. '" target="' .$target. '">' .do_shortcode($content). '</a>';
	return $out;
}

add_shortcode('button', 'wl_button_shortcode');

/*-----------Alert short code-----------*/
function wl_alert_shortcode( $atts, $content = null )
{
	$atts = shortcode_atts(  array(
							'alert_heading' => 'Please enter alert heading',     
							'alert_text' => 'Please enter text in alert text',
							'alert_style'=>'',
							
							),$atts 
						);
	$alert_heading = $atts['alert_heading'];
	$alert_text = $atts['alert_text'];
	$alert_style = $atts ['alert_style'];
	
	$out='<div class="'.$alert_style.'"><button type="button" class="close" data-dismiss="alert">X</button>
		   <strong>'.$alert_heading.'</strong>&nbsp;&nbsp;'.$alert_text. do_shortcode($content).'</div><div class="space-sep20"></div>';	
	return $out;
}
add_shortcode( 'alert', 'wl_alert_shortcode' );

/*-----------Dropcap-----------*/
function wl_dropcp_shortcode( $atts, $content = null ){
    $atts = shortcode_atts(array(      	
		'dropcp_style'=>'enigma_dropcape_simple',
		'dropcp_text'=>'hasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet Vix sumo ferri an. pfs adodio fugit delenit ut qu.',
		'dropcp_first_letter' => 'P',
		'echo'=>false,
		),
      $atts );
	
	$dropcp_text = $atts['dropcp_text'];
	$dropcp_style = $atts ['dropcp_style'];
	$dropcp_first_letter = $atts ['dropcp_first_letter'];	
	$out='<p class="'.$dropcp_style.'"><span class="first">'.$dropcp_first_letter.'</span>'.$dropcp_text.'</p>';	
	return $out;
}
add_shortcode( 'dropcap', 'wl_dropcp_shortcode' );


/******* heading shortcode **********/
function wl_heading_function ($atts , $content = null)
{
	$atts= shortcode_atts(array (
						'heading_style' => 'h1',
						'title' => 'Heading'						
					),$atts );
	
	$heading_style = $atts['heading_style'];
	$title = $atts['title'];	
	$out ='<div class="enigma_heading_section"><'.$heading_style.'>'.$title.'</'.$heading_style.'></div>';
	return $out;
}
add_shortcode('heading','wl_heading_function');

/*--------------------------------------*/
/*	Accordian
/*--------------------------------------*/
function wl_accordion_shortcode( $atts, $content = null ) {
	$atts = shortcode_atts(  array(
							'fields'=>'1',
							'accordian_title' => 'Accordions title',
							'accordian_text'=>'Accordions Description',
							'echo'=>false,							
							),$atts 
						);
	$fields = $atts['fields'];
	$accordian_title = $atts['accordian_title'];
	$title = explode('~', $accordian_title);
	$accordian_text = $atts ['accordian_text'];
	$text = explode('~', $accordian_text);
	$rand = rand(1, 100);
	
	$out ='';
	$out .='<div class="enigma_accordion_section"><div id="accordion'.$rand.'" class="panel-group">';
	for($i=1; $i<=$fields; $i++)
	{	//$title[$i] = preg_replace("/__/", ',', $title[$i]);
		//$text[$i] = preg_replace("/__/", ',', $text[$i]);
		$changetitle = preg_replace('~[^A-Za-z\d\s-]+~u', 'wr', $title[$i]);
		$changetitle = str_replace(' ', 'tt', $changetitle);
		if($i=='1')
		{ $out .='<div class="panel panel-default">
					<div class="panel-heading">					  
					  <a data-toggle="collapse" data-parent="#accordion'.$rand.'" href="#'.$changetitle.'">'.$title[$i].'</a>
					</div>					
					<div id="'.$changetitle.'" class="panel-collapse collapse in">
					  <div class="panel-body">
						<p class="accordian_content">'.$text[$i].'</p>
					  </div>
					</div>				
				</div>';
		}
		else{		
		$out .='<div class="panel panel-default">
					<div class="panel-heading">					  
					  <a data-toggle="collapse" data-parent="#accordion'.$rand.'" href="#'.$changetitle.'">'.$title[$i].'</a>
					</div>					
					<div id="'.$changetitle.'" class="panel-collapse collapse">
					  <div class="panel-body">
						<p class="accordian_content">'.$text[$i].'</p>
					  </div>
					</div>				
				</div>';
		}
	} 
	$out .='</div></div>';
	return $out;
}
add_shortcode('accordian', 'wl_accordion_shortcode');


/*-----------Tabs short code-----------*/
if (!function_exists('wl_tabgroup')) {
	function wl_tabgroup( $atts, $content = null ) 
	{	$atts = shortcode_atts(array('tabs_title' => 'This is tabs heading','echo'=>false), $atts );	
		$tabs_title1 = $atts['tabs_title'];
		// Extract the tab titles for use in the tab shortcode
		preg_match_all( '/tabs_title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );
		$tab_titles = array(); $wl_tabs_title =array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }			
		$output = '<div class="enigma_tabs_section" id="enigma_tabs_section">';		
		if( count($tab_titles) )
		{	$output .= '<ul class="nav nav-tabs" id="myTab-'.preg_replace('~[^A-Za-z\d\s-]+~u', 'wr', $tabs_title1).'">';
			$count=0;			
			foreach( $tab_titles as $tabs_title )
			{	if($count==0){
				$wl_tabs_title[0] = str_replace(' ', 'wem', $tabs_title[0]);
				  $output .= '<li class="active" ><a data-toggle="tab" href="#'.preg_replace('~[^A-Za-z\d\s-]+~u', 'wr', $wl_tabs_title[0]).'">'.$tabs_title[0].'</a></li>';
				 } else {
				  $wl_tabs_title[0] = str_replace(' ', 'wem', $tabs_title[0]);	
				  $output .= '<li class="" ><a data-toggle="tab" href="#'.preg_replace('~[^A-Za-z\d\s-]+~u', 'wr', $wl_tabs_title[0]).'">'.$tabs_title[0].'</a></li>';
				 } 
				  $count++;
			}		    
			$output .= '</ul><div id="myTabContent" class="tab-content">';
			$output .= do_shortcode( $content );			
		} 		 
		 $output .= '</div></div>';
		return $output;	
	}
	add_shortcode( 'tabgroup', 'wl_tabgroup' );
}
function wl_tabs_shortcode($atts, $content = null ){
	
	$atts = shortcode_atts(array('tabs_title' => 'This is tabs heading','tabs_text' => 'Description','wrap'=>'yes','echo'=>false), $atts );	
	$tabs_title = $atts['tabs_title'];
	$tabs_text = $atts['tabs_text'];
	$wrap = $atts['wrap'];
	$wl_tabs_title = str_replace(' ', 'wem', $tabs_title);
	static $c=0;  
	$out ='';
    if($c==0 || $wrap=="yes")
	{
		$out .='<div id="'.preg_replace('~[^A-Za-z\d\s-]+~u', 'wr', $wl_tabs_title).'" class="tab-pane fade active in">';
	}
	else{
		$out .='<div id="'.preg_replace('~[^A-Za-z\d\s-]+~u', 'wr', $wl_tabs_title).'" class="tab-pane fade">';
	}
	$c++;
	$out .='<p class="enigma_short_tabs_content">'.$tabs_text.'</p>'.do_shortcode( $content ).'</div>';			  
	return $out;	
}
add_shortcode( 'tabs', 'wl_tabs_shortcode' );
/*-----------Alert short code-----------*/

/*-----------panel short code-----------*/
function wl_panle_shortcode( $atts, $content = null )
{
	$atts = shortcode_atts(  array(
							'panel_heading' => 'Please enter panel heading',     
							'panel_text' => 'Please enter text in panel text',
							'panel_color'=>'panel-default',
							
							),$atts 
						);
	$panel_heading = $atts['panel_heading'];
	$panel_text = $atts['panel_text'];
	$panel_color = $atts ['panel_color'];
	
	$out='<div class="panel '.$panel_color.'">
			<div class="panel-heading">'.$panel_heading.'</div>
			<div class="panel-body">'.$panel_text.' </div>
		</div>';	
	return $out;
}
add_shortcode('panel', 'wl_panle_shortcode' );

/*-----------PROGRESS BARSt code-----------*/
function wl_progressbar_shortcode( $atts, $content = null )
{
	$atts = shortcode_atts(  array(
							'progress_heading' => 'Please enter progress heading',     
							'progress_percentag' => '85',
							),$atts 
						);
	$progress_heading = $atts['progress_heading'];
	$progress_percentag = $atts['progress_percentag'];	
	$out='<div class="enigma_process">	
				<p>'.$progress_heading .' '. $progress_percentag.'%</p>
				<div class="progress progress-striped ">
				  <div class="progress-bar"  role="progressbar" aria-valuenow="'.$progress_percentag.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$progress_percentag.'%">
				  </div>
				</div>
			</div>';	
	return $out;
}
add_shortcode('progressbar', 'wl_progressbar_shortcode' );

/*----------- tooltip code-----------*/
function wl_tooltip_shortcode( $atts, $content = null )
{
	$atts = shortcode_atts( array(	
	'tooltip_text' => 'tool tip Text',     
	'tooltip_over_text' => 'tool tip title',
	'tooltip_style' => 'top',
	), $atts );
	$tooltip_text = $atts['tooltip_text'];
	$tooltip_over_text = $atts['tooltip_over_text'];
	$tooltip_style = $atts['tooltip_style'];

	$out='<a href="#" data-original-title="'.$tooltip_over_text .'" title="" data-placement="'.$tooltip_style .'" data-toggle="tooltip" class="enigma_btn_small enigma_btn_white">'.$tooltip_text.'</a>';
	return $out;
}
add_shortcode('tooltip', 'wl_tooltip_shortcode' );

/*----------- POPOVERS  shortcode code-----------*/
function wl_popover_shortcode( $atts, $content = null )
{
	$atts = shortcode_atts(  array(
							'popover_text' => 'Popover on top',     
							'popover_over_text' => 'Popover on top',
							'popover_style' => 'top',
							),$atts 
						);
	$popover_text = $atts['popover_text'];
	$popover_over_text = $atts['popover_over_text'];
	$popover_style = $atts['popover_style'];
	
	$out='<button class="enigma_btn_small enigma_btn_white" data-toggle="popover" data-placement="'.$popover_style .'" title="" data-content="'.$popover_over_text .'" >'.$popover_text .'</button>';	
	return $out;
}
add_shortcode('popover', 'wl_popover_shortcode' );

function wl_portfolio_shortcode($atts, $content = null ){ ob_start();	
	$atts = shortcode_atts(
	array('portfolio_type' =>3,
		'port_cat_name' =>'all',
		'port_cat_show'=>'yes'), $atts );	
	$portfolio_type = $atts['portfolio_type'];
	$port_cat_name = $atts['port_cat_name'];
	$port_cat_name1 =$port_cat_name;
	$port_cat_show = $atts['port_cat_show'];
	$port_cat_name = explode(",", $port_cat_name);
	//print_r($port_cat_name);
	$wl_theme_options=get_option('enigma_options_pro');	
	if($wl_theme_options['light_box_style'] == 'photobox_a')
	{ $light_box_style = $wl_theme_options['light_box_style']; }
	else 
	{ $light_box_style = $wl_theme_options['light_box_style']; }
	if($port_cat_show=='yes') {
	?>
		<div class="row">
			<div class="col-md-12">
				<ul class="portfolio-filter nav nav-pills">
				<?php 
					foreach ($port_cat_name  as $tax_term) {
						$tax_term_name = str_replace(' ', '_', $tax_term);
						$tax_term_name = preg_replace('~[^A-Za-z\d\s-]+~u', 'wl', $tax_term_name);
						?>
						<li>
							<a <?php echo "data-filter='.$tax_term_name'";  ?>  href="#"><?php echo $tax_term; ?></a>
						</li>						
					<?php } ?> 
				</ul>
			</div>	
		</div>	
	<?php }	 ?>
	<div class="row enigma_portfolio_page enima_photo_gallery portfolio" id="isotope-portfolio-container">		
		<?php	$all_posts = wp_count_posts( 'weblizar_portfolio')->publish;
				$args = array('post_type' => 'weblizar_portfolio','portfolio_categories'=>$port_cat_name1);
					global $portfolio;
					$portfolio = new WP_Query( $args );			
					if( $portfolio->have_posts() )
					{	
						while ( $portfolio->have_posts() ) : $portfolio->the_post();							
						$terms_names = wp_get_post_terms(get_the_ID(), "portfolio_categories", array("fields" => "names"));
						
						if(get_post_meta( get_the_ID(),'portfolio_button_link', true )) 
						{ $portfolio_button_link=get_post_meta( get_the_ID(),'portfolio_button_link', true ); }
						else { $portfolio_button_link = get_post_permalink(); }							
					?>							
					<div class="col-xs-12 col-md-<?php if($portfolio_type==2) { echo "6"; } if($portfolio_type==3) { echo "4"; } if($portfolio_type==4) { echo "3"; }  ?> portfolio-item-wrapper <?php foreach ($terms_names as $term) {   $tax_term = str_replace(' ', '_', $term);  echo preg_replace('~[^A-Za-z\d\s-]+~u', 'wl', $tax_term). " "; } ?>"> 
						<div class="img-wrapper">
							<div class="enigma_home_portfolio_showcase">
								 <?php if(has_post_thumbnail()) {	
									$class=array('class'=>'enigma_img_responsive');
									the_post_thumbnail('portfo_2_thumb',$class);
									$post_thumbnail_id = get_post_thumbnail_id();
									$post_image_url = wp_get_attachment_url($post_thumbnail_id );									
								?>
								<div class="enigma_home_portfolio_showcase_overlay">
									<div class="enigma_home_portfolio_showcase_overlay_inner ">
										<div class="enigma_home_portfolio_showcase_icons">
											<a <?php if(get_post_meta( get_the_ID(), 'portfolio_button_target', true )) { echo "target='_blank'"; } ?> title="portfolio" href="<?php echo $portfolio_button_link; ?>"><i class="fa fa-link"></i></a>
											<a class="<?php echo $light_box_style; ?>" href="<?php echo $post_image_url; ?>"><i class="fa fa-search-plus"></i><img src="<?php echo $post_image_url; ?>" alt="<?php the_title(); ?>" style="display:none !important;visibility:hidden"></a>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
							<div class="enigma_home_portfolio_caption">
								<h3><a <?php if(get_post_meta( get_the_ID(), 'portfolio_button_target', true )) { echo "target='_blank'"; } ?> href="<?php echo $portfolio_button_link; ?>"><?php the_title(); ?></a></h3>
							</div>
						</div>
						 <div class="enigma_portfolio_shadow"></div> 
					</div>
				<?php endwhile; 
				} ?>
	</div>
	<?php // }
	return ob_get_clean();
}
add_shortcode( 'portfolio', 'wl_portfolio_shortcode' );
/* Blog */
function wl_blog_shortcode($atts, $content = null ){ ob_start();	
	$atts = shortcode_atts(
	array('blog_cat_name' =>'all',
	'blog_type'=>3,
		'blog_cat_show'=>'yes'), $atts );
	$blog_type = $atts['blog_type'];
	$blog_cat_show = $atts['blog_cat_show'];
	$blog_cat_name = $atts['blog_cat_name'];	
	$blog_cat_name1 =$blog_cat_name;
	$blog_cat_name = explode(",", $blog_cat_name);	
	
	$wl_theme_options=get_option('enigma_options_pro');	
	
	if($wl_theme_options['light_box_style'] == 'photobox_a')
	{ $light_box_style = $wl_theme_options['light_box_style']; }
	else 
	{ $light_box_style = $wl_theme_options['light_box_style']; }
	if($blog_cat_show=='yes' ) {
	?>
	
		<div class="row">
			<div class="col-md-12">				
				<ul class="portfolio-filter nav nav-pills">
				<?php 
					foreach ($blog_cat_name  as $tax_term) {
						$tax_term_name = str_replace(' ', '_', $tax_term);
						$tax_term_name = preg_replace('~[^A-Za-z\d\s-]+~u', 'wl', $tax_term_name);
						?>
						<li>
							<a <?php echo "data-filter='.$tax_term_name'";  ?>  href="#"><?php echo $tax_term; ?></a>
						</li>						
					<?php } ?>
				</ul>
			</div>	
		</div>	
	<?php }	?>		
	<div class="row enigma_portfolio_page enima_photo_gallery portfolio " id="isotope-portfolio-container">
	<?php	
			$args = array('category_name' => $blog_cat_name1 );
			$enigmapost = new WP_Query( $args );
			if($enigmapost->have_posts()): 
			while($enigmapost->have_posts()) : 
			$enigmapost->the_post();
			$terms_names = get_the_category_list(get_the_ID());
			
			//print_r($terms_names);
			$post_categories = wp_get_post_categories( get_the_ID() );
			$cats = array();
			?>
			<div class="col-sm-12 col-md-<?php if($blog_type==2) { echo "6"; } if($blog_type==3) { echo "4"; } if($blog_type==4) { echo "3"; }  ?> portfolio-item-wrapper <?php foreach($post_categories as $c){ $cat = get_category( $c ); echo $cat->name; } ?>" >
				<div class="enigma_blog_thumb_wrapper">
					<div class="enigma_blog_thumb_wrapper_showcase">					
						<?php if(has_post_thumbnail()): 						
							$class=array('class'=>'enigma_img_responsive'); 
							the_post_thumbnail('home_post_thumb', $class); 
						endif; ?>
						<div class="enigma_blog_thumb_wrapper_showcase_overlay">
							<div class="enigma_blog_thumb_wrapper_showcase_overlay_inner ">
								<div class="enigma_blog_thumb_wrapper_showcase_icons">
									<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
								</div>
							</div>
						</div>
					</div>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php if(get_the_tag_list() != '') { ?>
					<p class="enigma_tags"><?php the_tags('Tags :&nbsp;', ' ', '<br />'); ?></p>
					<?php } ?>
					<?php the_excerpt( __( 'Read More' , 'weblizar' ) ); ?>
					<a href="<?php the_permalink(); ?>" class="enigma_blog_read_btn"><i class="fa fa-plus-circle"></i><?php _e('Read More','weblizar'); ?></a>
					<div class="enigma_blog_thumb_footer">
						<ul class="enigma_blog_thumb_date">
							<li><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?></a></li>
							<li><i class="fa fa-clock-o"></i><?php echo get_the_date('F d ,Y'); ?></li>
							<li><i class="fa fa-comments-o"></i><?php comments_popup_link( '0', '1', '%', '', '-'); ?></li>
						</ul>
					</div>
				</div>
			</div><?php 
			endwhile;		
		endif; ?>
	</div>	
	<?php 
	return ob_get_clean();
}
add_shortcode( 'blog_post', 'wl_blog_shortcode' );
?>