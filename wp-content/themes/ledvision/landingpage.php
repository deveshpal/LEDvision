<?php
/**
 * Template Name: Landing Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>

<!doctype html>	
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title>LED</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="<?php bloginfo('template_directory');?>/css/style1.css" rel="stylesheet" />
     <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/reset.css">
    <link href="<?php bloginfo('template_directory');?>/css/jquery.bxslider.css" rel="stylesheet" />
    <script src="<?php bloginfo('template_directory');?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/jquery.stellar.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/custom.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/parallax.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/jquery.bxslider.min.js"></script>
   <!--  // <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script> -->


    <script>
        $('.parallax-window').parallax({ imageSrc: 'images/img1.jpg"' });


        

    </script>
    <style>
        .parallax-window {
            min-height: 600px;
            background: transparent;
        }
    </style>


</head>


<body>

	<div id="myModal" class="modal">
			
		
		  <!-- Modal content -->

		  <div class="modal-content">
		  		<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		     	</div>
		    	<div class="wrapper">
		    		<h2>Contact us</h2>
		    		<p class="subheading">Hope you had enough information about our company and our work. Please send us your queries and we will soon answer them. </p>
		    		<?php
						    // TO SHOW THE PAGE CONTENTS
						    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
						        <div class="entry-content-page">
						            <?php the_content(); ?> <!-- Page Content -->
						        </div><!-- .entry-content-page -->

						    <?php
						    endwhile; //resetting the page loop
						    wp_reset_query(); //resetting the page query
				    ?>
		    	</div>		
		  </div>

		</div>



<header data-parallax="true" data-speed="2" id="headerrrrr">
	<div class="overlay"></div>
    <div class="mainmenu">
    	<div class="wrapper">
    		<div class="logowrapper" id="headerrrrrNon">
	    		<a href="#headerrrrr"><i class="bgimages logo"></i></a>
	    	</div>
	    	<div class="hamburgmenu"></div>
	    	<div class="menuwrapper">
				<ul class="mainmenuul">
		    		<li><a href="#about">About</a></li>
		    		<li><a href="#services">Services</a></li>
		    		<li><a href="#work">Work</a></li>
		    		<li><a href="#gallerycollection">Event Gallery</li>
		    		<li><a href="#contactussss">Contact</a></li>
		    	</ul>
		    	<div class="socialicons">
		    		<ul>
			    		<li><a href="#"><i class="fb bg-images"></i></a></li>
			    		<li><a href="#"><i class="insta bg-images"></i></a></li>
			    	</ul>
		    	</div>
	    	</div>
	    	
    	</div>
    </div>

    <div class="centerelement">
    	<h2>Quality delivered everytime!</h2>
		<p>We are the pioneers in rental LED Screens in central India</p>
		<!-- <a href="#"><span>Contact Now</span></a> -->
		<button id="myBtn">Contact Now</button>

		
    </div>
	<div class="arrowdown">
        <div class="arrow bounce">

        </div>
    </div>
    <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0"> 
        <source src="<?php bloginfo('template_directory');?>/images/FinalVideo.mp4" type="video/mp4" />
    </video>
</header>

<main>


  <section class="aboutusmain">

  	    <!-- <div class="section1"></div> -->
	    <div class="parallax1"  id="about">
	        <div class="leftpanl">
	            <div class="aboutus">
	                <h1>About Us</h1>
	                <p>LED Vision is the pioneer in rental LED Screens in central India with the best and largest LED Screens. With our trained and professional team, we will add great value to your shows, ceremonies and corporate events.<br><br>
		With our professional and customer centric approach we deliver the best services always! We have a variety of LED Screens and they are available in varied Sizes. We have successfully contributed in the best and the biggest shows /events in Indore and around. With years of experience and expertise we are undoubtedly the best rental LED Screen provider in central India.</p>
	            </div>
	        </div>
	        <div></div>
	    </div>

	    <div class="parallax2" id="services">
	    	<h1>Services</h1>
	    	<p class="servicesubhead">We have different LED Screens with different pixel configurations.  To give you an insight we have listed different varieties and their uses to make it simpler for you to choose the right product.</p> <br><br>
	    	<p class="servicesubhead">We provide excellent VJ Services along with the screen setup.</p>

	    	<div class="screenpitch">
	    		<ul>
	    			<li class="active"><i class="screenlight bg-images"></i><a href="firsttab" class="firstpanel active"><span>LED Screen Pitch 3.8</span></a></li>
	    			<li><a href="secondtab"><i class="screenlight bg-images"></i><span>LED Screen Pitch 4.8</span></a></li>
	    			<li><a href="thirdtab"><i class="screenlight bg-images"></i><span>LED Screen Pitch 6</a></span></li>
	    			<li><a href="fourthtab"><i class="screenlight bg-images"></i><span>LED Screen Pitch 6.9</a></span></li>
	    			<li><a href="fifthtab"><i class="screenlight bg-images"></i><span>LED Screen Pitch 10</a></span></li>
	    		</ul>
	    		<div class="screendetails">
	    			<div id="firsttab" class="commonclass firstpanel active">
	    				<p>This high definition pixel is ideal for indoor events with presentations having high data concentration per slide. It has outstanding clarity even from a close distance. This is globally the most used pitch in corporate events.</p>
	    				<br><br>
	    				<p>Minimum Viewing Distance: 10 Ft.﻿</p>
	    				<br><br>
	    				<p>Idea for Corporate and close viewing indoor events</p>
	    				<br><br>
	    				<p>Medium Brightness indoor use only</p>
	    				<br><br>
	    			</div>
	    			<div id="secondtab" class="commonclass">
	    				<p>This high definition pixel is ideal for indoor events with presentations having high data concentration per slide. It has outstanding clarity even from a close distance. This is globally the most used pitch in corporate events.</p>
	    				<br><br>
	    				<p>Minimum Viewing Distance: 10 Ft.﻿</p>
	    				<br><br>
	    				<p>Idea for Corporate and close viewing indoor events</p>
	    				<br><br>
	    				<p>Medium Brightness indoor use only</p>
	    				<br><br>
	    			</div>
	    			<div id="thirdtab" class="commonclass">
	    				<p>This high definition pixel is ideal for indoor events with presentations having high data concentration per slide. It has outstanding clarity even from a close distance. This is globally the most used pitch in corporate events.</p>
	    				<br><br>
	    				<p>Minimum Viewing Distance: 10 Ft.﻿</p>
	    				<br><br>
	    				<p>Idea for Corporate and close viewing indoor events</p>
	    				<br><br>
	    				<p>Medium Brightness indoor use only</p>
	    				<br><br>
	    			</div>
	    			<div id="fourthtab" class="commonclass">
	    				<p>This high definition pixel is ideal for indoor events with presentations having high data concentration per slide. It has outstanding clarity even from a close distance. This is globally the most used pitch in corporate events.</p>
	    				<br><br>
	    				<p>Minimum Viewing Distance: 10 Ft.﻿</p>
	    				<br><br>
	    				<p>Idea for Corporate and close viewing indoor events</p>
	    				<br><br>
	    				<p>Medium Brightness indoor use only</p>
	    				<br><br>
	    			</div>
	    			<div id="fifthtab" class="commonclass">
	    				<p>This high definition pixel is ideal for indoor events with presentations having high data concentration per slide. It has outstanding clarity even from a close distance. This is globally the most used pitch in corporate events.</p>
	    				<br><br>
	    				<p>Minimum Viewing Distance: 10 Ft.﻿</p>
	    				<br><br>
	    				<p>Idea for Corporate and close viewing indoor events</p>
	    				<br><br>
	    				<p>Medium Brightness indoor use only</p>
	    				<br><br>
	    			</div>
	    		</div>
	    	</div>


	    	<ul class="bxslider">
			  <li>
			  	<ul>
	    			<li class=""><i class="screenlight bg-images"></i><a href="" class="firstpanel active"><span>LED Screen Pitch 3.8</span></a></li>
	    		</ul>
    			<div class="screendetails">
    				<div id="firsttab" class="commonclass firstpanel active">
	    				<p>This high definition pixel is ideal for indoor events with presentations having high data concentration per slide. It has outstanding clarity even from a close distance. This is globally the most used pitch in corporate events.</p>
	    				<br><br>
	    				<p>Minimum Viewing Distance: 10 Ft.﻿</p>
	    				<br><br>
	    				<p>Idea for Corporate and close viewing indoor events</p>
	    				<br><br>
	    				<p>Medium Brightness indoor use only</p>
	    				<br><br>
	    			</div>
    			</div>
			  </li>
			  <li>
			  	<ul>
	    			<li class=""><i class="screenlight bg-images"></i><a href="" class="firstpanel active"><span>LED Screen Pitch 4.8</span></a></li>
	    		</ul>
    			<div class="screendetails">
    				<div id="firsttab" class="commonclass firstpanel active">
	    				<p>This high definition pixel is ideal for indoor events with presentations having high data concentration per slide. It has outstanding clarity even from a close distance. This is globally the most used pitch in corporate events.</p>
	    				<br><br>
	    				<p>Minimum Viewing Distance: 10 Ft.﻿</p>
	    				<br><br>
	    				<p>Idea for Corporate and close viewing indoor events</p>
	    				<br><br>
	    				<p>Medium Brightness indoor use only</p>
	    				<br><br>
	    			</div>
    			</div>
			  </li>
			  <li>
			  	<ul>
	    			<li class=""><i class="screenlight bg-images"></i><a href="" class="firstpanel active"><span>LED Screen Pitch 6</span></a></li>
	    		</ul>
    			<div class="screendetails">
    				<div id="firsttab" class="commonclass firstpanel active">
	    				<p>This high definition pixel is ideal for indoor events with presentations having high data concentration per slide. It has outstanding clarity even from a close distance. This is globally the most used pitch in corporate events.</p>
	    				<br><br>
	    				<p>Minimum Viewing Distance: 10 Ft.﻿</p>
	    				<br><br>
	    				<p>Idea for Corporate and close viewing indoor events</p>
	    				<br><br>
	    				<p>Medium Brightness indoor use only</p>
	    				<br><br>
	    			</div>
    			</div>
			  </li>
			  <li>
			  	<ul>
	    			<li class=""><i class="screenlight bg-images"></i><a href="" class="firstpanel active"><span>LED Screen Pitch 6.9</span></a></li>
	    		</ul>
    			<div class="screendetails">
    				<div id="firsttab" class="commonclass firstpanel active">
	    				<p>This high definition pixel is ideal for indoor events with presentations having high data concentration per slide. It has outstanding clarity even from a close distance. This is globally the most used pitch in corporate events.</p>
	    				<br><br>
	    				<p>Minimum Viewing Distance: 10 Ft.﻿</p>
	    				<br><br>
	    				<p>Idea for Corporate and close viewing indoor events</p>
	    				<br><br>
	    				<p>Medium Brightness indoor use only</p>
	    				<br><br>
	    			</div>
    			</div>
			  </li>
			  <li>
			  	<ul>
	    			<li class=""><i class="screenlight bg-images"></i><a href="" class="firstpanel active"><span>LED Screen Pitch 10</span></a></li>
	    		</ul>
    			<div class="screendetails">
    				<div id="firsttab" class="commonclass firstpanel active">
	    				<p>This high definition pixel is ideal for indoor events with presentations having high data concentration per slide. It has outstanding clarity even from a close distance. This is globally the most used pitch in corporate events.</p>
	    				<br><br>
	    				<p>Minimum Viewing Distance: 10 Ft.﻿</p>
	    				<br><br>
	    				<p>Idea for Corporate and close viewing indoor events</p>
	    				<br><br>
	    				<p>Medium Brightness indoor use only</p>
	    				<br><br>
	    			</div>
    			</div>
			  </li>
			</ul>

	    </div>
  </section>

  <section class="workgallery" id="work">
  	<h2>Work</h2>
  	<p class="subheading">Few of our successful shows and a glimpse of scope of our diverse work</p>

  	<div class="wrapper">




	<div id="lightbox" class="lightbox">
		<ul>
			<?php if( have_rows('artist') ):
			while ( have_rows('artist') ) : the_row(); ?>
			<li>
				<?php if(get_sub_field('artist_image')) { ?>
							<img src="<?php the_sub_field('artist_image'); ?>">
						<?php } ?>
				<div class="image_title">
					<h5 class="title">
						<?php if(get_sub_field('artist_name')) { ?>
							<?php the_sub_field('artist_name'); ?>
						<?php } ?>
					</h5>
				</div>
			</li>
			<?php
				endwhile;
				else :
				endif;
			?>

		</ul>

			<p class="loadmore firstshown" id="LoadMore"><a href="javascript:void(0);">Load more</a></p>

			<p class="loadmore firsthidden" id="showLess"><a href="javascript:void(0);">Show less</a></p>
	</div>


  	</div>
  </section>


   <section class="workgallery eventgalleryclass" id="gallerycollection">
  	<h2>Event gallery</h2>

  	<div class="wrapper">




	<div id="eventgallery" class="lightbox">
		<h4>Concerts</h4>
		<ul>

			<?php if( have_rows('event_gallery') ):
			while ( have_rows('event_gallery') ) : the_row(); ?>
			<li>
				<?php if(get_sub_field('event_images')) { ?>
							<img src="<?php the_sub_field('event_images'); ?>">
						<?php } ?>
			</li>
			<?php
				endwhile;
				else :
				endif;
			?>

		</ul>

			<!-- <p class="loadmore"><a href="">Load more</a></p> -->
			<p class="loadmore firstshown" id="LoadMore1"><a href="javascript:void(0);">Load more</a></p>

			<p class="loadmore firsthidden" id="showLess1"><a href="javascript:void(0);">Show less</a></p>
	</div>

	<div id="corporategallery" class="lightbox">
		<h4>Corporate events</h4>
		<ul>

			<?php if( have_rows('corporate_gallery') ):
			while ( have_rows('corporate_gallery') ) : the_row(); ?>
			<li>
				<?php if(get_sub_field('corporate_image')) { ?>
							<img src="<?php the_sub_field('corporate_image'); ?>">
						<?php } ?>
			</li>
			<?php
				endwhile;
				else :
				endif;
			?>

		</ul>

			<!-- <p class="loadmore"><a href="">Load more</a></p> -->
			<p class="loadmore firstshown" id="LoadMore2"><a href="javascript:void(0);">Load more</a></p>

			<p class="loadmore firsthidden" id="showLess2"><a href="javascript:void(0);">Show less</a></p>
	</div>

	<div id="stagegallery" class="lightbox">
		<h4>New stage ideas</h4>
		<ul>

			<?php if( have_rows('stage_gallery') ):
			while ( have_rows('stage_gallery') ) : the_row(); ?>
			<li>
				<?php if(get_sub_field('stage_images')) { ?>
							<img src="<?php the_sub_field('stage_images'); ?>">
						<?php } ?>
			</li>
			<?php
				endwhile;
				else :
				endif;
			?>

		</ul>

		<!-- 	<p class="loadmore"><a href="">Load more</a></p>
		 -->
		 <p class="loadmore firstshown" id="LoadMore3"><a href="javascript:void(0);">Load more</a></p>

			<p class="loadmore firsthidden" id="showLess3"><a href="javascript:void(0);">Show less</a></p>
	</div>


  	</div>
  </section>

  <section class="work">
  	<h3>We’ve worked with</h3>
  	<ul class="desktop">
  		<li><i class="sprite sprite-gionee"></i></li>
  		<li><i class="sprite sprite-icici"></i></li>
  		<li><i class="sprite sprite-axisbank"></i></li>
  		<li style="margin-right:0;"><i class="sprite sprite-case"></i></li>
  		<li><i class="sprite sprite-jaguar"></i></li>
  		<li><i class="sprite sprite-toyota"></i></li>
  		<li><i class="sprite sprite-audi"></i></li>
  		<li><i class="sprite sprite-somelogo"></i></li>
  		<li><i class="sprite sprite-landrover"></i></li>
  		<li style="margin-right:0;"><i class="sprite sprite-eicher"></i></li>
  		<li style="margin-left: 56px;"><i class="sprite sprite-oppo"></i></li>
  		<li><i class="sprite sprite-bridgestone"></i></li>
  		<li style="margin-right:0;"><i class="sprite sprite-johndheere"></i></li>
  	</ul>

  	<div class="formobile">
  		<div class="first">
  			<img src="<?php bloginfo('template_url'); ?>/images/logo/gionee.jpg">
	  		<img src="<?php bloginfo('template_url'); ?>/images/logo/icici.jpg">
	  		<img style="margin-right:0;" src="<?php bloginfo('template_url'); ?>/images/logo/axisbank.jpg">
  		</div>
  		

  		
  		<img src="<?php bloginfo('template_url'); ?>/images/logo/case.jpg">
  		<img src="<?php bloginfo('template_url'); ?>/images/logo/jaguar.jpg">
  		<img src="<?php bloginfo('template_url'); ?>/images/logo/toyota.jpg">
  		<img src="<?php bloginfo('template_url'); ?>/images/logo/audi.jpg">
  		<img src="<?php bloginfo('template_url'); ?>/images/logo/mercedes.jpg">
  		<img src="<?php bloginfo('template_url'); ?>/images/logo/landrover.jpg">
  		<img src="<?php bloginfo('template_url'); ?>/images/logo/eicher.jpg">
  		<img src="<?php bloginfo('template_url'); ?>/images/logo/oppo.jpg">
  		<img src="<?php bloginfo('template_url'); ?>/images/logo/bridgestone.jpg	">
  		<img src="<?php bloginfo('template_url'); ?>/images/logo/johndeere.jpg">
  		<div class="clearfix"></div>
  	</div>

  </section>

  <section class="contactus" id="contactussss">
  	<h3>Contact us and get a quote today</h3>
  	<!-- <a href="#" class="contactusbutton">Contact Now</a> -->
  	<button id="myBtnsecond">Contact Now</button>
  </section>
</main>

<footer>
	<div class="wrapper">
		<div class="socialfooters">
			<i class="fbfooter bg-images"></i>
			<i class="instafooter bg-images"></i>	
		</div>
		<ul class="footermenu">
			<li><a href="">About</a></li>
			<li><a href="">Services</a></li>
			<li><a href="">Work</a></li>
			<li><a href="#gallerycollection">Event Gallery</a></li>
			<li><a href="#contactussss">Contact</a></li>
		</ul>
		<p class="copyright">Copyright 2016 LED Vision</p>
	</div
	<?php echo do_shortcode( '[contact-form-7 id="41" title="Contact form 1"]');?>
</footer>


</body>



</html>




