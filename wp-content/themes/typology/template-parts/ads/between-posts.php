<?php if( $ad = typology_get_option('ad_between_posts') ): ?>
    <div class="typology-ad typology-ad-between-posts"><?php echo do_shortcode( $ad ); ?></div>
<?php endif; ?>