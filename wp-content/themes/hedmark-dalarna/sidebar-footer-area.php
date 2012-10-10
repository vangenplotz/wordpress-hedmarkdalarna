				<div id="footer-area" class="sidebar fourcol last clearfix" role="complementary">asdfasdffas

					<?php if ( is_active_sidebar( 'footer-area' ) ) : ?>

						<?php dynamic_sidebar( 'footer-area' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>

				</div>