<?php include (get_template_directory_uri() . '/partials/_header.php'); ?>

<main role="main" class="main-wrap">
	<section class="content--full">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<article class="article">
				<?php
				// Checks for post selected image. Inserts if true.
				if( has_post_thumbnail() ) {
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb', true );
					$thumb_url = $thumb['0'];
					?>
					<figure>
						<img src="<?php echo $thumb_url; ?>" rel="lightbox" />
					</figure>
				<?php } ?>	
					<h1 class="article__title"><?php the_title(); ?></h1>				
					<?php the_content(); ?>
				</article>
					
			<?php endwhile; ?>
		<?php else : ?>

			<h1 class="article__title">Not Found</h1>
			<p>Sorry, but you are looking for something that isn't here.</p>

		<?php endif; ?>

	</section>
</main>

<?php include (get_template_directory_uri() . '/partials/_footer.php'); ?>