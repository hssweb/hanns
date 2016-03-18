<?php
/*
Template Name: about
*/
?>
<?php get_header(); ?>
<div class="about-banner">
	<div class="container">
	<div class="top-text f-left">
		<h1 class="header-title text-left">THINK NAMIBIA </h1>
		<p class="header-message text-left">ENVIRONMENTAL AWARENESS INFORMATION CAMPAIGN</p>
	</div>
	</div>
</div>
<section class="section-portfolio">
<div class="container">
	<div class="content-wrap">
		<div class="conter">
		<?php while (have_posts()) : the_post(); ?>
			<header class="article-header">
			<h1 class="article-title"><?php the_title(); ?></h1>
			</header>
			<article class="article-content">
				<?php  the_content(); ?></article>
		</div>
		<?php endwhile;  ?>
	</div>
	<div class="sidebar">
		<div class="widget">
			<h3>Objective</h3>
			<p>To contribute to environmental sustainability in Namibia through awareness-raising on environmental protection and climate change adaptation and mitigation. </p>
		</div>
		<div class="widget">
			<h3>Partners</h3>
			<p><a href="http://www.hss.de/namibia/en/home.html">Hanns Seidel Foundation Namibia (HSF)</a></p>
			<p><a href="http://www.drfn.org.na">Desert research foundation of Namibia (DRFN)</a></p>
		</div>
	</div>
</div>
</section>
<?php get_footer(); ?>