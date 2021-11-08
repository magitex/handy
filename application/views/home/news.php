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
                        <h1 class="page-title">News</h1>
                        <!-- <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                            <li class="active">News</li>
                        </ul> -->    
                    </div>
                </div>
            </div>
        </div>

        <div class="entry-content">
            <div class="container">
                <div class="row pb-50">
                            <div class="col-lg-8 col-md-12 mb-4 mb-lg-0">
                                <!-- <div class="ot-heading is-dots">
                                    <span>&nbsp;</span>
                                    <h2 class="main-heading">&nbsp;</h2>
                                </div> -->
                            </div>
                            <div class="col-lg-4 col-md-12 text-lg-right align-self-center">
                                <div class="ot-button">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                <div class="row justify-content-center">
                            <?php foreach($news as $record) { ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="post-box masonry-post post-item">
                                    <div class="post-inner">
                                        <div class="entry-media post-cat-abs">
                                            <a href="<?php echo base_url(); ?>newsdetails/<?php echo $record->news_id ?>"><img src="<?php echo assets_url(); ?>news_uploads/<?php echo $record->news_image; ?>" alt="" /></a>
                                            <div class="post-cat">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="inner-post">
                                            <div class="entry-header">
                                                <div class="entry-meta">
                                                    <span class="posted-on"><a href="<?php echo base_url(); ?>newsdetails/<?php echo $record->news_id ?>"><?php echo date("M d, Y", strtotime($record->created_dtm)) ?></a></span>
                                                    <!-- <span class="byline"> -->
                                                        <!-- <span class="author vcard">&nbsp;</span> -->
                                                    <!-- </span> -->
                                                </div>
                                                <!-- .entry-meta -->

                                                <h5 class="entry-title">
                                                    <a class="title-link" href="<?php echo base_url(); ?>newsdetails/<?php echo $record->news_id ?>"><?php echo $record->news_title ?></a>
                                                </h5>
                                            </div>
                                            <!-- .entry-header -->

                                            <div class="the-excerpt">
                                                <?php echo $record->news_description; ?>
                                            </div>
                                            <!-- .entry-content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
            </div>
        </div>

<?php $this->load->view('fincludes/footer'); ?>