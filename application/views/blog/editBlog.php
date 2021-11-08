<?php
$blog_id = $userInfo1->blog_id;
$meta_title = $userInfo1->meta_title;
$meta_description = $userInfo1->meta_description;
$meta_tag = $userInfo1->meta_tag;
$page_name = $userInfo1->page_name;
$blog_title = $userInfo1->blog_title;
$blog_image = $userInfo1->blog_image;
$blog_description = $userInfo1->blog_description;
$short = $userInfo1->short;
$blog_category = $userInfo1->category_id;
$created_dtm = $userInfo1->created_dtm;
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-dollar"></i> Blog
        <small>Edit</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" enctype='multipart/form-data' action="<?php echo base_url() ?>editBlogConfig" method="post" id="editCon" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="page_name">Category Page</label>
                                        <!-- <select type="text" class="form-control required" id="page_name" name="page_name" aria-required="true" aria-invalid="false"> -->
                                        <select type="text" class="form-control required" id="page_name" name="page_name">
                                            <?php foreach($category as $record){ ?>
                                            <option value="<?php echo $record->category_id; ?>" <?php if($blog_category==$record->category_id){ ?> selected="selected" <?php } ?>><?php echo $record->category_name; ?></option>  
                                            <?php } ?>                                                                                      
                                        </select>
                                        <input type="hidden" value="<?php echo $blog_id; ?>" name="blog_id" id="blog_id" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="created_dtm">Blog Date*</label>
                                        <input type="date" class="form-control" id="created_dtm" name="created_dtm" value="<?php echo $created_dtm; ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="blog_title">Blog Title*</label>
                                        <input type="text" class="form-control" id="blog_title" name="blog_title" value="<?php echo $blog_title; ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="blog_image">Blog Image*</label>
                                        <input type="file" class="form-control" id="blog_image" value="<?php echo base_url('blog_uploads/'.$blog_image); ?>" name="blog_image">
                                        <img src="<?php echo base_url('blog_uploads/'.$blog_image); ?>" width="90" height="100">
                                    </div>  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" id="area">
                                        <label for="blog_description">Blog Description*</label>
                                        <textarea class="form-control" id="blog_description" name="blog_description"><?php echo $blog_description; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" id="area">
                                        <label for="short">Short Description*</label>
                                        <textarea class="form-control" id="short" name="short"><?php echo $short; ?></textarea>
                                    </div>
                                </div>
                            </div>
			                 <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="meta_title">Meta Title*</label>
                                        <input type="text" class="form-control required" value="<?php echo $meta_title; ?>" id="meta_title" name="meta_title" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="meta_description">Meta Description*</label>
                                        <textarea class="form-control required" id="meta_description" name="meta_description" maxlength="1000" placeholder="Write your text here"><?php echo $meta_description; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="meta_tag">Meta Tag*</label>
                                        <input type="text" class="form-control required" value="<?php echo $meta_tag; ?>" id="meta_tag" name="meta_tag" maxlength="128">
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <button type="button" class="btn btn-primary" value="Back" onclick="goBack()">Back</button>
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
</div>

<!-- <script src="<?php echo base_url(); ?>assets/js/editCon.js" type="text/javascript"></script> -->
<script type="text/javascript">
    function goBack()
    {
        window.history.back();

    }
</script>
<script src = "https://code.jquery.com/jquery-3.3.1.min.js"></script>   
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type = "text/javascript">  
     tinymce.init({  
     selector: '#blog_description',  
     width: 700,
     height:800,
    plugins: 'autolink lists media table link'
     }); 
     $(document).ready(function() {  
         $('#description').click(function() {  
         $("#area").html("");  
         var content = tinymce.get("txtarea").getContent();  
         $("#area").html(content);  
         });  
     });  
</script> 