<style type="text/css">
#enigma_nav_top ul li.current-menu-parent { background-color:<?php echo $wl_theme_options['weblizar_custom_color']; ?> !important; }
#enigma_nav_top ul li.current-menu-parent a.dropdown-toggle{ color:#fff !important; }

#wrapper{
	background: #ffffff;
} 
/*  header contact info section ***/
.header_section{
	background-color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color:#fff;
}
/** navbar menus ***/
.navigation_menu{
	background-color: #fff;
	border-top:2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}

.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
	background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}


.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
	background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}

.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
	background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}

.dropdown-menu {
	background-color: rgba(19, 101, 151, 0.9);
}
/** headings titles css ***/
.enigma_heading_title h3 {
	border-bottom: 4px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color: #3b3b3b;
}
.enigma_heading_title2 h3 {
	border-bottom: 2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color: #3b3b3b;
}
/** slider css ***/
.carousel-list li {
	background:rgba(19, 101, 151, 0.8);
}

/** service  section css ***/
.enigma_service_iocn{
	border: 4px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	background-size: 100% 200%;
	background-color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	background-image: linear-gradient(to bottom, <?php echo $wl_theme_options['weblizar_custom_color']; ?> 50%, #fff 50%);
}
.enigma_service_area:hover .enigma_service_iocn i {
	color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	
}
.enigma_service_area:hover .enigma_service_iocn{
	background-position: 0 -100%;
	background-color:#ffffff;
}
.enigma_service_iocn_2 i{
	background: #fff;
	border: 4px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_service_iocn_2 i{
	color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	background-size: 100% 200%;
	background-image: linear-gradient(to bottom, #fff 50%, <?php echo $wl_theme_options['weblizar_custom_color']; ?> 50%);
 }
  .enigma_service_area_2:hover .enigma_service_iocn_2 i{
	background-position: 0 -100%;
	color: #ffffff;
	background-color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}

/****************portfolio css ********************************************************
********************************************************************************/

.enigma_home_portfolio_showcase .enigma_home_portfolio_showcase_icons a {
	background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	border:2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color:#fff;
}
.enigma_home_portfolio_showcase .enigma_home_portfolio_showcase_icons a:hover{
	background-color: #ffffff;
	border:2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_home_portfolio_caption {
	border-left:1px solid #ccc;
	border-bottom:4px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	border-right:1px solid #ccc;
}

.enigma_home_portfolio_caption:hover{
    background: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_home_portfolio_caption:hover  h3 a ,.enigma_home_portfolio_caption:hover  small{
   color: #ffffff;
}
.img-wrapper:hover .enigma_home_portfolio_caption{
 background: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
 border-left:1px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	border-bottom:4px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	border-right:1px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.img-wrapper:hover .enigma_home_portfolio_caption  h3 a,.img-wrapper:hover .enigma_home_portfolio_caption  small{
 color: #ffffff;
}

.enigma_proejct_button a {
	background-color: #f8504b;
	color: #FFFFFF;
	border: 2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	transition: all 0.4s ease 0s;
}
.enigma_proejct_button a:hover {
	background-color: #ffffff;
	color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	border: 2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	text-decoration:none;
	
}


.enigma_carousel-prev, .enigma_carousel-next {
    background-color: #fff;
	border: 2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_carousel-prev:hover, .enigma_carousel-next:hover {
    background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color:#fff;
}
.enigma_carousel-prev:hover i, .enigma_carousel-next:hover i{
    color:#fff;
}
.enigma_carousel-prev i,
.enigma_carousel-next i {
	color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}

/*** project detail ***/
.enigma_portfolio_detail_pagi li a {
	color: #404040;
	border:2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	text-align:center;
	background-size: 100% 200%;
	background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
    background-image: linear-gradient(to bottom, <?php echo $wl_theme_options['weblizar_custom_color']; ?> 50%, #ffffff 50%);
   -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    transition: all ease 0.5s;
	
}
.enigma_portfolio_detail_pagi li a:hover {
	color: #404040;
	border:2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	background-position: 0 -100%;
	background-color:#ffffff;
}

.enigma_portfolio_detail_pagi li a span{
	color:#fff;
	line-height:35px;
}
.enigma_portfolio_detail_pagi li a:hover span{
	color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma-project-detail-sidebar p small {
	color:#777777;
	
}

.enigma-project-detail-sidebar .launch-enigma-project a {

	color: #ffffff;
	border: 2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	background-size: 100% 200%;
	background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
    background-image: linear-gradient(to bottom, <?php echo $wl_theme_options['weblizar_custom_color']; ?> 50%, #ffffff 50%);
   -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    transition: all ease 0.5s;
}
.enigma-project-detail-sidebar .launch-enigma-project a:hover {
	background-color: #ffffff;
	color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	border: 2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	background-position: 0 -100%;
}

/** gallery css **/

.enigma_gallery_showcase .enigma_gallery_showcase_icons a {
	background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	border:2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color:#fff;
}

.enigma_gallery_showcase .enigma_gallery_showcase_icons a:hover{
	background-color: #ffffff;
	border:2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}


/**************** blog css ********************************************************
********************************************************************************/

/** blog thumbnail css **/
.enigma_blog_thumb_wrapper{
	background:#fff;
	border-bottom: 5px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	box-shadow: 0 0 6px rgba(0,0,0,.7);

}
.enigma_blog_thumb_wrapper h2 a{
	color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	transition: all 0.4s ease 0s;
}

.enigma_blog_thumb_wrapper h2:hover a{
	color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;

}
.enigma_blog_thumb_date li i{
	color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_tags a{
	background-size: 100% 200%;
	
    background-image: linear-gradient(to bottom, #edf0f2 50%, <?php echo $wl_theme_options['weblizar_custom_color']; ?> 50%);
 }

.enigma_tags a:hover{
	color:#fff;
	background-position: 0 -100%;
	background-color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_tags a i{
	color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_tags a:hover i{
	color:#fff;
}

.enigma_blog_thumb_wrapper span a i{
	color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_blog_thumb_wrapper span a {
	color:#555;
	
}.enigma_blog_thumb_footer{
	padding-top:20px;
	padding-bottom:10px;
	border-top:3px solid  #f5f5f5;
}

.enigma_blog_read_btn{
	border: 2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	background-size: 100% 200%;
	background-color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
    background-image: linear-gradient(to bottom, <?php echo $wl_theme_options['weblizar_custom_color']; ?> 50%, #fff 50%);
   }
.enigma_blog_read_btn i {
	margin-right:5px;
}
.enigma_blog_read_btn:hover{
	background-position: 0 -100%;
	color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	background-color:#ffffff;
}

.enigma_blog_thumb_wrapper_showcase .enigma_blog_thumb_wrapper_showcase_icons a {
	background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color: #fff;
	-webkit-transition: all .25s ease-in;
    -moz-transition: all .25s ease-in;
    -o-transition: all .25s ease-in;
    transition: all .25s ease-in;
}
.enigma_blog_thumb_wrapper_showcase .enigma_blog_thumb_wrapper_showcase_icons a:hover{
	background-color: #ffffff;
	border: 2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
/********* Blog Full width css ********/
.enigma_post_date {
	background: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color: #ffffff;
}
.enigma_blog_comment:hover i, .enigma_blog_comment:hover h6{
	color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
} 
.enigma_fuul_blog_detail_padding h2 a{
	color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_fuul_blog_detail_padding h2  a:hover{
	color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
/*** blog sidebar css **/
.enigma_recent_widget_post h3 a {
	color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_sidebar_widget {
	border-left: 3px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	border-right: 3px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	border-bottom: 3px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_sidebar_widget_title{
	background:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_sidebar_link p a:hover ,.enigma_sidebar_widget ul li a:hover {
	color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}

.enigma_widget_tags a , .tagcloud a{
	background-size: 100% 200%;
    background-image: linear-gradient(to bottom, #edf0f2 50%, <?php echo $wl_theme_options['weblizar_custom_color']; ?> 50%);
 }
.enigma_widget_tags a:hover , .tagcloud a:hover{
	border: 1px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	background-position: 0 -100%;
	color: #fff;
	background-color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}

/** blog detail **/
.enigma_author_detail_wrapper{
	background: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	padding:15px;
	margin-bottom:40px;
	
}
.enigma_author_detail_wrapper{
	border-left:2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
/** blog  form input css **/ 
.reply a {
	color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_con_input_control:focus, .enigma_con_textarea_control:focus,
.enigma_contact_input_control:focus, .enigma_contact_textarea_control:focus {
  border-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
  -webkit-box-shadow: inset 0 0px 0px <?php echo $wl_theme_options['weblizar_custom_color']; ?>, 0 0 5px <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
          box-shadow: inset 0 0px 0px <?php echo $wl_theme_options['weblizar_custom_color']; ?>, 0 0 5px <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_send_button , #enigma_send_button{
	border-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color: #6a6a6a;
	background-size: 100% 200%;
    background-image: linear-gradient(to bottom, #fff 50%, <?php echo $wl_theme_options['weblizar_custom_color']; ?> 50%);
   -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    transition: all ease 0.5s;
}
.enigma_send_button:hover ,#enigma_send_button:hover{
	background-position: 0 -100%;
    border: 2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color: #ffffff;
	background-color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}



.enigma_blog_pagination {
	background-color: #FFFFFF;	
}
.enigma_blog_pagi a {
	border: 1px solid #dbdbdb !important;
	background-color: #ffffff;
	background-size: 100% 200%;
	background-image: linear-gradient(to bottom, #fff 50%, <?php echo $wl_theme_options['weblizar_custom_color']; ?> 50%);
   -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    transition: all ease 0.5s;
	color: #777777;
}
.enigma_blog_pagi a:hover, .enigma_blog_pagi a.active {
	background-position: 0 -100%;
	color: #ffffff;
	background-color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}

/****** Testimonial css *******************************************
****************************************************************/
.enigma_testimonial_area i{
	color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_testimonial_area img{
	border: 10px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.pager a{
	background: #fff;
	border: 2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.pager a.selected{
	background: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	border: 2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
/**** Client Css *************************************************
****************************************************************/
.enigma_client_wrapper:hover {
	border: 4px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;

}
.enigma_client_prev, .enigma_client_next {
    background-color: #fff;
	border: 2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_client_prev:hover, .enigma_client_next:hover {
    background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color:#fff;
}
.enigma_client_prev:hover i, .enigma_client_next:hover i{
    color:#fff;
}

.enigma_carousel-prev i,
.enigma_carousel-next i {
	color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
/**** About us page Css *************************************************
****************************************************************/
.enigma_team_showcase .enigma_team_showcase_icons a {
	background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	border:2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color:#fff;
}

.enigma_team_showcase .enigma_team_showcase_icons a:hover{
	background-color: #ffffff;
	border:2px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}

.enigma_team_caption:hover{
    background: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_team_caption:hover  h3 a ,.enigma_team_caption:hover  small{
   color: #ffffff;
}

.enigma_team_wrapper:hover .enigma_team_caption{
 background: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_team_wrapper:hover .enigma_team_caption  h3 ,.enigma_team_wrapper:hover .enigma_team_caption  small{
 color: #ffffff;
}
/***** Call Out Section *****************************************************************
***************************************************************************************/
.enigma_callout_area {
	background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;

}
/***** Footer Area Css *****************************************************************
***************************************************************************************/
.enigma_footer_area{
	background: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
	border-top: 0px solid #6B6B6B;
}
/***** Contact Info Css *****************************************************************
***************************************************************************************/
.enigma_contact_info li .desc {
	color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
/***** Shortcode  Css *****************************************************************
***************************************************************************************/
/*Dropcaps Styles*/
.enigma_dropcape_square span {
	background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
    color: #FFFFFF;
}
.enigma_dropcape_simple span {
    color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
}
.enigma_dropcape_circle span {
	background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
    color: #FFFFFF;
}
.breadcrumb li a {
color: <?php echo $wl_theme_options['weblizar_custom_color']; ?> !important;
}
/** progress bar or nav button css */
.progress-bar {
	background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?> !important;
}
.btn-search{
	background:<?php echo $wl_theme_options['weblizar_custom_color']; ?> !important;
}
.nav-pills > li  > a{
	border: 3px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?> !important;
	background-size: 100% 200%;
	background-color:#fff;
    background-image: linear-gradient(to bottom, #fff 50%, <?php echo $wl_theme_options['weblizar_custom_color']; ?> 50%) !important;
}
.nav-pills > li.active > a, .nav-pills > li  > a:hover, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
	background-color:<?php echo $wl_theme_options['weblizar_custom_color']; ?> !important;
	background-image: linear-gradient(to bottom, <?php echo $wl_theme_options['weblizar_custom_color']; ?> 50%, <?php echo $wl_theme_options['weblizar_custom_color']; ?> 50%) !important;
}
.nav-stacked > li  > a
{
	border: 1px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?> !important;
	background-size: 100% 200%;
	background-color:<?php echo $wl_theme_options['weblizar_custom_color']; ?>;
    background-image: linear-gradient(to bottom, #fff 50%, <?php echo $wl_theme_options['weblizar_custom_color']; ?> 50%) !important;
 }
 .nav-stacked > li.active > a, .nav-stacked > li  > a:hover, .nav-stacked > li.active > a:hover, .nav-stacked > li.active > a:focus {
	background-color:<?php echo $wl_theme_options['weblizar_custom_color']; ?> !important;
	background-image: linear-gradient(to bottom, <?php echo $wl_theme_options['weblizar_custom_color']; ?> 50%, <?php echo $wl_theme_options['weblizar_custom_color']; ?> 50%) !important;
}

.navbar-toggle {
background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?> !important;
border: 1px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?> !important;
}

.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?> !important;
}
.enigma_blockquote_section blockquote {
border-left: 5px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?> ;
}
blockquote {
    border-left: 5px solid <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
 }
 
/*Cal Widget*/
#wp-calendar caption {
background-color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;
color: #ffffff;
}

.enigma_footer_widget_column ul li a ,.enigma_footer_widget_column ul#recentcomments li {color: #f2f2f2;}
.enigma_footer_widget_column ul li a:hover{color: <?php echo $wl_theme_options['weblizar_custom_color']; ?>;}
</style>