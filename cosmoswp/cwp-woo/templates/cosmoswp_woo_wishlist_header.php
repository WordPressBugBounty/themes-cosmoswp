<?php
$is_enable = cosmoswp_get_theme_options( 'cwp-enable-woo-wishlist' );
$icon      = cosmoswp_get_correct_fa_font( cosmoswp_get_theme_options( 'cwp-woo-wishlist-icon' ) );
$align     = cosmoswp_get_theme_options( 'cwp-woo-wishlist-icon-align' );

if ( class_exists( 'YITH_WCWL' ) && $is_enable ) :
		$wishlist_page_id = yith_wcwl_object_id( get_option( 'yith_wcwl_wishlist_page_id' ) );
	if ( absint( $wishlist_page_id ) > 0 ) : ?>
			<div class="cwp-wc-wishlist-wrapper <?php echo esc_attr( $align ); ?>">
				<a class="cwp-wc-wishlist-icon wishlist-icon" href="<?php echo esc_url( get_permalink( $wishlist_page_id ) ); ?>">
					<i class="cwp-wc-icon-i <?php echo esc_attr( $icon ); ?>" aria-hidden="true"></i>
					<span class="cwp-wishlist-value"><?php echo absint( yith_wcwl_count_products() ); ?></span>
				</a>
			</div>
			<?php
		endif;
	endif;
