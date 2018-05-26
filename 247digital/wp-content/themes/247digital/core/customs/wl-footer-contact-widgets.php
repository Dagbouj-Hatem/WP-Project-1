<?php 
	add_action( 'widgets_init','wl_footer_widget_contact');
   function wl_footer_widget_contact() { return   register_widget( 'wl_footer_contact_widget' ); }
/**
* Adds footer contact  widget.
*/
class wl_footer_contact_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'wl_footer_contact_widget', // Base ID
			__('Enigma Footer Contact', 'weblizar'), // Name
			array( 'description' => __( 'Your contact details display', 'weblizar' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$Contact_address = apply_filters( 'widget_title', $instance['Contact_address'] );
		$Contact_phone_number = apply_filters( 'widget_title', $instance['Contact_phone_number'] );
		$website_add = apply_filters( 'widget_title', $instance['website_add'] );
		$Contact_email_address = apply_filters( 'widget_title', $instance['Contact_email_address'] );	
		
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title']; 
		
		?>
		<address>
			<p><i class="fa fa-map-marker"></i><?php if($Contact_address) { echo $Contact_address; } else { echo _('25, Lorem Lis Street','weblizar'); } ?></p>
			<p><i class="fa fa-phone"></i><a href="tel:<?php echo $Contact_phone_number; ?>"><?php if($Contact_phone_number) { echo $Contact_phone_number; } else { echo _('987-654-321','weblizar'); } ?></a></p>
			<p><i class="fa fa-envelope"></i><a href="mailto:<?php if($Contact_email_address) { echo $Contact_email_address; } else { echo _('mail@me.com','weblizar'); } ?>"><?php if($Contact_email_address) { echo $Contact_email_address; } else { echo _('info@weblizar.com','weblizar'); } ?></a></p>
			<p><i class="fa fa-globe"></i><?php if($website_add) { echo $website_add; } else { echo _('weblizar.com','weblizar'); } ?></p>
		</address>
		<?php		
		echo $args['after_widget']; // end of footer usefull links widget		
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] )) { $title = $instance[ 'title' ];	}
		else {	$title = __( 'Contact Info', 'weblizar' );		}
		
		if ( isset( $instance[ 'Contact_phone_number' ] )) { $Contact_phone_number = $instance[ 'Contact_phone_number' ];	}
		else {	$Contact_phone_number = __( '987-654-321', 'weblizar' );		}
		
		if ( isset( $instance[ 'Contact_email_address' ] )) { $Contact_email_address = $instance[ 'Contact_email_address' ];	}
		else {	$Contact_email_address = __( 'help@me.com ', 'weblizar' );		}
		
		if ( isset( $instance[ 'website_add' ] )) { $website_add = $instance[ 'website_add' ];	}
		else {	$website_add = __( 'weblizar.com', 'weblizar' );		}
		
		if ( isset( $instance[ 'Contact_address' ] )) { $Contact_address = $instance[ 'Contact_address' ];	}
		else {	$Contact_address = __( 'Auckland, NZ ', 'weblizar' );		}
				
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:','weblizar' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>	<label for="<?php echo $this->get_field_id( 'Contact_phone_number' ); ?>"><?php _e( 'Contact phone number:','weblizar' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'Contact_phone_number' ); ?>" name="<?php echo $this->get_field_name( 'Contact_phone_number' ); ?>" type="text" value="<?php echo $Contact_phone_number ; ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'Contact_email_address' ); ?>"><?php _e( 'E-mail address:','weblizar' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'Contact_email_address' ); ?>" name="<?php echo $this->get_field_name( 'Contact_email_address' ); ?>" type="text" value="<?php echo $Contact_email_address; ?>" />
		</p>		
		<p><label for="<?php echo $this->get_field_id( 'website_add' ); ?>"><?php _e( 'Website :','weblizar' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'website_add' ); ?>" name="<?php echo $this->get_field_name( 'website_add' ); ?>" type="text" value="<?php echo $website_add ; ?>" />
		</p>		
		<p>
		<label for="<?php echo $this->get_field_id( 'Contact_address' ); ?>"><?php _e( 'Contact address:','weblizar' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'Contact_address' ); ?>" name="<?php echo $this->get_field_name( 'Contact_address' ); ?>" type="text" value="<?php echo $Contact_address; ?>" />
		</p>
		
		
		
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';	
		$instance['Contact_address'] = ( ! empty( $new_instance['Contact_address'] ) ) ? strip_tags( $new_instance['Contact_address'] ) : '';$instance['timings'] = ( ! empty( $new_instance['timings'] ) ) ? strip_tags( $new_instance['timings'] ) : '';
		$instance['website_add'] = ( ! empty( $new_instance['website_add'] ) ) ? strip_tags( $new_instance['website_add'] ) : '';
		$instance['Contact_phone_number'] = ( ! empty( $new_instance['Contact_phone_number'] ) ) ? strip_tags( $new_instance['Contact_phone_number'] ) : '';	
		$instance['Contact_email_address'] = ( ! empty( $new_instance['Contact_email_address'] ) ) ? strip_tags( $new_instance['Contact_email_address'] ) : '';	
		return $instance;
	}
}
?>