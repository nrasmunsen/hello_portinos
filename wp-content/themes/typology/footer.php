
			<footer id="typology-footer" class="typology-footer">
                
                <?php $footer_cols_and_sidebars = typology_get_footer_cols_and_sidebars(); ?>
                
                <?php if(!empty($footer_cols_and_sidebars)): ?>
                    
                    <div class="container">
                        <?php foreach ($footer_cols_and_sidebars as $col_and_sidebar) :?>
	
	                        <?php if( is_active_sidebar( $col_and_sidebar['sidebar'] ) ) : ?>
                                <div class="col-lg-<?php echo absint($col_and_sidebar['col'])?> typology-footer-sidebar"><?php dynamic_sidebar( $col_and_sidebar['sidebar'] );?></div>
	                        <?php endif; ?>
                        <?php endforeach; ?>
    
                    </div>

                <?php endif; ?>
			</footer>

		</div>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-340227-3"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-340227-3');
		</script>

		<?php get_sidebar(); ?>
		
		<?php wp_footer(); ?>

	</body>
</html>