<?php
/*
Template Name:MyTemplate
*/
get_header(); 

?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- <?php 
			// while ( have_posts() ) :
				// the_post();

				// get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
					// comments_template();
				// endif;

//			endwhile; // End of the loop.
			?>

		</main> #main -->
    <!-- </div> -->
    <!-- #primary -->
<!-- </div> -->
<!-- .wrap -->

<table border="1">
<tr>
 <th>Sr No</th>
 <th>Product Name</th>
 <th>Product Description</th>
</tr>
  <?php
    global $wpdb;
    $result = $wpdb->get_results ( "SELECT * FROM malav_products" );
    echo wp_json_encode($result);
    // echo $result.js();
    foreach ( $result as $print )   {
    ?>
    <tr>
    <td><?php echo $print->product_id;?></td>
    <td><?php echo $print->product_name;?></td>
    <td><?php echo $print->product_description;?></td>
    </tr>
        <?php 
    }
    get_footer();
?>