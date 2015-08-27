<?php 
/**
 * Badge template
 */
?>
<div class="ub-badge-container">

	<?php
	ub_get_template_part( 'badge-theme', $badge_theme, true, array(
			'badge_theme' => $badge_theme,
			'badge_id' => $badge_id,
			'badge_icon' => $badge_icon,
			'badge_html' => $badge_html,
			'badge_color' => $badge_color,
			'excerpt' => $excerpt,
			'title' => $title,
			'content' => $content,
			'enable_badge_permalink' => $enable_badge_permalink,
			'class' => 'ub-badge-theme-' .  $badge_theme
	) );
	
	if ( isset( $badge_count ) && $badge_count > 1 ) {
		?>&nbsp;<span class="badge-count">&#215;&nbsp;<?php echo $badge_count; ?></span><?php
	}
	?>
</div>