<?php
if (($pathwell_slider_sc = pathwell_get_theme_option('front_page_title_shortcode')) != '' && strpos($pathwell_slider_sc, '[')!==false && strpos($pathwell_slider_sc, ']')!==false) {

	?><div class="front_page_section front_page_section_title front_page_section_slider front_page_section_title_slider"><?php
		// Add anchor
		$pathwell_anchor_icon = pathwell_get_theme_option('front_page_title_anchor_icon');	
		$pathwell_anchor_text = pathwell_get_theme_option('front_page_title_anchor_text');	
		if ((!empty($pathwell_anchor_icon) || !empty($pathwell_anchor_text)) && shortcode_exists('trx_sc_anchor')) {
			echo do_shortcode('[trx_sc_anchor id="front_page_section_title"'
											. (!empty($pathwell_anchor_icon) ? ' icon="'.esc_attr($pathwell_anchor_icon).'"' : '')
											. (!empty($pathwell_anchor_text) ? ' title="'.esc_attr($pathwell_anchor_text).'"' : '')
											. ']');
		}
		// Show slider (or any other content, generated by shortcode)
		echo do_shortcode($pathwell_slider_sc);
	?></div><?php

} else {

	?><div class="front_page_section front_page_section_title<?php
				$pathwell_scheme = pathwell_get_theme_option('front_page_title_scheme');
				if (!pathwell_is_inherit($pathwell_scheme)) echo ' scheme_'.esc_attr($pathwell_scheme);
				echo ' front_page_section_paddings_'.esc_attr(pathwell_get_theme_option('front_page_title_paddings'));
			?>"<?php
			$pathwell_css = '';
			$pathwell_bg_image = pathwell_get_theme_option('front_page_title_bg_image');
			if (!empty($pathwell_bg_image)) 
				$pathwell_css .= 'background-image: url('.esc_url(pathwell_get_attachment_url($pathwell_bg_image)).');';
			if (!empty($pathwell_css))
				echo ' style="' . esc_attr($pathwell_css) . '"';
	?>><?php
		// Add anchor
		$pathwell_anchor_icon = pathwell_get_theme_option('front_page_title_anchor_icon');	
		$pathwell_anchor_text = pathwell_get_theme_option('front_page_title_anchor_text');	
		if ((!empty($pathwell_anchor_icon) || !empty($pathwell_anchor_text)) && shortcode_exists('trx_sc_anchor')) {
			echo do_shortcode('[trx_sc_anchor id="front_page_section_title"'
											. (!empty($pathwell_anchor_icon) ? ' icon="'.esc_attr($pathwell_anchor_icon).'"' : '')
											. (!empty($pathwell_anchor_text) ? ' title="'.esc_attr($pathwell_anchor_text).'"' : '')
											. ']');
		}
		?>
		<div class="front_page_section_inner front_page_section_title_inner<?php
			if (pathwell_get_theme_option('front_page_title_fullheight'))
				echo ' pathwell-full-height sc_layouts_flex sc_layouts_columns_middle';
			?>"<?php
				$pathwell_css = '';
				$pathwell_bg_mask = pathwell_get_theme_option('front_page_title_bg_mask');
				$pathwell_bg_color = pathwell_get_theme_option('front_page_title_bg_color');
				if (!empty($pathwell_bg_color) && $pathwell_bg_mask > 0)
					$pathwell_css .= 'background-color: '.esc_attr($pathwell_bg_mask==1
																		? $pathwell_bg_color
																		: pathwell_hex2rgba($pathwell_bg_color, $pathwell_bg_mask)
																	).';';
				if (!empty($pathwell_css))
					echo ' style="' . esc_attr($pathwell_css) . '"';
		?>>
			<div class="front_page_section_content_wrap front_page_section_title_content_wrap content_wrap">
				<?php
				// Caption
				$pathwell_caption = pathwell_get_theme_option('front_page_title_caption');
				if (!empty($pathwell_caption) || (current_user_can('edit_theme_options') && is_customize_preview())) {
					?><h1 class="front_page_section_caption front_page_section_title_caption front_page_block_<?php echo !empty($pathwell_caption) ? 'filled' : 'empty'; ?>"><?php echo wp_kses($pathwell_caption, 'pathwell_kses_content' ); ?></h1><?php
				}
			
				// Description (text)
				$pathwell_description = pathwell_get_theme_option('front_page_title_description');
				if (!empty($pathwell_description) || (current_user_can('edit_theme_options') && is_customize_preview())) {
					?><div class="front_page_section_description front_page_section_title_description front_page_block_<?php echo !empty($pathwell_description) ? 'filled' : 'empty'; ?>"><?php echo wp_kses(wpautop($pathwell_description), 'pathwell_kses_content' ); ?></div><?php
				}
				
				// Buttons
				if (pathwell_get_theme_option('front_page_title_button1_link')!='' || pathwell_get_theme_option('front_page_title_button2_link')!='') {
					?><div class="front_page_section_buttons front_page_section_title_buttons"><?php
						pathwell_show_layout(pathwell_customizer_partial_refresh_front_page_title_button1_link());
						pathwell_show_layout(pathwell_customizer_partial_refresh_front_page_title_button2_link());
					?></div><?php
				}
				?>
			</div>
		</div>
	</div>
	<?php
}