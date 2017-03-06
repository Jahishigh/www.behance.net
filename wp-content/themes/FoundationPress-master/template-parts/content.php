<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="small-12 medium-6 large-6 columns">

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><!-- <?php the_title(); ?></a></h2> -->
		<?php if (has_post_thumbnail()) ?>
			<div><?php the_post_thumbnail("visuel-listing"); ?></div>
			<?php
			// Contrôler si ACF est actif
			if ( !function_exists('get_field') ) return;
		?>
			<p style="display:inline-block;padding:10px;"> <img src="wp-content/themes/FoundationPress-master/assets/images/icons/view.png" alt="View" style="width:50px;height:50px;" /> <?php the_field('view'); ?></p>
			<img src="<?php the_field('avatar'); ?>" style="width:50px;" />
			<p style="display:inline-block"> <img src="wp-content/themes/FoundationPress-master/assets/images/icons/like.png" alt="Like" style="width:50px;height:50px;" /> <?php the_field('like'); ?></p>
	</header>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</div>

</div>
