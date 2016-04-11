<?php
/**
 * Template Name: One Page Holder
 */
?>

<section id="homePage" class="frontPageContainer container">


<?php while (have_posts()) : the_post(); ?>

<div class="content row">
<div class="logo">
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

<a href="<?php  echo get_post_meta($post->ID, 'link', true); ?>" target="blank">
<div class="signUp">
<?php echo get_post_meta($post->ID, 'signUp', true); ?>
</div>
</a>
</div>






<?php endwhile; ?>


<div class="goodLooking">
  <a href="http://www.goodlooking.co.nz/">GOOD LOOKING WEBSITES</a>
</div> 

</section>
