<?php include (TEMPLATEPATH . '/partials/_header.php'); ?>
		
	<section class="main-wrap  lc">

		<!-- Category name, h1 -->

		<?php
			// Get current category name
			$cats = get_the_category();
			$cat_name = $cats[0]->name;
			?>
			<!--<h1 class="category-title clear"><?php echo $cat_name; ?></h1>
			-->
		<article class="post-entry  lc">


		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php
				// Checks for post selected image. Inserts if true.
				if( has_post_thumbnail() ) {
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single-post-large', true );
					$thumb_url = $thumb['0'];
					$thumb_large = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single-post-xlarge', true );
					$thumb_large_url = $thumb_large['0'];
					?>
					<figure class="post-figure image-container headline-img">
						<a href="<?php echo $thumb_large_url; ?>" rel="lightbox" class="lightbox">
							<img src="<?php echo $thumb_url; ?>" rel="lightbox" />
							<h1 class="post-title"><span class="post-title-bg img-title-bg"><?php the_title(); ?></span></h1>
						</a>
					</figure>
					<?php } ?>					
	
					<?php the_content(); ?>
					
			<?php endwhile; ?>
		<?php else : ?>

			<h1 class="post-title">Not Found</h1>
			<p>Sorry, but you are looking for something that isn't here.</p>

		<?php endif; ?>

		</article>

<?php include (TEMPLATEPATH . '/partials/_sidebar.php'); ?>

	<div class="clear"></div>

	</section>

<?php include (TEMPLATEPATH . '/partials/_maker.php'); ?>

<?php include (TEMPLATEPATH . '/partials/_footer.php'); ?>