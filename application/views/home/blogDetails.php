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
                        <h1 class="page-title">Blog</h1>
                        <!-- <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="<?php echo assets_url(); ?>home">Home</a></li>
                            <li class="active">Blog</li>
                        </ul> -->    
                    </div>
                </div>
            </div>
        </div>

        <div class="entry-content">
            <div class="container">
                <div class="row">
                    <!-- <div class="content-area col-lg-12 col-md-12 col-sm-12 col-xs-12"> -->
                        <!-- <article class="post-box"> -->
                            <!-- <div class="post-inner"> -->
                                <!-- <div class="entry-media post-cat-abs"> -->
                                    <!-- <img src="<?php echo assets_url(); ?>blog_uploads/<?php echo $blogInfo->blog_image; ?>" alt=""> -->
                                    <!-- <div class="post-cat">
                                        <div class="posted-in"><a href="#">Caucasus Heritage</a></div>
                                    </div>
                                </div> -->
                                <!-- <div class="inner-post"> -->
                    <div class="col-md-12">
                        <div class="content-area content-page">
                            <img src="<?php echo assets_url(); ?>blog_uploads/<?php echo $blogInfo->blog_image; ?>" alt="">   
                                    <div class="entry-header">
                                        <div class="entry-meta">
                                            <span class="posted-on"><?php echo date("M d, Y", strtotime($blogInfo->created_dtm)) ?></span>                                            
                                        </div>
                                        <h4 class="entry-title"><a class="title-link"><?php echo $blogInfo->blog_title ?></a></h4>
                                    </div>
                                    <div class="entry-summary the-excerpt">
                                        <p><?php echo $blogInfo->blog_description ?></p>
                                    </div>
                        </div>
                        <!-- </div> -->
                        <!-- </article>                     -->
                    </div>
                    
                </div>
            </div>
        </div>

<?php $this->load->view('fincludes/footer'); ?>