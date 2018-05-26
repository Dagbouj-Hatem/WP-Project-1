<!-- portfolio section -->
<div class="enigma_project_section">
<?php $wl_theme_options=get_option('enigma_options_pro');
	//require_once('js/slidecustomjs.php'); 
	if($wl_theme_options['light_box_style'] == 'photobox_a')
	{ $light_box_style = $wl_theme_options['light_box_style']; }
	else 
	{ $light_box_style = $wl_theme_options['light_box_style']; }
if($wl_theme_options['home_portfolio_title'] !='') { ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="enigma_heading_title">
					<h3><?php echo $wl_theme_options['home_portfolio_title']; ?></h3>		
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<div class="container">
		<div class="row" >
		<div id="enigma_portfolio_section" class="enima_photo_gallery">
		<?php 
		$all_posts = wp_count_posts( 'weblizar_portfolio')->publish;
		$args = array('post_type' => 'weblizar_portfolio', 'posts_per_page' =>$all_posts);
		$taxonomy = 'portfolio_categories';
		$portfolio = new WP_Query( $args );		 
		if( $portfolio->have_posts() )
		{ while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>			
				<div class="col-lg-3 col-md-3 pull-left scrollimation fade-right d1"> 
					<div class="img-wrapper">
						<div class="enigma_home_portfolio_showcase">							
							<?php $defalt_arg =array('class' => "enigma_img_responsive");
							if(has_post_thumbnail()): 
							the_post_thumbnail('portfo_4_thumb', $defalt_arg);
							$port_thumbnail_id = get_post_thumbnail_id();
							$image_thumbnail_url = wp_get_attachment_url($port_thumbnail_id);
							if(get_post_meta( get_the_ID(),'portfolio_button_link', true )) 
							{ $portfolio_button_link=get_post_meta( get_the_ID(),'portfolio_button_link', true ); }
							else { $portfolio_button_link = get_post_permalink(); }	
						
							?>
							<div class="enigma_home_portfolio_showcase_overlay">
								<div class="enigma_home_portfolio_showcase_overlay_inner ">
									<div class="enigma_home_portfolio_showcase_icons">
										<a <?php if(get_post_meta( get_the_ID(), 'portfolio_button_target', true )) { echo "target='_blank'"; } ?> title="<?php the_title_attribute(); ?>" href="<?php echo $portfolio_button_link; ?>"><i class="fa fa-link"></i></a>
										<a class="<?php echo $light_box_style;  ?>" href="<?php echo $image_thumbnail_url ;?>"><i class="fa fa-search-plus"></i><img src="<?php echo $image_thumbnail_url ;?>" alt="<?php the_title_attribute(); ?>" style="display:none !important;visibility:hidden"></a>
									</div>
								</div>
							</div>
							<?php endif; ?>
						</div>						
						<div class="enigma_home_portfolio_caption">
							<h3><a <?php if(get_post_meta( get_the_ID(), 'portfolio_button_target', true )) { echo "target='_blank'"; } ?> href="<?php echo $portfolio_button_link; ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							<p><?php 
								$portfolio_categories_list = get_the_terms( get_the_ID(), 'portfolio_categories' );
								$totalcat= count($portfolio_categories_list);
								$i=1;
								foreach($portfolio_categories_list as $list)
								{	echo $list->name;
									if($i <$totalcat){ echo ", ";}
									$i++;
								} ?>
							</p>
						</div>						
					</div>
					<div class="enigma_portfolio_shadow"></div>
				</div>
			<?php endwhile;
			} else {
				for($i=1; $i<=8; $i++) { ?>				
				<div class="col-md-3 pull-left scrollimation fade-right d1"> 
					<div class="img-wrapper">
						<div class="enigma_home_portfolio_showcase">
							<img class="enigma_img_responsive" alt="" src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/wall/img(<?php echo $i; ?>).jpg">
							<div class="enigma_home_portfolio_showcase_overlay">
								<div class="enigma_home_portfolio_showcase_overlay_inner ">
									<div class="enigma_home_portfolio_showcase_icons">
										<a href="#"><i class="fa fa-link"></i></a>
										<a class="photobox_a" href="<?php echo WL_TEMPLATE_DIR_URI ?>/images/wall/img(<?php echo $i; ?>).jpg"><i class="fa fa-search-plus"></i><img src="images/wall/img(<?php echo $i; ?>).jpg" alt="photo1 title" style="display:none !important;visibility:hidden"></a>
									
									</div>
								</div>
							</div>
						</div>
						<div class="enigma_home_portfolio_caption">
							<h3><a href="#"><?php _e('Responsive Design','weblizar');?></a></h3>
							<small><?php _e('Photography','weblizar');?></small>	
						</div>
					</div>
					<div class="enigma_portfolio_shadow"></div>
				</div>	
				<?php }
			} ?>
			</div>		
			<div class="enigma_carousel-navi">
				<div id="port-prev" class="enigma_carousel-prev" ><i class="fa fa-arrow-left"></i></div>
				<div id="port-next" class="enigma_carousel-next" ><i class="fa fa-arrow-right"></i></div>
			</div>				
			
		</div>
	</div>
</div>
<!-- /portfolio section -->

		<div class="container">
	        <div class="row">
			<div class="col-sm-12">
				<div class="row missions">
                     <div class="col-sm-6">
     				<img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/img/mobile.jpg"  width="550" height="350">
                      </div>
                <div class="col-sm-6">
                     <h4 class="mobile">Mobile</h4><br>
					 <h2>VOUS VOULEZ UNE APPLICATION MOBILE</h2>
                        <p>L'idée a étincelé dans votre esprit et depuis lors, vous ne pouvez pas dormir. Vous avez fait des plans, dessiné des wireframes et imaginé des interfaces. Vous regardez presque les gens utilisant votre application sur leurs smartphones partout. Mais vous recherchez une équipe compétente qui vous aidera à atteindre vos objectifs. Consultez notre section détaillée, nous sommes sûrs que nous allons vous impressionner ingénieusement avec nos compétences.
                         </p>
						
						 </div>
                 </div>
			</div>
		</div>
		<br>
			<div class="row">
			<div class="col-sm-12">
				
				<div class="row missions">
                     <div class="col-sm-6">
					     <h4 class="siteweb">Site web</h4><br>
						 <h2>TOUT CE QUE VOUS AVEZ BESOIN EST UN SITE WEB</h2>
                       <p>Que vous ayez une petite entreprise ou que vous vous prépariez pour la prochaine étape, nous pouvons vous offrir le meilleur service et la meilleure qualité adaptés à vos besoins et à votre budget. Des designs atypiques aux idées innovantes, nous pouvons vous assurer que nous vous surprendrons ingénieusement avec le potentiel de notre équipe. Si vous êtes un geek intéressé par la technologie ou simplement curieux de savoir ce que nous maîtrisons, consultez notre section détaillée.</p>
                      <br>
					  </div>
                <div class="col-sm-6">
				<br>
                 <img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/img/siteweb.jpg"  width="550" height="350">

					 </div>
                 </div>
			</div>
		</div>
		<br>
		
			<div class="row">
			<div class="col-sm-12">
				
				<div class="row missions">
                     <div class="col-sm-6">
     				<img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/img/appweb.jpg"  width="550" height="350">
                      </div>
                <div class="col-sm-6">
                     <h4 class="appweb">Application Web</h4><br>
					 <h2>VOUS VOULEZ CRÉER L'APPLICATION WEB DU FUTUR</h2>
                     <p>C'est ça, vous travaillez à rendre ce monde meilleur. Vous avez le concept, vous avez besoin d'une équipe compétente capable de gérer des situations cruciales. Votre rêve est précieux pour vous comme pour nous. Nous vous prouverons ingénieusement comment nous sommes capables de surmonter tous les défis. Vous pouvez en savoir plus sur nos services dans la section Applications Web.</p>
					 </div>
                 </div>
			</div>
		</div>
		
		<br>
		
			<div class="row">
			<div class="col-sm-12">
				
				<div class="row missions">
                     <div class="col-sm-6">
					     <h4 class="appperso">Application Personnalisée</h4><br>
						 <h2>VOUS CHERCHEZ DES DÉVELOPPEURS</h2>
                         <p>Vous avez construit une équipe, vous avez fait vos plans, préparé votre projet, mais vous êtes coincé avec un manque de ressources. Vous êtes sur le point de le faire, mais vous avez besoin d'un ou de plusieurs membres de l'équipe pour faire avancer les choses. Nous vous aidons à trouver le bon compromis entre budget et ressources. Nous allons vous aider avec votre projet en vous fournissant des éléments précieux. Pour en savoir plus sur nos services personnalisés, consultez la section des développeurs.</p>
                      </div>
                <div class="col-sm-6">
				<br>
                 <img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/img/website.jpg"  width="550" height="350">

					 </div>
                 </div>
			</div>
		</div>
		
	</div>

