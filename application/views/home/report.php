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
            <div class="page-header dtable text-center header-transparent">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title">CHW Reports</h1>
                        <!-- <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                            <li class="active">Report</li>
                        </ul> -->    
                    </div>
                </div>
            </div>
        </div>

        <div class="entry-content">
            <div class="container">
                <div class="row pb-50">
                            <div class="col-lg-8 col-md-12 mb-4 mb-lg-0">
                                <div class="ot-heading is-dots">
                                    <span>&nbsp;</span>
                                    <h2 class="main-heading">Reports</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 text-lg-right align-self-center">
                                <div class="ot-button">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                <div class="row justify-content-center">
                            <?php foreach($report as $record) { ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="post-box masonry-post post-item">
                                    <div class="post-inner">                                        
                                        <div class="inner-post">
                                            <div class="entry-header">
                                                <div class="entry-meta">
                                                    <!-- <span class="posted-on"><a href="#"><?php echo date("M d, Y", strtotime($record->created_dtm)) ?></a></span> -->
                                                    <span class="byline">
													<?php 
													if($record->month==1){ $mnth="January"; }
													if($record->month==2){ $mnth="February"; }
													if($record->month==3){ $mnth="March"; }
													if($record->month==4){ $mnth="April"; }
													if($record->month==5){ $mnth="May"; }
													if($record->month==6){ $mnth="June"; }
													if($record->month==7){ $mnth="July"; }
													if($record->month==8){ $mnth="August"; }
													if($record->month==9){ $mnth="September"; }
													if($record->month==10){ $mnth="October"; }
													if($record->month==11){ $mnth="November"; }
													if($record->month==12){ $mnth="December"; }
													 ?>
                                                        <span class="author vcard"><a class="url fn n" href="#"><?php echo $mnth; ?></a></span>
                                                    </span>
                                                    <span class="byline">
                                                        <span class="author vcard"><a class="url fn n" href="#"><?php echo $record->year; ?></a></span>
                                                    </span>
                                                </div>
                                                <!-- .entry-meta -->

                                                <h5 class="entry-title">
                                                    <a class="title-link" href="#"><?php echo $record->report_title ?></a>
                                                    <!-- <a class="title-link" href="<?php echo base_url(); ?>report_uploads/<?php echo $record->report_file; ?>" target="_blank"><?php echo $record->report_title ?></a> -->
                                                </h5>
                                            </div>
                                            <!-- .entry-header -->

                                            <div class="the-excerpt">
                                                <?php echo $record->report_description ?>
                                            </div>
                                            <!-- .entry-content -->
                                        </div>
										<div class="entry-media post-cat-abs">
                                            <?php echo $record->report_file ?>
                                            <!-- <iframe style="border: 1px solid #777;" src="https://indd.adobe.com/embed/29f1209a-86e5-45a6-a53e-974eda2177b6?startpage=1&allowFullscreen=true" width="650px" height="460px" frameborder="0" allowfullscreen=""></iframe> -->
                                            <div class="post-cat">
                                                <!-- <div class="posted-in"><a href="<?php echo base_url(); ?>newsdetails/<?php echo $record->news_id ?>">Caucasus Heritage</a></div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
            </div>
        </div>

<?php $this->load->view('fincludes/footer'); ?>