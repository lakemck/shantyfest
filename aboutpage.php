<?php
/**
 * Template Name: About Page
 */
?>

<section id="homePage" class="frontPageContainer container">


<?php while (have_posts()) : the_post(); ?>

<div class="content row">
<div class="heroImage">
	<?php the_post_thumbnail();  ?>
</div>	

<div class="mainTitle">
	<h1>
		<?php get_template_part('templates/page', 'header'); ?>
	</h1>

</div>  

<div class="slogan">
  <?php get_template_part('templates/content', 'page'); ?>	
</div>


</div>






<?php endwhile; ?>


<div class="goodLooking">
  <a href="http://www.goodlooking.co.nz/">GOOD LOOKING WEBSITES</a>
</div> 

</section>
