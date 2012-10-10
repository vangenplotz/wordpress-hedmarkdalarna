				<div id="sidebar" class="sidebar clearfix" role="complementary">					
					<?php if ( is_active_sidebar( 'sidebar3' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar3' ); ?>

					<?php endif; ?>
					<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar2' ); ?>

					<?php endif; ?>
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php endif; ?>

				</div>