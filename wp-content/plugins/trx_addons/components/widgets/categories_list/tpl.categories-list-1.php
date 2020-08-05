<?php
/**
 * The "Style 1" template to display the categories list
 *
 * Used for widget Categories List.
 *
 * @package WordPress
 * @subpackage ThemeREX Addons
 * @since v1.0
 */

$args = get_query_var('trx_addons_args_widget_categories_list');
extract($args);
		
// Before widget (defined by themes)
trx_addons_show_layout($before_widget);
			
// Widget title if one was input (before and after defined by themes)
trx_addons_show_layout($title, $before_title, $after_title);
	
// Widget body
?>
<div class="categories_list categories_list_style_<?php echo esc_attr($style); ?>">
	<?php 
	if ($columns > 1) {
		?><div class="categories_list_columns columns_padding_bottom <?php echo esc_attr(trx_addons_get_columns_wrap_class()); ?>"><?php
	}
	foreach ($categories as $cat) {
		$cat_link = get_term_link($cat->term_id, $cat->taxonomy);
		if ($columns > 1) {
			?><div class="<?php echo esc_attr(trx_addons_get_column_class(1, $columns)); ?>"><?php
		}
		?>
		<div class="categories_list_item">
			<?php
			if ($show_thumbs) {
				$image = trx_addons_get_category_image($cat->term_id);
				$icon = trx_addons_get_category_icon($cat->term_id);
				?><div class="categories_list_image">
					<?php
					$src = empty($icon) && empty($image)
								? apply_filters('trx_addons_filter_no_image', trx_addons_get_file_url('css/images/no-image.jpg')) 
								: trx_addons_add_thumb_size(empty($icon) ? $image : $icon, trx_addons_get_thumb_size('masonry'));
					$attr = trx_addons_getimagesize($src);
					?>
					<img src="<?php echo esc_url($src); ?>" <?php if (!empty($attr[3])) trx_addons_show_layout($attr[3]); ?> alt="">
				</div><?php
			}
			?><h5 class="categories_list_title"><?php echo esc_html($cat->name); ?><?php
				if ($show_posts) { 
					?><span class="categories_list_count">(<?php echo esc_html($cat->count); ?>)</span><?php
				}
			?></h5>
			<a href="<?php echo esc_url($cat_link); ?>" class="categories_list_link"></a>
		</div>
		<?php
		if ($columns > 1) {
			?></div><?php
		}
	}
	if ($columns > 1) {
		?></div><?php
	}
	?>
</div>
<?php			

// After widget (defined by themes)
trx_addons_show_layout($after_widget);
?>