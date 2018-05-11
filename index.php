<?php

get_header(); ?>

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
                
                <?php
                    while(have_posts()) {
                        the_post(); ?>
                    <div class="post-item">
                      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
                        <div class="post-img">
                            <?php the_post_thumbnail(); ?>
                        </div> 
                    <div class="metabox">
                        <p>posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?>
                          in <?php echo get_the_category_list(',') ?>
                        </p>
                    </div>
                    <div class="generic-contnet">
                        <?php the_excerpt(); ?>
                        <p><a class="btn btn--stroke full-width" href="<?php the_permalink(); ?>">Contine reading</a></p>
                    </div>
                    
                    </div>
                  <?php  }
                  echo paginate_links();
                ?>


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
                <h3 class="h6">Send Us A Message</h3>
                <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                    <fieldset>
                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Your Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" value="" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="Your Message" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                    </div>
                    <div class="form-field">
                        <button class="full-width btn--primary">Submit</button>
                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
                    </fieldset>
                </form>
                <!-- contact-warning -->
                <div class="message-warning">
                    Something went wrong. Please try again.
                </div> 
                <!-- contact-success -->
                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>
            </div> <!-- end contact-primary -->
            <div class="contact-secondary">
                <div class="contact-info">
                    <h3 class="h6 hide-on-fullwidth">Contact Info</h3>
                    <div class="cinfo">
                        <h5>Where to Find Us</h5>
                        <p>
                            Office Coming Soon<br>
                            Fort Worth, TX<br>
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
                            Phone: (512) 648 3726<br>
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




<?php get_footer();

?>