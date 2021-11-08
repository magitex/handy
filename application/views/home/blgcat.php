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
                                <span class="panel-list-text">411 University St, Seattle, USA</span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="panel-list-text">caucasusheritage@gmail.com</span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="panel-list-text">+1 800 456 789 123</span>
                            </li>
                        </ul>
                    </div>
                    <div class="side-panel-social">
                        <ul>
                            <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="site-content">
            <div class="page-header dtable text-center header-transparent">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title"><?php echo $category_name; ?></h1>
                        <!-- <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Blog</li>
                        </ul>  -->   
                    </div>
                </div>
            </div>
        </div>

        <div class="entry-content">
            <div class="container">
                <div class="row">
                    <div class="content-area col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <!-- <?php foreach($category as $record) { ?> -->
                        <!-- <center><h3><?php echo $record->category_name ?></h3></center> -->
                        <!-- <?php } ?> -->
                        <?php foreach($blogdetails as $record) { ?>
                        <article class="post-box">
                            <div class="post-inner">
                                <div class="entry-media post-cat-abs">
                                    <a href="<?php echo base_url(); ?>blogdetails/<?php echo $record->blog_id ?>"><img src="<?php echo assets_url(); ?>blog_uploads/<?php echo $record->blog_image; ?>" alt=""></a>
                                    <div class="post-cat">
                                        <!-- <div class="posted-in"><a href="#">Caucasus Heritage</a></div> -->
                                    </div>
                                </div>
                                <div class="inner-post">
                                    <div class="entry-header">
                                        <div class="entry-meta">
                                            <span class="posted-on">_ <a href="#"><?php echo date("M d, Y", strtotime($record->created_dtm)) ?></a></span>
                                            <!--<span class="byline">_ <a class="url fn n" href="#"> jina wood</a></span>
                                            <span class="comment-num">_ <a href="#"> 2 Comments</a></span>-->
                                        </div>
                                        <h4 class="entry-title"><a class="title-link" href="<?php echo base_url(); ?>blogdetails/<?php echo $record->blog_id ?>"><?php echo $record->blog_title ?></a></h4>
                                    </div>
                                    <div class="entry-summary the-excerpt">
                                        <p><?php echo $record->short ?></p>
                                    </div>
                                    <div class="entry-footer"><a href="<?php echo base_url(); ?>blogdetails/<?php echo $record->blog_id ?>" class="btn-details"> READ MORE</a></div>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
                      
                        
                   
                  
                   
                        <!--<ul class="page-pagination none-style">
                            <li><a class="prev page-numbers" href="#"><i class="ot-flaticon-left-arrow"></i></a></li>
                            <li><a class="page-numbers" href="#">1</a></li>
                            <li><span aria-current="page" class="page-numbers current">2</span></li>
                            <li><a class="page-numbers" href="#">3</a></li>
                            <li><a class="next page-numbers" href="#"><i class="ot-flaticon-right-arrow"></i></a></li>
                        </ul>-->
                    </div>
                    <div class="widget-area primary-sidebar col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        
                        <!--<aside id="search-2" class="widget widget_search">
                            <form role="search" method="get" id="search-form" class="search-form">
                                <input type="search" class="search-field" placeholder="Search…" value="" name="s">
                                <button type="submit" class="search-submit"><i class="ot-flaticon-search"></i></button>
                            </form>
                        </aside>-->
                        <aside class="widget widget_categories">
                            <h6 class="widget-title">Categories</h6>
                            <?php foreach($category as $record) { ?>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>blog_category/<?php echo $record->category_id ?>"><?php echo $record->category_name ?></a> </li>
                                <!-- <li><a href="#">Development</a> <span class="count">(5)</span></li>
                                <li><a href="#">Caucasus Heritage</a> <span class="count">(1)</span></li>
                                <li><a href="#">Technology</a> <span class="count">(3)</span></li> -->
                            </ul>
                            <?php } ?>
                        </aside>
                        <aside class="widget widget_recent_blog">
                            <h6 class="widget-title">Recent Posts</h6>
                            <?php foreach($blog as $rec) { ?>
                            <ul class="recent-blog clearfix">
                                <li class="clearfix"> 
                                    <div class="entry-header">
                                        <h6><a href="<?php echo base_url(); ?>blogdetails/<?php echo $rec->blog_id ?>"><?php echo $rec->blog_title ?></a></h6>
                                        <span class="post-on"><span class="entry-date"><?php echo date("M d, Y", strtotime($rec->created_dtm)) ?></span></span>
                                    </div>
                                </li>
                      
                                <!-- <li class="clearfix"> 
                                    
                                    <div class="entry-header">
                                        <h6><a href="post.html">You have a Great  Business Idea?</a></h6>
                                        <span class="post-on"><span class="entry-date">November 21, 2019</span></span>
                                    </div>
                                </li>
                      
                                <li class="clearfix"> 
                                    
                                    <div class="entry-header">
                                        <h6><a href="post.html">Building Data Analytics  Software</a></h6>
                                        <span class="post-on"><span class="entry-date">September 24, 2019</span></span>
                                    </div>
                                </li> -->
                            </ul>
                            <?php } ?>
                        </aside>
                        
                    </div>
                </div>
            </div>
        </div>
<?php $this->load->view('fincludes/footer'); ?>