<section id="homePage" class="frontPageContainer">
	<div class="row frontPageTop">
		<?php 
	$query = new WP_query(' pagename=home-page');
	if ( $query->have_posts()){


	while ( $query->have_posts()){

			echo '<div class="logoContainer col-sm-12">';
			$query->the_post();	
			echo '<div class="logoImage">';
			the_post_thumbnail(); 


			echo '</div>';
			echo '</div>';
		}
	} 

	wp_reset_postdata();

	?>



		
	</div>