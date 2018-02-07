<?php

get_header();

while(have_posts()) {
the_post(); ?>
 <!-- home
    ================================================== -->
    <section id="home" class="page-template"  data-parallax="scroll" data-image-src="<?php echo get_theme_file_uri('/images/hero-bg.jpg') ?>" data-natural-width=3000 data-natural-height=2000 data-position-y=center>
           <ul class="page-social">
            <li>
                <a href="https://www.facebook.com/pg/velait/"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="https://twitter.com/vela_it"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="https://www.instagram.com/vela_it/"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
        </ul> 
        <!-- end home-social -->
        <?php
            $theParent = wp_get_post_parent_id(get_the_ID());
            if ($theParent) { ?>
               <ul class="bread_c">
        <li><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></li>
         <li><?php the_title(); ?></li>
          </ul>
           <?php }
        ?>
   </section>
<!-- services
    ================================================== -->
    <section id='services' class="s-services">      
       <div class="row narrow section-intro add-bottom text-center">

            <div class="col-twelve tab-full">

                <h2 class="display-2"><?php the_title(); ?></h2>
                <div class="metabox">mex box will go here</div>
                <div class="content">
                    <p class="lead"><?php the_content(); ?></p>
                </div>

            </div>

        </div>
       
       
       <!-- end services-list -->
    </section> <!-- end s-services -->


<?php }

get_footer();

?>