<?php
/*
Template Name: Slider with Sidebar
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
          
          <div class="eightcol first clearfix frontslide">
            <?php if ( function_exists('easingsliderpro') ) { easingsliderpro( 1 ); } ?>
          </div>
          
          <div class="fourcol last clearfix couponwrap">
            <a href="javascript: openwindow()"><div class="coupon">
              <h4 class="text-center">Take us up on our offer to you...</h4>
              <h1 class="text-center"><strong>3 Hour<br /> Free Trial<br /> Companion <br />Care</strong></h1>
              <h4 class="text-center">Click to Print This Coupon</h4> 
              </div></a>
          </div>
          
          
			
				    <div id="main" class="eightcol first clearfix" role="main">
              
           

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						    <header class="article-header">
							
							    <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
                 

						
						    </header> <!-- end article header -->
					
						    <section class="entry-content clearfix" itemprop="articleBody">
							    <?php the_content(); ?>
							</section> <!-- end article section -->
						
						    <footer class="article-footer">
                  
							
						    </footer> <!-- end article footer -->
						    
						    
					
					    </article> <!-- end article -->
					
					    <?php endwhile; else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    					    	<header class="article-header">
    					    		<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    					    	<section class="entry-content">
    					    		<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
    					    	</section>
    					    	<footer class="article-footer">
    					    	    <p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
    					    	</footer>
    					    </article>
					
					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
