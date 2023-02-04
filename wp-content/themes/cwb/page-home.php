<?php
/*
Template Name: Home
*/
get_header();
?>

<div id="content-wrapper">
	<div id="main-banner-wraper">
		<div class="baner-text">
			<h1><?php the_field('home_banner_text'); ?></h1>
		</div>
		<ul id="main-slider">
			<?php
			if (have_rows('home_banner_slider')) :
				while (have_rows('home_banner_slider')) : the_row();
			?>
					<li style="background-image: url(<?php the_sub_field('banner'); ?>);"></li>
			<?php
				endwhile;
			endif;
			?>

		</ul>
	</div>

	<div id="products-section">
		<div class="page-width">
			<ul>
				<?php

				if (have_rows('products_section')) :

					while (have_rows('products_section')) : the_row();
				?>
						<li>
							<img src="<?php the_sub_field('product_image'); ?>" alt="" width="" height="" />
						</li>
					<?php
					endwhile;

				else :
					?>
					<span>No Products Found</span>
				<?php
				endif;
				?>

			</ul>
		</div>
	</div><!--products section end-->

	<div id="tap-section">
		<div class="page-width">
			<h3 class="page-headings"><?php the_field('what’s_on_title'); ?></h3>
			<div class="left-align">

				<?php

				if (have_rows('what’s_on_left_section')) :

					while (have_rows('what’s_on_left_section')) : the_row();
				?>
						<div class="row">
							<h4><?php the_sub_field('title'); ?></h4>
							<h5><?php the_sub_field('sub_title'); ?></h5>
							<p><?php the_sub_field('description'); ?></p>
						</div>
					<?php
					endwhile;

				else :
					?>
					<span>No Data Found</span>
				<?php
				endif;
				?>

			</div>
			<div class="right-align">
				<?php

				if (have_rows('what’s_on_right_section')) :

					while (have_rows('what’s_on_right_section')) : the_row();
				?>
						<div class="row">
							<h4><?php the_sub_field('title'); ?></h4>
							<h5><?php the_sub_field('sub_title'); ?></h5>
							<p><?php the_sub_field('description'); ?></p>
						</div>
					<?php
					endwhile;

				else :
					?>
					<span>No Data Found</span>
				<?php
				endif;
				?>

			</div>

			<div class="bottom-text">
				<p><?php the_field('what’s_on_bottom_text'); ?></p>
			</div>
		</div>
	</div><!--tap section end-->

	<div id="parallax-section" class="parallax-window" data-parallax="scroll" data-image-src="<?php the_field('paralax_image'); ?>">
	</div><!--parallax section end-->

	<div id="eat-section">
		<div class="page-width">
			<h3 class="page-headings"><?php the_field('what’s_to_eat_title'); ?></h3>
			<div class="top-text">
				<p><?php the_field('what’s_to_eat_description'); ?></p>
			</div>
			<div class="image-col">
				<img src="<?php the_field('what’s_to_eat_image'); ?>" alt="" width="" height="" />
			</div>
			<div class="text-col">
				<?php

				if (have_rows('eat_section_content')) :

					while (have_rows('eat_section_content')) : the_row();
				?>
						<div class="row">
							<h6><?php the_sub_field('title'); ?></h6>
							<p><?php the_sub_field('description'); ?></p>
						</div>
					<?php
					endwhile;

				else :
					?>
					<span>No Data Found</span>
				<?php
				endif;
				?>

			</div>
		</div>
	</div><!--eat section end-->

	<div id="shop-section">
		<div class="page-width">
			<h3 class="page-headings"><?php the_field('shop_section_title'); ?></h3>
			<ul>
				<?php

				if (have_rows('shop_section')) :

					while (have_rows('shop_section')) : the_row();
				?>
						<li>
							<img src="<?php the_sub_field('image'); ?>" alt="" width="" height="" />
						</li>
					<?php
					endwhile;

				else :
					?>
					<span>No Data Found</span>
				<?php
				endif;
				?>

			</ul>
			<a href="<?php the_sub_field('all_products_link'); ?>" target="_blank" class="shop-button">see all products</a>
		</div>
	</div><!--shop section end-->

</div><!--content wrapper end-->



<?php

get_footer();
