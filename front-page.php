<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

		<aside class="sidebar-home cf">
		  <div class="widget-services">
			  <h3>The hospital is licensed to treat the following classes of patients</h3>
				<div class="services-box medical">
				  <h2>Medical Services</h2>
					<ul>
					  <li><a href="#">Dermatology</a></li>
					</ul>
					<ul>
					  <li><a href="#">Gastroenterology</a></li>
					</ul>
					<ul>
					  <li><a href="#">Pain Management</a></li>
					</ul>
				</div>
				
				<div class="services-box surgical">
				  <h2>Surgical Services</h2>
					<ul>
					  <li><a href="#">Dental</a></li>
						<li><a href="#">Gynaecological</a></li>
						<li><a href="#">Urology</a></li>
					</ul>
					<ul>
					  <li><a href="#">Ear, Nose and Throat</a></li>
						<li><a href="#">Minor Orthopaedic</a></li>
						<li><a href="#">Podiatic</a></li>
					</ul>
					<ul>
					  <li><a href="#">General</a></li>
						<li><a href="#">Ophthalmic</a></li>
						<li><a href="#">Plastic/Reconstructive</a></li>
					</ul>
				</div>
			</div>
			
			<div class="widget-map"><?php echo do_shortcode('[gmap]'); ?></div>
		</aside>
		
		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>			
		<article id="post-<?php the_ID(); ?>" class="post-page center-box cf">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
			<?php get_sidebar(); ?>
		</article>
		<?php endwhile; ?>
<?php get_footer(); ?>