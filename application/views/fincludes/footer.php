<footer id="site-footer" class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0 align-self-center">
                            <div class="widget-footer widget-contact">
                                <img style="max-width: 244px;  filter: invert(49) brightness(16.5);" src="<?php echo assets_url(); ?>images/logo.png" alt="logo" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                            <div class="widget-footer">
                                <h6>About Us</h6>
								<?php $about=strip_tags($about->description); ?>
                                <p><?php echo substr($about,0,179); ?></p>
                                <div class="footer-social list-social">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/CaucasusHW" target="_self"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/CaucasusHW" target="_self"><i class="fab fa-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                            <div class="widget-footer">
                                <h6>Contacts</h6>
                                <ul class="footer-list">
                                    <!--<li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-place"></i></span>
                                <span class="list-item-text">411 University St, Seattle, USA</span>
                            </li>-->
                                    <li class="footer-list-item">
                                        <span class="list-item-icon"><i class="ot-flaticon-mail"></i></span>
                                        <span class="list-item-text"><?php echo $contact->email ?></span>
                                    </li>
                                    <li class="footer-list-item">
                                        <!-- <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span> -->
                                        <!-- <span class="list-item-text"><?php echo $contact->phone ?></span> -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                            <div class="widget-footer widget-contact">
                                <h6>Quick Links</h6>
                                <ul>
                                    <li><a href="#">Stylish Family Appartment</a></li>
                                    <li><a href="#">Modern Villa in Belgium</a></li>
                                    <li><a href="#">Private House in Spain</a></li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="widget-footer footer-widget-subcribe">
                                <h6>Subscribe</h6>
                                <form class="mc4wp-form" method="post">
                                    <div class="mc4wp-form-fields">
                                        <div class="subscribe-inner-form">
                                            <input type="email" name="EMAIL" placeholder="YOUR EMAIL" required="" />
                                            <button type="submit" class="subscribe-btn-icon"><i class="ot-flaticon-send"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <p>Follow our newsletter to stay updated about agency.</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </footer>
            <!-- #site-footer -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                            <p>Copyright © 2021 Caucasus Heritage All Rights Reserved.</p>
                        </div>
                        <div class="col-lg-5 col-md-12 align-self-center">
                            <ul class="icon-list-items inline-items justify-content-lg-end">
                                <li class="icon-list-item inline-item">
                                    <!-- <a href="#"><span class="icon-list-text">Terms of use</span></a> -->
                                </li>
                                <li class="icon-list-item inline-item">
                                    <!-- <a href="#"><span class="icon-list-text">Privacy Environmental Policy</span></a> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #page -->
        <a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>
        <!-- jQuery -->
        <script src="<?php echo assets_url();?>js/jquery.min.js"></script>
        <script src="<?php echo assets_url();?>js/mousewheel.min.js"></script>
        <script src="<?php echo assets_url();?>js/lightgallery-all.min.js"></script>
        <script src="<?php echo assets_url();?>js/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo assets_url();?>js/jquery.isotope.min.js"></script>
        <script src="<?php echo assets_url();?>js/owl.carousel.min.js"></script>
        <script src="<?php echo assets_url();?>js/easypiechart.min.js"></script>
        <script src="<?php echo assets_url();?>js/jquery.countdown.min.js"></script>
        <script src="<?php echo assets_url();?>js/scripts.js"></script>
        <!-- <script src="<?php echo assets_url();?>js/royal_preloader.min.js"></script> -->
        <!-- REVOLUTION JS FILES -->

        <script src="<?php echo assets_url();?>plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?php echo assets_url();?>plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script src="<?php echo assets_url();?>plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

        <!-- REVOLUTION SLIDER SCRIPT FILES -->
        <script src="<?php echo assets_url();?>js/rev-script-1.js"></script>
        <script>
            window.jQuery = window.$ = jQuery;
            (function ($) {
                "use strict";
                //Preloader
                Royal_Preloader.config({
                    mode: "progress",
                    background: "#1a1a1a",
                });
            })(jQuery);
        </script>
    </body>
</html>