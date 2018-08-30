<?php get_header(); ?>
<!-- Blogs section start -->
<section class="blogs-section sp-pad spad" style="padding-top: 30px;padding-bottom: 30px;">
	<div class="container-fluid p-0">
		<div class="blog-list">
			<!-- blog item -->
			<div class="blog-item">
					<div class="post-date-warp">
						<div class="container">
							<div class="post-date-box">
								<p></p>
							</div>
						</div>
					</div>
				<div class="container p-0" style="margin-left:15%">
					<h3 class="blog-title">	<?php if(is_single()) : ?>
						<?php the_title(); ?>
						<?php else: ?>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
						<?php endif; ?>
					</h3>
					<div class="post-metas">
						<div class="post-meta" by
						<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
					</div> |
					<div class="post-meta"><?php the_date(); ?></div>
					</div>
					<p>	<?php if(is_single()) : ?>
						<?php the_content(); ?>
						<?php else: ?>
						<?php the_excerpt(); ?>
						<?php endif; ?>

					<!--	comments section-->
						<?php if (is_single()) : ?>
						<hr>
						<?php comments_template(); ?>
						<?php endif; ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
			<!-- blog item -->
