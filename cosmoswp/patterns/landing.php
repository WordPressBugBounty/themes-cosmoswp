<?php
/**
 * Title: Landing
 * Slug: patterns-cosmoswp/landing
 * Template Types: front-page
 * Post Types: page
 * Description: A layout template for displaying the main landing front page.
 *
 * @package    Patterns_CosmosWP
 * @subpackage Patterns_CosmosWP/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"88vh"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-secondary-background-color has-background" style="min-height:88vh">
		<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"120px"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80)">
					<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"800","fontSize":"56px","lineHeight":1.4},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"default"} -->
					<h2 class="wp-block-heading has-default-color has-text-color"
						style="margin-bottom:var(--wp--preset--spacing--10);font-size:56px;font-style:normal;font-weight:800;line-height:1.4">
						<?php esc_html_e( 'Design Your Idea', 'cosmoswp' ); ?>
						</h2>
					<!-- /wp:heading -->

					<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"is-style-fill","style":{"border":{"radius":"50px"},"typography":{"textTransform":"none","fontSize":"16px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"25px","right":"25px","top":"12px","bottom":"12px"}}}} -->
						<div class="wp-block-button has-custom-font-size is-style-fill"
							style="font-size:16px;font-style:normal;font-weight:700;text-transform:none"><a
								class="wp-block-button__link wp-element-button"
								style="border-radius:50px;padding-top:12px;padding-right:25px;padding-bottom:12px;padding-left:25px"><?php esc_html_e( 'Get Started', 'cosmoswp' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
				<figure class="wp-block-image aligncenter size-full"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/featuredimage.png" style="object-fit:cover" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"-235px"},"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"dimensions":{"minHeight":"220px"},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/f-image.png","source":"file","title":"f-image"},"backgroundSize":"110%","backgroundAttachment":"scroll","backgroundPosition":"50% 0"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignfull"
			style="min-height:220px;margin-top:-235px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"var:preset|spacing|80","right":"var:preset|spacing|80"},"blockGap":"0px"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-default-background-color has-background" style="padding-top:0px;padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"backgroundColor":"default","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group has-default-background-color has-background">
					<!-- wp:image {"id":62,"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-resized"><img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/fa-lightbulb-regular-pink.png"
							alt="" class="wp-image-62" style="width:40px" /></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"600","letterSpacing":"1px"}},"textColor":"base"} -->
						<h5 class="wp-block-heading has-base-color has-text-color"
							style="font-size:17px;font-style:normal;font-weight:600;letter-spacing:1px"><?php esc_html_e( 'Business Consultancy', 'cosmoswp' ); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"fontSize":"14px","lineHeight":"1.8","fontStyle":"normal","fontWeight":"300"}},"textColor":"quaternary"} -->
						<p class="has-quaternary-color has-text-color"
							style="margin-bottom:0px;font-size:14px;font-style:normal;font-weight:300;line-height:1.8">
							<?php
							esc_html_e(
								'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut',
								'cosmoswp'
							);
							?>
							</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"backgroundColor":"default","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group has-default-background-color has-background">
					<!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-resized"><img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/fa-chart-line-solid-pink.png"
							style="width:40px" /></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"600","letterSpacing":"1px"}},"textColor":"base"} -->
						<h5 class="wp-block-heading has-base-color has-text-color"
							style="font-size:17px;font-style:normal;font-weight:600;letter-spacing:1px"><?php esc_html_e( 'Help To Grow Business', 'cosmoswp' ); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"fontSize":"14px","lineHeight":"1.8","fontStyle":"normal","fontWeight":"300"}},"textColor":"quaternary"} -->
						<p class="has-quaternary-color has-text-color"
							style="margin-bottom:0px;font-size:14px;font-style:normal;font-weight:300;line-height:1.8">
							<?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'cosmoswp' ); ?>
							</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"backgroundColor":"default","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group has-default-background-color has-background">
					<!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-resized"><img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/fa-headphones-solid-pink.png"
						style="width:40px" /></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"600","letterSpacing":"1px"}},"textColor":"base"} -->
						<h5 class="wp-block-heading has-base-color has-text-color"
							style="font-size:17px;font-style:normal;font-weight:600;letter-spacing:1px"><?php esc_html_e( 'Help To Grow Business', 'cosmoswp' ); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"fontSize":"14px","lineHeight":"1.8","fontStyle":"normal","fontWeight":"300"}},"textColor":"quaternary"} -->
						<p class="has-quaternary-color has-text-color"
							style="margin-bottom:0px;font-size:14px;font-style:normal;font-weight:300;line-height:1.8">
							<?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'cosmoswp' ); ?>
							</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-tertiary-background-color has-background" id="about"
		style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg"
						/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"14px","letterSpacing":"1px","lineHeight":"1"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quinary"} -->
					<h6 class="wp-block-heading has-text-align-left has-quinary-color has-text-color"
						style="margin-bottom:0px;font-size:14px;font-style:normal;font-weight:400;letter-spacing:1px;line-height:1;text-transform:uppercase">
						<?php esc_html_e( 'Powerful, not overpowering', 'cosmoswp' ); ?></h6>
					<!-- /wp:heading -->

					<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"2rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"base"} -->
					<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color"
						style="margin-bottom:var(--wp--preset--spacing--10);font-size:2rem;font-style:normal;font-weight:700">
						<?php esc_html_e( 'Marketing that gets great results', 'cosmoswp' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"25px"}},"typography":{"lineHeight":"1.8"}},"textColor":"quaternary"} -->
					<p class="has-text-align-left has-quaternary-color has-text-color"
						style="margin-bottom:25px;line-height:1.8">
						<?php
						esc_html_e(
							'Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis,
                        repellendus ipsa aperiam, laudantium voluptatum nulla?.',
							'cosmoswp'
						);
						?>
						</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"layout":{"type":"flex","justifyContent":"left"}} -->
				<div class="wp-block-buttons"
					style="margin-top:var(--wp--preset--spacing--40);letter-spacing:1px;text-transform:uppercase">
					<!-- wp:button {"textAlign":"center","className":"is-style-fill"} -->
					<div class="wp-block-button is-style-fill"><a
							class="wp-block-button__link has-text-align-center wp-element-button"><?php esc_html_e( 'About us', 'cosmoswp' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-default-background-color has-background" id="services" 
		style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"14px","letterSpacing":"1px","lineHeight":"1"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quinary"} -->
			<h6 class="wp-block-heading has-text-align-center has-quinary-color has-text-color"
				style="margin-bottom:0px;font-size:14px;font-style:normal;font-weight:400;letter-spacing:1px;line-height:1;text-transform:uppercase">
				<?php esc_html_e( 'Powerful, not overpowering', 'cosmoswp' ); ?></h6>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"2rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"base"} -->
			<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color"
				style="margin-bottom:var(--wp--preset--spacing--10);font-size:2rem;font-style:normal;font-weight:700">
				<?php esc_html_e( 'Connecting your business with the world', 'cosmoswp' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.8"}},"textColor":"quaternary"} -->
			<p class="has-text-align-center has-quaternary-color has-text-color" style="line-height:1.8">
			<?php
			esc_html_e(
				'Lorem ipsum
                dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio
                voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.',
				'cosmoswp'
			);
			?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--60)">
			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-default","style":{"border":{"radius":"5px"},"color":{"duotone":"unset"}}} -->
				<figure class="wp-block-image size-full has-custom-border is-style-default"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg"
						style="border-radius:5px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-7.jpg"
						style="border-radius:5px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg"
						style="border-radius:5px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--30)">
			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg"
						style="border-radius:5px;object-fit:cover" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg"
						style="border-radius:5px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg"
						style="border-radius:5px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"
			style="margin-top:var(--wp--preset--spacing--60);letter-spacing:1px;text-transform:uppercase">
			<!-- wp:button {"textAlign":"center","className":"is-style-fill"} -->
			<div class="wp-block-button is-style-fill"><a
					class="wp-block-button__link has-text-align-center wp-element-button"><?php esc_html_e( 'All Services', 'cosmoswp' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-default-background-color has-background"
		style="padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0"},"dimensions":{"minHeight":""},"layout":{"selfStretch":"fixed","flexSize":"300px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group"
					style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:heading {"className":"has-text-align-center has-base-color has-text-color has-x-large-font-size"} -->
					<h2
						class="wp-block-heading has-text-align-center has-base-color has-text-color has-x-large-font-size">
						<?php esc_html_e( '20+', 'cosmoswp' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","textColor":"quinary"} -->
					<p class="has-text-align-center has-quinary-color has-text-color"><?php esc_html_e( 'Winning Award', 'cosmoswp' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0px"},"dimensions":{"minHeight":""},"layout":{"selfStretch":"fixed","flexSize":"300px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group"
					style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:heading {"className":"has-text-align-center has-base-color has-text-color has-x-large-font-size"} -->
					<h2
						class="wp-block-heading has-text-align-center has-base-color has-text-color has-x-large-font-size">
						<?php esc_html_e( '100K+', 'cosmoswp' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","textColor":"quinary"} -->
					<p class="has-text-align-center has-quinary-color has-text-color"><?php esc_html_e( 'Happy Customers', 'cosmoswp' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0"},"dimensions":{"minHeight":""},"layout":{"selfStretch":"fixed","flexSize":"300px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group"
					style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:heading {"className":"has-text-align-center has-base-color has-text-color has-x-large-font-size"} -->
					<h2
						class="wp-block-heading has-text-align-center has-base-color has-text-color has-x-large-font-size">
						<?php esc_html_e( '20M+', 'cosmoswp' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","textColor":"quinary"} -->
					<p class="has-text-align-center has-quinary-color has-text-color"><?php esc_html_e( 'Working Hours', 'cosmoswp' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0"},"dimensions":{"minHeight":""},"layout":{"selfStretch":"fixed","flexSize":"300px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group"
					style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:heading {"className":"has-text-align-center has-base-color has-text-color has-x-large-font-size"} -->
					<h2
						class="wp-block-heading has-text-align-center has-base-color has-text-color has-x-large-font-size">
						<?php esc_html_e( '100+', 'cosmoswp' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","textColor":"quinary"} -->
					<p class="has-text-align-center has-quinary-color has-text-color"><?php esc_html_e( 'Completed Projects', 'cosmoswp' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-tertiary-background-color has-background" id="team"
		style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull">
			<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns alignwide" style="padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"alignwide","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group alignwide">
						<!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"14px","letterSpacing":"1px","lineHeight":"1"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quinary"} -->
						<h6 class="wp-block-heading has-text-align-left has-quinary-color has-text-color"
							style="margin-bottom:0px;font-size:14px;font-style:normal;font-weight:400;letter-spacing:1px;line-height:1;text-transform:uppercase">
							<?php esc_html_e( 'Powerful, not overpowering', 'cosmoswp' ); ?></h6>
						<!-- /wp:heading -->

						<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"2rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"base"} -->
						<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color"
							style="margin-bottom:var(--wp--preset--spacing--10);font-size:2rem;font-style:normal;font-weight:700">
							<?php esc_html_e( 'Increase your productivity with digital tools created for you', 'cosmoswp' ); ?></h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"></div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
			<div class="wp-block-columns alignwide are-vertically-aligned-top">
				<!-- wp:column {"verticalAlignment":"top"} -->
				<div class="wp-block-column is-vertically-aligned-top">
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"25px"}},"typography":{"lineHeight":"1.8"}},"textColor":"quaternary"} -->
						<p class="has-text-align-left has-quaternary-color has-text-color"
							style="margin-bottom:25px;line-height:1.8">
							<?php
							esc_html_e(
								'Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates
                            perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?',
								'cosmoswp'
							);
							?>
							.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top"} -->
				<div class="wp-block-column is-vertically-aligned-top">
					<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"25px"}},"typography":{"lineHeight":"1.8"}},"textColor":"quaternary"} -->
					<p class="has-text-align-left has-quaternary-color has-text-color"
						style="margin-bottom:25px;line-height:1.8">
						<?php
						esc_html_e(
							'Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis,
                        repellendus ipsa aperiam, laudantium voluptatum nulla?.',
							'cosmoswp'
						);
						?>
						</p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.5","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"base"} -->
						<p class="has-text-align-left has-base-color has-text-color"
							style="margin-bottom:var(--wp--preset--spacing--10);font-style:normal;font-weight:600;line-height:1.5;text-transform:uppercase">
							<?php esc_html_e( 'John Doe', 'cosmoswp' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"5px"}},"typography":{"lineHeight":"0.7"}},"textColor":"quinary"} -->
						<p class="has-text-align-left has-quinary-color has-text-color"
							style="margin-bottom:5px;line-height:0.7"><?php esc_html_e( 'CEO &amp; Founder', 'cosmoswp' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"border":{"radius":"5px"}},"backgroundColor":"default","layout":{"type":"default"}} -->
				<div class="wp-block-group has-default-background-color has-background" style="border-radius:5px">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}}} -->
					<figure class="wp-block-image size-full has-custom-border"><img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-9.jpg"
							style="border-top-left-radius:5px;border-top-right-radius:5px" /></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0px"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group"
						style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)">
						<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"bottom":"5px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base"} -->
						<h5 class="wp-block-heading has-text-align-center has-base-color has-text-color"
							style="margin-bottom:5px;font-style:normal;font-weight:600"><?php esc_html_e( 'David Parker', 'cosmoswp' ); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}},"textColor":"quinary"} -->
						<p class="has-text-align-center has-quinary-color has-text-color" style="font-size:14px">
						<?php
						esc_html_e(
							'Chief
                            Executive Officer',
							'cosmoswp'
						);
						?>
						</p>
						<!-- /wp:paragraph -->

						<!-- wp:social-links {"iconColor":"quaternary","iconColorValue":"#373737","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"15px"}}}} -->
						<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only"
							style="margin-top:15px"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

							<!-- wp:social-link {"url":"#","service":"instagram"} /-->

							<!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
						</ul>
						<!-- /wp:social-links -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"border":{"radius":"5px"}},"backgroundColor":"default","layout":{"type":"default"}} -->
				<div class="wp-block-group has-default-background-color has-background" style="border-radius:5px">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}}} -->
					<figure class="wp-block-image size-full has-custom-border"><img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-8.jpg"
							style="border-top-left-radius:5px;border-top-right-radius:5px" /></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0px"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group"
						style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)">
						<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"bottom":"5px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base"} -->
						<h5 class="wp-block-heading has-text-align-center has-base-color has-text-color"
							style="margin-bottom:5px;font-style:normal;font-weight:600"><?php esc_html_e( 'Jane Moon', 'cosmoswp' ); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}},"textColor":"quinary"} -->
						<p class="has-text-align-center has-quinary-color has-text-color" style="font-size:14px">
						<?php
						esc_html_e(
							'Vice
                            President',
							'cosmoswp'
						);
						?>
						</p>
						<!-- /wp:paragraph -->

						<!-- wp:social-links {"iconColor":"quaternary","iconColorValue":"#373737","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"15px"}}}} -->
						<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only"
							style="margin-top:15px"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

							<!-- wp:social-link {"url":"#","service":"instagram"} /-->

							<!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
						</ul>
						<!-- /wp:social-links -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"border":{"radius":"5px"}},"backgroundColor":"default","layout":{"type":"default"}} -->
				<div class="wp-block-group has-default-background-color has-background" style="border-radius:5px">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}}} -->
					<figure class="wp-block-image size-full has-custom-border"><img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-10.jpg"
							style="border-top-left-radius:5px;border-top-right-radius:5px" /></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0px"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group"
						style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)">
						<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"bottom":"5px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base"} -->
						<h5 class="wp-block-heading has-text-align-center has-base-color has-text-color"
							style="margin-bottom:5px;font-style:normal;font-weight:600"><?php esc_html_e( 'Paul Franky', 'cosmoswp' ); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}},"textColor":"quinary"} -->
						<p class="has-text-align-center has-quinary-color has-text-color" style="font-size:14px"><?php esc_html_e( 'Chief Financial Officer', 'cosmoswp' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:social-links {"iconColor":"quaternary","iconColorValue":"#373737","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"15px"}}}} -->
						<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only"
							style="margin-top:15px"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

							<!-- wp:social-link {"url":"#","service":"instagram"} /-->

							<!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
						</ul>
						<!-- /wp:social-links -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"border":{"radius":"5px"}},"backgroundColor":"default","layout":{"type":"default"}} -->
				<div class="wp-block-group has-default-background-color has-background" style="border-radius:5px">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}}} -->
					<figure class="wp-block-image size-full has-custom-border"><img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-11.jpg"
							style="border-top-left-radius:5px;border-top-right-radius:5px" /></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0px"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group"
						style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)">
						<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"bottom":"5px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base"} -->
						<h5 class="wp-block-heading has-text-align-center has-base-color has-text-color"
							style="margin-bottom:5px;font-style:normal;font-weight:600"><?php esc_html_e( 'Paul Franky', 'cosmoswp' ); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}},"textColor":"quinary"} -->
						<p class="has-text-align-center has-quinary-color has-text-color" style="font-size:14px"><?php esc_html_e( 'Chief Financial Officer', 'cosmoswp' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:social-links {"iconColor":"quaternary","iconColorValue":"#373737","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"15px"}}}} -->
						<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only"
							style="margin-top:15px"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

							<!-- wp:social-link {"url":"#","service":"instagram"} /-->

							<!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
						</ul>
						<!-- /wp:social-links -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d80)","bottom":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d80)"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-default-background-color has-background"
		style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"14px","letterSpacing":"1px","lineHeight":"1"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quinary"} -->
			<h6 class="wp-block-heading has-text-align-center has-quinary-color has-text-color"
				style="margin-bottom:0px;font-size:14px;font-style:normal;font-weight:400;letter-spacing:1px;line-height:1;text-transform:uppercase">
				<?php esc_html_e( 'Powerful, not overpowering', 'cosmoswp' ); ?></h6>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"2rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"base"} -->
			<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color"
				style="margin-bottom:var(--wp--preset--spacing--10);font-size:2rem;font-style:normal;font-weight:700">
				<?php esc_html_e( 'Clients really love us', 'cosmoswp' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"25px"}},"typography":{"lineHeight":"1.8"}},"textColor":"quaternary"} -->
			<p class="has-text-align-center has-quaternary-color has-text-color"
				style="margin-bottom:25px;line-height:1.8">
				<?php
				esc_html_e(
					'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa
                aperiam, laudantium voluptatum nulla?.',
					'cosmoswp'
				);
				?>
				</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"className":"alignwide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%">
				<!-- wp:image {"width":"100px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-1.png"
						style="width:100px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%">
				<!-- wp:image {"width":"100px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-2.png"
						style="width:100px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%">
				<!-- wp:image {"width":"100px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-3.png"
						style="width:100px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%">
				<!-- wp:image {"width":"100px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-4.png"
						style="width:100px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%">
				<!-- wp:image {"width":"100px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-5.png"
						style="width:100px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg","dimRatio":50,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|30","bottom":"var:preset|spacing|80","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover alignfull is-light" id="contact"
		style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img
			class="wp-block-cover__image-background" alt=""
			src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg"
			data-object-fit="cover" />
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"layout":{"type":"constrained","wideSize":"650px"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","fontSize":"2.5rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"default"} -->
				<h3 class="wp-block-heading has-text-align-center has-default-color has-text-color"
					style="margin-bottom:var(--wp--preset--spacing--10);font-size:2.5rem;font-style:normal;font-weight:300">
					<?php esc_html_e( 'Setting up your website only takes a few minutes', 'cosmoswp' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"25px"}},"typography":{"lineHeight":"1.8"}},"textColor":"default"} -->
				<p class="has-text-align-center has-default-color has-text-color"
					style="margin-bottom:25px;line-height:1.8">
					<?php
					esc_html_e(
						'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis',
						'cosmoswp'
					);
					?>
					</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"align":"full","className":"pw-form-style-1","layout":{"type":"constrained","wideSize":"300px"}} -->
				<div class="wp-block-group alignfull pw-form-style-1"><!-- wp:shortcode -->
					<?php esc_html_e( 'Add Contact form shortcode', 'cosmoswp' ); ?>
					<!-- /wp:shortcode -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-default-background-color has-background" id="blog"
		style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"14px","letterSpacing":"1px","lineHeight":"1"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quinary"} -->
			<h6 class="wp-block-heading has-text-align-center has-quinary-color has-text-color"
				style="margin-bottom:0px;font-size:14px;font-style:normal;font-weight:400;letter-spacing:1px;line-height:1;text-transform:uppercase">
				<?php esc_html_e( 'Latest News', 'cosmoswp' ); ?></h6>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"2rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"base"} -->
			<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color"
				style="margin-bottom:var(--wp--preset--spacing--10);font-size:2rem;font-style:normal;font-weight:700">
				<?php esc_html_e( 'Find out the latest marketing news', 'cosmoswp' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"25px"}},"typography":{"lineHeight":"1.8"}},"textColor":"quaternary"} -->
			<p class="has-text-align-center has-quaternary-color has-text-color"
				style="margin-bottom:25px;line-height:1.8">
				<?php
				esc_html_e(
					'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa
                aperiam, laudantium voluptatum nulla?.',
					'cosmoswp'
				);
				?>
				</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"60px"} -->
			<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"queryId":6,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:post-featured-image {"style":{"border":{"radius":"5px"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} /-->

			<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px","lineHeight":"1.5"},"spacing":{"margin":{"bottom":"5px"}}}} /-->

			<!-- wp:post-excerpt {"moreText":"Read more","excerptLength":20,"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.7"}},"textColor":"quinary"} /-->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
