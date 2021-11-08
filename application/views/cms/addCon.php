<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Our Mission
        <small>Add / Edit / Delete</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->            
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addCon" enctype='multipart/form-data' action="<?php echo base_url() ?>addConfig" method="post">
                        <div class="box-body">
							<div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="month">Parent Page</label>
                                        <select type="text" class="form-control required valid" id="ppage" name="ppage" aria-required="true" aria-invalid="false">
                                            <option>Select Page</option>
											<?php foreach($ppages as $record){ ?>
                                            <option value="<?php echo $record->id; ?>"><?php echo $record->page_name; ?></option>  
											<?php } ?>                                                                                      
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="page_name">Page Name*</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('page_name'); ?>" id="page_name" name="page_name" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Title*</label>
                                        <input type="text" class="form-control required" id="title" value="<?php echo set_value('title'); ?>" name="title" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="multi_file">Upload Image*</label>
                                        <input type="file" class="form-control required multi_file" id="multi_file" value="<?php echo set_value('multi_file'); ?>" name="multi_file">
                                    </div>  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" id="area">
                                        <label for="description">Description*</label>
                                        <textarea class="form-control required" id="description" value="<?php echo set_value('description'); ?>" name="description"  placeholder="Write your text here"></textarea>
                                        <!-- <div id="divkarea"></div> -->
                                    </div>
                                </div> 
                            </div>
			    <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="meta_title">Meta Title*</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('meta_title'); ?>" id="meta_title" name="meta_title" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="meta_description">Meta Description*</label>
                                        <textarea class="form-control required" id="meta_description" value="<?php echo set_value('meta_description'); ?>" name="meta_description" maxlength="1000" placeholder="Write your text here"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="meta_tag">Meta Tag*</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('meta_tag'); ?>" id="meta_tag" name="meta_tag" maxlength="128">
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
<script src="<?php echo base_url(); ?>assets/js/add.js" type="text/javascript"></script>
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
    selector: '#description',  
    width: 700,
	height:600,
    plugins: 'autolink lists media table link'
    // toolbar: 'bbcode autolink lists media table link',
    // toolbar_mode: 'floating',
    // tinycomments_mode: 'embedded',
    // tinycomments_author: 'Author name'
    }); 
</script>
<script>
    // $(document).ready(function() {  
    //     $('#description').click(function() {  
    //     $("#area").html("");  
    //     var content = tinymce.get("txtarea").getContent();  
    //     $("#area").html(content);  
    //     });  
    // });  
</script> 