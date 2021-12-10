<?php get_header();?>
<!-- frontpage hero -->
  <div class="frontpage">
    <div class="frontpage-container">
      <div class="row">
        <div class="col-2">

          <?php
			$hero = get_field('hero');
			if( $hero ): ?>
	          <h1>
	            <?php echo esc_html( $hero['main_title'] ); ?>
	          </h1>
	          <p><?php echo esc_html( $hero['small_title'] ); ?></p>

	          <?php
				if( $hero['link'] ): ?>
	          <a href="<?php echo esc_html( $hero['link'] ); ?>" class="btn"><?php echo esc_html( $hero['link_text'] ); ?> &#8594</a>

		  	  <?php endif; ?>
          <?php endif; ?>

        </div>
        <div class="col-2">
          <img src="<?php bloginfo('template_directory'); ?>/images/image1.png" alt="" />
        </div>
      </div>
    </div>
  </div> 
<!-- Featured categories -->
<!--   <div class="categories">
    <div class="small-container">
      <div class="row">
        <?php //echo do_shortcode("[products limit='3' category='hoodies, shirts']"); ?>
      </div>

    </div>    
  </div> -->
<div class="small-container">
<!-- Featured Products -->
<h2 class="title">
      Featured Products
    </h2>
    <div class="row">
      <?php echo do_shortcode("[featured_products limit='4']"); ?>
    </div>
<!--------------- Latest Products ----------------->
	<h2 class="title">
      Latest Products
    </h2>
    <div class="row">
      <?php echo do_shortcode("[recent_products limit='8']"); ?>
    </div>
</div>

<!----------- offer ------->
  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="<?php bloginfo('template_directory'); ?>/images/exclusive.png" class="offer-img">
        </div>
        <div class="col-2">
          <p>Exclusively Available on RedStore</p>
          <h1>Smart Band 4</h1>
          <small>
            The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3) Amoled color full-touch display with adjustable brightness, so everything is clear as can be.
          </small>
          <?php echo '<a href="'.get_permalink(117).'" class="btn">Buy Now &#8594</a>'; ?>
        </div>
      </div>
    </div>
  </div>
<!---------testimonials--------->
<?php if( have_rows('testimonials') ): ?>
<div class="testimonial">
  <div class="small-container">
    <div class="row">


    	
		
		      <?php while( have_rows('testimonials') ): the_row(); 
		      	$text = get_sub_field('text');
		      	$rating = get_sub_field('rating');
		        $image = get_sub_field('image');
		        $name = get_sub_field('name');
		        ?>


		        <div class="col-3">
        <i class="fa fa-quote-left"></i>
        <p>
          <?php echo $text; ?>
        </p>
        <div class="rating">
        	<?php switch($rating) {
        		case '1':
        			echo "<i class='fa fa-star'></i>
        				  <i class='fa fa-star-o'></i>
        				  <i class='fa fa-star-o'></i>
        				  <i class='fa fa-star-o'></i>
        				  <i class='fa fa-star-o'></i>";
        			break;
        		case '2':
        			echo "<i class='fa fa-star'></i>
        				  <i class='fa fa-star'></i>
        				  <i class='fa fa-star-o'></i>
        				  <i class='fa fa-star-o'></i>
        				  <i class='fa fa-star-o'></i>";
        			break;
        		case '3':
        			echo "<i class='fa fa-star'></i>
        				  <i class='fa fa-star'></i>
        				  <i class='fa fa-star'></i>
        				  <i class='fa fa-star-o'></i>
        				  <i class='fa fa-star-o'></i>";
        			break;
        		case '4':
        			echo "<i class='fa fa-star'></i>
        				  <i class='fa fa-star'></i>
        				  <i class='fa fa-star'></i>
        				  <i class='fa fa-star'></i>
        				  <i class='fa fa-star-o'></i>";
        			break;
        		case '5':
        			echo "<i class='fa fa-star'></i>
        				  <i class='fa fa-star'></i>
        				  <i class='fa fa-star'></i>
        				  <i class='fa fa-star'></i>
        				  <i class='fa fa-star'></i>";
        			break;

        	}; ?>
          
        </div>
        <img src="<?php echo $image['url']; ?>">
        <h3><?php echo $name; ?></h3>
      </div>


		      
		      <?php endwhile; ?>




      
      
    </div>
  </div>
</div>
<?php endif; ?>  

   

<!------------------- Brands ----------------->
<?php if( have_rows('brands') ): ?>
<div class="brands">
  <div class="small-container">
    <div class="row">
      <?php while( have_rows('brands') ): the_row(); 
        $image = get_sub_field('image');
        ?>
      <div class="col-5">
      	<img src="<?php echo $image['url']; ?>">
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php endif; ?>  


<?php get_footer();?>