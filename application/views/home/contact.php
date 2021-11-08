<?php $this->load->view('fincludes/header'); ?>  
        <div id="side-panel" class="side-panel">
            <a href="#" class="side-panel-close"><i class="ot-flaticon-close-1"></i></a>
            <div class="side-panel-block">
                <div class="side-panel-wrap">
                    <div class="ot-heading ">
                        <h2 class="main-heading">Contact Info</h2>
                    </div>
                    <div class="side-panel-cinfo">
                        <ul class="panel-cinfo">
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-place"></i></span>
                                <span class="panel-list-text"><?php echo $contact->address ?></span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="panel-list-text"><?php echo $contact->email ?></span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="panel-list-text"><?php echo $contact->phone ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="side-panel-social">
                        <ul>
                            <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php echo $contact->fb_link ?>" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo $contact->linkedin_link ?>" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="<?php echo $contact->insta_link ?>" target="_self"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="site-content">
            <div class="page-header dtable text-center header-transparent page-header-contact">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title">Contact</h1>
                        <!-- <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contacts</li>
                        </ul>   -->  
                    </div>
                </div>
            </div>
        </div>

        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                        <div class="contact-left">
                            <h2>Get in Touch</h2>
                            <p class="font14">Your email address will not be published. Required fields are marked *</p>
                            <?php $this->load->helper("form"); ?>
                            <form role="form" action="<?php echo base_url() ?>home/add" method="post" class="wpcf7">
                                <div class="main-form">
                                    <p>
                                        <input type="text" name="name" value="<?php echo set_value('name') ?>" size="40" class="" aria-invalid="false" placeholder="Your Name *" required>
                                    </p>
                                    <p>
                                        <input type="email" name="email" value="<?php echo set_value('email') ?>" size="40" class="" aria-invalid="false" placeholder="Your Email *" required>
                                    </p>
                                    <p>
                                        <textarea name="message" cols="40" rows="10" value="<?php echo set_value('message') ?>" class="" aria-invalid="false" placeholder="Message..." required></textarea>
                                    </p>
                                    <p><button type="submit" class="octf-btn">Send Message</button></p>
                                </div>
                            </form>
                            <?php  
                                $this->load->helper('form');
                                $error = $this->session->flashdata('error');
                                if($error)
                                {
                                    echo $this->session->flashdata('error');
                                }
                                $success = $this->session->flashdata('success');
                                if($success)
                                {
                                    echo $this->session->flashdata('success');
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <div class="ot-heading">
                                <span>[ our contact details ]</span>
                                <h2 class="main-heading">Let's Start a Project</h2>
                            </div>
                            <p><?php echo $contact->description ?></p>
                            <div class="contact-info">
                                <i class="ot-flaticon-place"></i>
                                <div class="info-text">
                                    <h6>OUR ADDRESS:</h6>
                                    <p><?php echo $contact->address ?></p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <i class="ot-flaticon-mail"></i>
                                <div class="info-text">
                                    <h6>OUR MAILBOX:</h6>
                                    <p><a href="mailto:theratio_interior@mail.com"><?php echo $contact->email ?></a></p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <i class="ot-flaticon-phone-call"></i>
                                <div class="info-text">
                                    <h6>OUR PHONE:</h6>
                                    <p><a href="tel:+1 800 456 789 123"><?php echo $contact->phone ?></a></p>
                                </div>
                            </div>
                            <div class="list-social">
                                <ul>
                                    <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?php echo $contact->fb_link ?>" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo $contact->linkedin_link ?>" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="<?php echo $contact->insta_link ?>" target="_self"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="contact-map">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86077.66255184308!2d-122.40402224079803!3d47.60810999586645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906ab3f905c4b1%3A0x96bf575ff75ab1aa!2s411%20University%20St%2C%20Seattle%2C%20WA%2098101%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1584084043716!5m2!1svi!2s" height="522" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
<?php $this->load->view('fincludes/footer'); ?>