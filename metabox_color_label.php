<?php

function wdm_add_meta_box() {
    $screens = array( 'services' );
    add_meta_box('wdm_sectionid', 'Color label', 'wdm_meta_box_callback', $screens);
}

add_action( 'add_meta_boxes', 'wdm_add_meta_box' );

function wdm_meta_box_callback( $post ) {
    wp_nonce_field( 'wdm_meta_box', 'wdm_meta_box_nonce' );
    $color = get_post_meta( $post->ID, 'post_bg', true );
?>
    <div class="custom_meta_box">
	<p>
	<label>Select Color Label: </label>
	<input class="color-field" type="text" name="post_bg" value="<?php echo '#'.$color; ?>"/>
	</p>
	<div class="clear"></div>
	</div>
    <script>
        (function( $ ) {
            // Add Color Picker to all inputs that have 'color-field' class
            $(function() {
                $('.color-field').wpColorPicker();
            });
        })( jQuery );
    </script>
<?php

}

function wdm_save_meta_box_data( $post_id ) {
    if ( !isset( $_POST['wdm_meta_box_nonce'] ) ) {
        return;
    }

    if ( !wp_verify_nonce( $_POST['wdm_meta_box_nonce'], 'wdm_meta_box' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( !current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $post_bg = ( isset( $_POST['post_bg'] ) ? sanitize_html_class( $_POST['post_bg'] ) : '' );
    update_post_meta( $post_id, 'post_bg', $post_bg );
}
add_action( 'save_post', 'wdm_save_meta_box_data' );