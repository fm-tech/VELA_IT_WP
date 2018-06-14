<?php get_header();

while(have_posts()) {
the_post();
}
?>
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

                <h1 class="display-2"><?php the_title(); ?></h1>

                <p class="lead"><?php the_content(); ?></p>
                
                <?php if($theParent or $testArray ) { ?> 
                <ul>
                <?php 
                    if ($theParent) {
                        $findChildrenOf = $theParent;
                    }   else {
                        $findChildrenOf = get_the_ID();
                    }          
                    
                    wp_list_pages(array(
                        'title_li' => null,
                        'child_of' => $findChildrenOf,
                        'sort_column' => 'menu_order'
                    ));
                ?>
                </ul>
                <?php } ?>
            </div>

        </div>
       
       
       <!-- end services-list -->
    </section> <!-- end s-services -->
    <!-- works
    ================================================== -->
   
    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">
        <div class="overlay"></div>
        <div class="contact__line"></div>
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Contact Us</h3>
                <h1 class="display-2 display-2--light">Reach out for a new project or just say hello</h1>
            </div>
        </div>
        <div class="row contact-content" data-aos="fade-up">
            <div class="contact-primary">
                <?php
                //please install ninjaforms for this function
                if ( !function_exists( 'ninja_forms_display_form' ) ) { 
                    require_once '/deprecated/includes/display/form/display-form.php'; 
                } 
                  
                // The form id. 
                $form_id = '1'; 
                  
                // NOTICE! Understand what this does before running. 
                $result = ninja_forms_display_form($form_id); 
                
                ?>
            </div> <!-- end contact-primary -->
            <div class="contact-secondary">
                <div class="contact-info">
                    <h3 class="h6 hide-on-fullwidth">Contact Info</h3>
                    <div class="cinfo">
                        <h5>Where to Find Us</h5>
                        <p>
                        320 Decker Dt, Suite 100<br>
                        Irving, TX 75062<br>
                        </p>
                    </div>
                    <div class="cinfo">
                        <h5>Email Us At</h5>
                        <p>
                            sales@velit.net<br>
                        </p>
                    </div>
                    <div class="cinfo">
                        <h5>Call Us At</h5>
                        <p>
                            Phone: (833) 483-5248<br>
                        </p>
                    </div>
                    <ul class="contact-social">
                        <li>
                            <a href="https://www.facebook.com/pg/velait/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/vela_it"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/vela_it/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                    </ul> <!-- end contact-social -->
                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->
        </div> <!-- end contact-content -->
    </section> <!-- end s-contact -->



<?php get_footer(); ?>