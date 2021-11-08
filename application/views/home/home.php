<?php $this->load->view('fincludes/header'); ?> 
<style>
.md-modal md-effect-12{ display:none !important; }
</style>           
        <div id="side-panel" class="side-panel">
            <a href="#" class="side-panel-close"><i class="ot-flaticon-close-1"></i></a>
            <div class="side-panel-block">
                <div class="side-panel-wrap">
                    <div class="ot-heading">
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
            <div class="p-0">
                <div id="rev_slider_one_wrapper" class="rev_slider_wrapper" data-alias="mask-showcase" data-source="gallery">
                    <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                    <div id="rev_slider_one" class="rev_slider" style="display: none;" data-version="5.4.1">
                        <ul>
                            <!-- SLIDE 1 -->
							<?php foreach($banner as $records) { ?>
                            <li
                                data-index="rs-70"
                                data-transition="fade"
                                data-slotamount="default"
                                data-hideafterloop="0"
                                data-hideslideonmobile="off"
                                data-easein="default"
                                data-easeout="default"
                                data-masterspeed="300"
                                data-thumb="images/Slider.jpg"
                                data-rotate="0"
                                data-saveperformance="off"
                                data-title=""
                                data-param1="1"
                                data-param2=""
                                data-param3=""
                                data-param4=""
                                data-param5=""
                                data-param6=""
                                data-param7=""
                                data-param8=""
                                data-param9=""
                                data-param10=""
                                data-description=""
                            >
                                <!-- MAIN IMAGE -->
                                <img
                                    src="<?php echo assets_url(); ?>banner_uploads/<?php echo $records->image; ?>"
                                    data-bgcolor="rgba(255,255,255,0)"
                                    style=""
                                    alt=""
                                    data-bgposition="center center"
                                    data-bgfit="cover"
                                    class="rev-slidebg"
                                    data-bgrepeat="no-repeat"
                                    data-bgparallax="off"
                                    data-no-retina
                                />

                                <!-- LAYER 1  right image overlay dark-->
                                <div class="banner-info-new">
                                    <div class="banner-info-txt"><?php echo $records->title; ?></div>
                                    <div class="banner-desc-txt"><?php echo $records->description; ?></div>
                                    <div class="banner-desc-link">
                                        <a href="<?php echo base_url(); ?>projects" class="octf-btn octf-btn-primary btn-slider btn-large md-trigger">Monitoring Dashboard</a>
                                        <a href="<?php echo base_url(); ?>report" class="octf-btn octf-btn-primary btn-slider btn-large check-btn">Our Most Recent Report</a>
                                    </div>
                                </div>
                                <!-- LAYER 4  Bold Title-->
                                <div
                                    class="tp-caption tp-resizeme tp-caption-main hide"
                                    id="slide-70-layer-2"
                                    data-x="['center','center','center','center']"
                                    data-hoffset="['2','0','0','0']"
                                    data-y="['center','center','center','center']"
                                    data-voffset="['-56','-63','-60','-65']"
                                    data-fontsize="['40','30','20','18']"
                                    data-lineheight="['83','70','51','55']"
                                    data-color="['#fff','#fff','#fff','#fff']"
                                    data-fontweight="['700','700','700','700']"
                                    data-whitespace="nowrap"
                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                                    data-textAlign="['left','left','left','left']"
                                >
                                    <?php echo $records->title; ?>
                                </div>

                                <!-- LAYER 5  Paragraph-->
                                <div
                                    class="tp-caption tp-resizeme tp-desc hide"
                                    id="slide-70-layer-3"
                                    data-x="['center','center','center','center']"
                                    data-hoffset="['0','0','0','0']"
                                    data-y="['center','center','center','center']"
                                    data-voffset="['54','43','31','15']"
                                    data-fontsize="['19','18','17','16']"
                                    data-lineheight="['33','27','28','24']"
                                    data-width="['818','630','500','417']"
                                    data-weight="['500','500','500','500']"
                                    data-color="['#fff','#fff','#fff','#fff']"
                                    data-whitespace="normal"
                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                                    data-textAlign="['center','center','center','center']"
                                ><?php echo $records->description; ?></div>

                                <!-- LAYER 6  Read More-->
                                <div
                                    class="tp-caption rev-btn hide"
                                    id="slide-70-layer-4"
                                    data-x="['center','center','center','center']"
                                    data-hoffset="['0','0','0','0']"
                                    data-y="['center','center','center','center']"
                                    data-voffset="['170','140','119','110']"
                                    data-fontsize="['13','18','17','0']"
                                    data-lineheight="['25','18','16','16']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                                    data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                >
                                    <a href="<?php echo base_url(); ?>projects" class="octf-btn octf-btn-primary btn-slider btn-large md-trigger">Monitoring Dashboard</a>
                                    <a href="<?php echo base_url(); ?>report" class="octf-btn octf-btn-primary btn-slider btn-large check-btn">Our Most Recent Report</a>
                                </div>
                            </li>
							<?php } ?>
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </div>

           

            <section class="about-1 pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 align-self-center mb-5 mb-lg-0">
                            <div class="about-img-img">
                                <img class="img-fluid" src="<?php echo assets_url(); ?>uploads/<?php echo $wwd->multi_file; ?>" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 align-self-center">
                            <div class="about-content-1 ml-xl-70 mb-30">
                                <div class="ot-heading is-dots">
                                    <span></span>
                                    <h2 class="main-heading"><?php echo $wwd->title; ?></h2>
                                </div>
                                <div class="max-conetnt">
                                    <?php echo $wwd->description; ?>
                                </div>
                                <div class="ot-button">
                                    <a href="<?php echo base_url().'our_mission/'.$wwd->id; ?>" class="octf-btn octf-btn-dark">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-1 pt-0 mt-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 ">
                            <div class="about-content-1 mb-xs-30">
                                <div class="ot-heading is-dots">
                                    <span></span>
                                    <h2 class="main-heading"><?php echo $wwr->title; ?></h2>
                                </div>
                                <div class="max-conetnt">
                                    <?php echo $wwr->description; ?>
                                </div>
                                <div class="ot-button">
                                    <a href="<?php echo base_url().'our_mission/'.$wwr->id; ?>" class="octf-btn octf-btn-dark">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-5 mb-lg-0">
                            <div class="about-img-img">
                                <img class="img-fluid" src="<?php echo assets_url(); ?>uploads/<?php echo $wwr->multi_file; ?>" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <div class="client-1 bg-light-1" id="section2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center theratio-align-center">
                            <div class="ot-heading is-dots">
                                <h2 class="main-heading">Funders and Partners</h2>
                            </div>
                            <div class="space-50"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="clients-slide owl-theme owl-carousel">
                                <?php foreach($funders as $record) { ?>
                                <div class="img-item">
                                    <figure class="box-item"><p><?php echo $record->funders_name ?></p></figure>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <section class="services-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center theratio-align-center">
                            <div class="ot-heading is-dots">
                                <span>[ Our Goals ]</span>
                                <h2 class="main-heading">What Can We Offer</h2>
                            </div>
                            <div class="space-50"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-1 text-center">
                                <div class="content-box">
                                    <h5><a href="servcies-detail-1.html">Caucasus Heritage</a></h5>
                                    <p>We will help you to get the result you dreamed of.</p>
                                </div>
                                <div class="link-box">
                                    <a href="servcies-detail-1.html" class="btn-details">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-2 text-center">
                                <div class="content-box">
                                    <h5><a href="servcies-detail-1.html">Caucasus Heritage</a></h5>
                                    <p>Individual, aesthetically stunning solutions for customers.</p>
                                </div>
                                <div class="link-box">
                                    <a href="servcies-detail-1.html" class="btn-details">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-3 text-center">
                                <div class="content-box">
                                    <h5><a href="servcies-detail-1.html">Caucasus Heritage</a></h5>
                                    <p>We create and produce our product design lines.</p>
                                </div>
                                <div class="link-box">
                                    <a href="servcies-detail-1.html" class="btn-details">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="space-80"></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                            <div class="ot-counter">
                                <div>
                                    <span>[</span>
                                    <span class="num" data-to="180" data-time="2000">180</span>
                                    <span>+]</span>
                                </div>
                                <h6>Current Clients</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                            <div class="ot-counter">
                                <div>
                                    <span>[</span>
                                    <span class="num" data-to="10" data-time="2000">10</span>
                                    <span>+]</span>
                                </div>
                                <h6>years of experience</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-sm-0">
                            <div class="ot-counter">
                                <div>
                                    <span>[</span>
                                    <span class="num" data-to="35" data-time="2000">35</span>
                                    <span>+]</span>
                                </div>
                                <h6>awards winning</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="ot-counter">
                                <div>
                                    <span>[</span>
                                    <span class="num" data-to="5" data-time="2000">5</span>
                                    <span>+]</span>
                                </div>
                                <h6>Offices Worldwide</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- <section class="p-0">
                <div class="row">
                    <div class="col-md-12 text-center theratio-align-center">
                        <div class="ot-heading is-dots">
                            <span>[ Our Projects ]</span>
                            <h2 class="main-heading">What we have achieved</h2>
                        </div>
                        <div class="space-50"></div>
                    </div>
                </div>
                <div class="projects-grid pf_4_cols style-2 p-info-s2 img-scale w-auto no-gaps mx-0">
                    <div class="grid-sizer"></div>
                    <div class="project-item category-19 thumb2x">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-standar.html">
                                    <img src="images/pp-1.jpg" alt="" />
                                </a>
                                <div class="overlay">
                                    <h5>Caucasus Heritage</h5>
                                    <i class="ot-flaticon-add"></i>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a class="title-link" href="portfolio-standar.html">Caucasus Heritage</a></h5>
                                    <p class="portfolio-cates"><a href="#">Heritage</a></p>
                                </div>
                                <a class="overlay" href="portfolio-standar.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-item category-14">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-detail-slider.html">
                                    <img src="images/p-1.jpg" alt="" />
                                </a>
                                <div class="overlay">
                                    <h5>Caucasus Heritage</h5>
                                    <i class="ot-flaticon-add"></i>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a class="title-link" href="portfolio-detail-slider.html">Caucasus Heritage</a></h5>
                                    <p class="portfolio-cates">
                                        <a href="#">Heritage</a>
                                    </p>
                                </div>
                                <a class="overlay" href="portfolio-detail-slider.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-item category-15">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-left.html">
                                    <img src="images/p-2.jpg" alt="" />
                                </a>
                                <div class="overlay">
                                    <h5>Caucasus Heritage</h5>
                                    <i class="ot-flaticon-add"></i>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a class="title-link" href="portfolio-left.html">Caucasus Heritage</a></h5>
                                    <p class="portfolio-cates"><a href="#">Heritage</a></p>
                                </div>
                                <a class="overlay" href="portfolio-left.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-item category-20">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-right.html">
                                    <img src="images/p-2.jpg" alt="" />
                                </a>
                                <div class="overlay">
                                    <h5>Caucasus Heritage</h5>
                                    <i class="ot-flaticon-add"></i>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a class="title-link" href="portfolio-right.html">Caucasus Heritage</a></h5>
                                    <p class="portfolio-cates"><a href="#">Heritage</a></p>
                                </div>
                                <a class="overlay" href="portfolio-right.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-item category-19">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-small.html">
                                    <img src="images/p-1.jpg" alt="" />
                                </a>
                                <div class="overlay">
                                    <h5>Caucasus Heritage</h5>
                                    <i class="ot-flaticon-add"></i>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a class="title-link" href="portfolio-small.html">Caucasus Heritage</a></h5>
                                    <p class="portfolio-cates"><a href="#">Heritage</a></p>
                                </div>
                                <a class="overlay" href="portfolio-small.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-item category-14 thumb2x">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-big.html">
                                    <img src="images/pp-4.jpg" alt="" />
                                </a>
                                <div class="overlay">
                                    <h5>Caucasus Heritage</h5>
                                    <i class="ot-flaticon-add"></i>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a class="title-link" href="portfolio-big.html">Caucasus Heritage</a></h5>
                                    <p class="portfolio-cates"><a href="#">Heritage</a></p>
                                </div>
                                <a class="overlay" href="portfolio-big.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="skill-1 pb-0 d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 align-self-center">
                            <div class="skill-content-1 mr-xl-70">
                                <div class="ot-heading is-dots">
                                    <span>[ our skills ]</span>
                                    <h2 class="main-heading">The Core Company Values</h2>
                                </div>
                                <div class="space-20"></div>
                                <div class="space-5"></div>
                                <p>We are constantly growing, learning, and improving and our partners are steadily increasing. 200 projects is a sizable number.</p>
                                <div class="space-10"></div>
                                <div class="ot-progress pb-3" data-percent="65" data-processed="true">
                                    <div class="overflow">
                                        <span class="pname f-left">Best in service</span>
                                    </div>
                                    <div class="iprogress">
                                        <div class="progress-bar"><span class="ppercent">65%</span></div>
                                    </div>
                                </div>
                                <div class="ot-progress pb-3" data-percent="85" data-processed="true">
                                    <div class="overflow"><span class="pname f-left">100+ Project</span></div>
                                    <div class="iprogress">
                                        <div class="progress-bar"><span class="ppercent">85%</span></div>
                                    </div>
                                </div>
                                <div class="ot-progress pb-3" data-percent="55" data-processed="true">
                                    <div class="overflow"><span class="pname f-left">Easy to Implement</span></div>
                                    <div class="iprogress">
                                        <div class="progress-bar"><span class="ppercent">55%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mt-4 mt-lg-0 align-self-center">
                            <div class="skill-img-1">
                                <img src="images/skills-banner.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-team-list team-1 pb-0 d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center theratio-align-center">
                            <div class="ot-heading is-dots">
                                <span>[ our professionals ]</span>
                                <h2 class="main-heading">Meet Our Skilled Team</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="team-slider owl-theme owl-carousel">
                            <div class="team-item">
                                <div class="team-wrap">
                                    <div class="team-thumb">
                                        <img src="https://via.placeholder.com/750x977.png" alt="Christina Torres" />
                                    </div>
                                    <div class="team-text-overlay">
                                        <div class="team-info dtable">
                                            <div class="dcell">
                                                <h4 class="m_name">Christina Torres</h4>
                                                <div class="team-social flex-middle">
                                                    <span class="ot-flaticon-add"></span>
                                                    <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                                    <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                                    <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                            <div class="m_extra">
                                                <span>[ Company Founder ]</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item">
                                <div class="team-wrap">
                                    <div class="team-thumb">
                                        <img src="https://via.placeholder.com/750x977.png" alt="Jesica Lina" />
                                    </div>
                                    <div class="team-text-overlay">
                                        <div class="team-info dtable">
                                            <div class="dcell">
                                                <h4 class="m_name">Jesica Lina</h4>
                                                <div class="team-social flex-middle">
                                                    <span class="ot-flaticon-add"></span>
                                                    <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                                    <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                                    <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                            <div class="m_extra">
                                                <span>[ Marketing Manager ]</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item">
                                <div class="team-wrap">
                                    <div class="team-thumb">
                                        <img src="https://via.placeholder.com/750x977.png" alt="Robert Cooper" />
                                    </div>
                                    <div class="team-text-overlay">
                                        <div class="team-info dtable">
                                            <div class="dcell">
                                                <h4 class="m_name">Robert Cooper</h4>
                                                <div class="team-social flex-middle">
                                                    <span class="ot-flaticon-add"></span>
                                                    <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                                    <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                                    <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                            <div class="m_extra">
                                                <span>[ Finance Manager ]</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item">
                                <div class="team-wrap">
                                    <div class="team-thumb">
                                        <img src="https://via.placeholder.com/750x977.png" alt="Olivia Peterson" />
                                    </div>
                                    <div class="team-text-overlay">
                                        <div class="team-info dtable">
                                            <div class="dcell">
                                                <h4 class="m_name">Olivia Peterson</h4>
                                                <div class="team-social flex-middle">
                                                    <span class="ot-flaticon-add"></span>
                                                    <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                                    <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                                    <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                            <div class="m_extra">
                                                <span>[ CEO of Company ]</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item">
                                <div class="team-wrap">
                                    <div class="team-thumb">
                                        <img src="https://via.placeholder.com/750x977.png" alt="Amalia Bruno" />
                                    </div>
                                    <div class="team-text-overlay">
                                        <div class="team-info dtable">
                                            <div class="dcell">
                                                <h4 class="m_name">Amalia Bruno</h4>
                                                <div class="team-social flex-middle">
                                                    <span class="ot-flaticon-add"></span>
                                                    <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                                    <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                                    <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                            <div class="m_extra">
                                                <span>[ Interior Designer ]</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item">
                                <div class="team-wrap">
                                    <div class="team-thumb">
                                        <img src="https://via.placeholder.com/750x977.png" alt="Katie Doyle" />
                                    </div>
                                    <div class="team-text-overlay">
                                        <div class="team-info dtable">
                                            <div class="dcell">
                                                <h4 class="m_name">Katie Doyle</h4>
                                                <div class="team-social flex-middle">
                                                    <span class="ot-flaticon-add"></span>
                                                    <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                                    <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                                    <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                            <div class="m_extra">
                                                <span>[ Interior Designer ]</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item">
                                <div class="team-wrap">
                                    <div class="team-thumb">
                                        <img src="https://via.placeholder.com/750x977.png" alt="Andrew Kinzer" />
                                    </div>
                                    <div class="team-text-overlay">
                                        <div class="team-info dtable">
                                            <div class="dcell">
                                                <h4 class="m_name">Andrew Kinzer</h4>
                                                <div class="team-social flex-middle">
                                                    <span class="ot-flaticon-add"></span>
                                                    <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                                    <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                                    <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                            <div class="m_extra">
                                                <span>[ CEO of Company ]</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item">
                                <div class="team-wrap">
                                    <div class="team-thumb">
                                        <img src="https://via.placeholder.com/750x977.png" alt="Anna Richmond" />
                                    </div>
                                    <div class="team-text-overlay">
                                        <div class="team-info dtable">
                                            <div class="dcell">
                                                <h4 class="m_name">Anna Richmond</h4>
                                                <div class="team-social flex-middle">
                                                    <span class="ot-flaticon-add"></span>
                                                    <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                                    <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                                    <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                            <div class="m_extra">
                                                <span>[ Marketing Manager ]</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item">
                                <div class="team-wrap">
                                    <div class="team-thumb">
                                        <img src="https://via.placeholder.com/750x977.png" alt="Christina Torres" />
                                    </div>
                                    <div class="team-text-overlay">
                                        <div class="team-info dtable">
                                            <div class="dcell">
                                                <h4 class="m_name">Christina Torres</h4>
                                                <div class="team-social flex-middle">
                                                    <span class="ot-flaticon-add"></span>
                                                    <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                                    <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                                    <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                            <div class="m_extra">
                                                <span>[ Company Founder ]</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item">
                                <div class="team-wrap">
                                    <div class="team-thumb">
                                        <img src="https://via.placeholder.com/750x977.png" alt="Jesica Lina" />
                                    </div>
                                    <div class="team-text-overlay">
                                        <div class="team-info dtable">
                                            <div class="dcell">
                                                <h4 class="m_name">Jesica Lina</h4>
                                                <div class="team-social flex-middle">
                                                    <span class="ot-flaticon-add"></span>
                                                    <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                                    <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                                    <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                            <div class="m_extra">
                                                <span>[ Marketing Manager ]</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item">
                                <div class="team-wrap">
                                    <div class="team-thumb">
                                        <img src="https://via.placeholder.com/750x977.png" alt="Robert Cooper" />
                                    </div>
                                    <div class="team-text-overlay">
                                        <div class="team-info dtable">
                                            <div class="dcell">
                                                <h4 class="m_name">Robert Cooper</h4>
                                                <div class="team-social flex-middle">
                                                    <span class="ot-flaticon-add"></span>
                                                    <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                                    <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                                    <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                            <div class="m_extra">
                                                <span>[ Finance Manager ]</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <section class="news-blog">
                <div class="container">
                    <div class="row pb-50">
                        <div class="col-lg-8 col-md-12 mb-4 mb-lg-0">
                            <div class="ot-heading is-dots">
                                <span>[ our blog ]</span>
                                <h2 class="main-heading">Read Our Latest News</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 text-lg-right align-self-center">
                            <div class="ot-button">
                                <a href="<?php echo base_url(); ?>allnews" class="octf-btn octf-btn-dark border-hover-dark">View all</a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <?php foreach($news as $record) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="post-box masonry-post post-item">
                                <div class="post-inner">
                                    <div class="entry-media post-cat-abs">
                                        <a href="<?php echo base_url().'newsdetails/'.$record->news_id; ?>"><img src="<?php echo base_url(); ?>news_uploads/<?php echo $record->news_image; ?>" alt="" /></a>
                                        <div class="post-cat">
                                            <div class="posted-in"><a href="#">Caucasus Heritage</a></div>
                                        </div>
                                    </div>
                                    <div class="inner-post">
                                        <div class="entry-header">
                                            <div class="entry-meta">
                                                <span class="posted-on"><a href="#"><?php echo date("M d, Y", strtotime($record->created_dtm)) ?></a></span>
                                                <span class="byline">
                                                    <span class="author vcard"><a class="url fn n" href="#">Tom Black</a></span>
                                                </span>
                                            </div>

                                            <h5 class="entry-title">
                                                <a class="title-link" href="<?php echo base_url().'newsdetails/'.$record->news_id; ?>"><?php echo $record->news_title ?></a>
                                            </h5>
                                        </div>

                                        <div class="the-excerpt">
                                            <?php echo $record->short ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section> -->
        </div>
<?php $this->load->view('fincludes/footer'); ?>