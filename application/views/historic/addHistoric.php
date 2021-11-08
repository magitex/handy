<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-globe"></i> Historic Research
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
                    <form role="form" id="addCon" enctype='multipart/form-data' action="<?php echo base_url() ?>addhistoricConfig" method="post">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="historic_title">Historic Research Title*</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('historic_title'); ?>" id="historic_title" name="historic_title" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="historic_image">Historic Research Image*</label>
                                        <input type="file" class="form-control required" id="historic_image" value="<?php echo set_value('historic_image'); ?>" name="historic_image">
                                    </div>  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="historic_description">Historic Research Description*</label>
                                        <textarea class="form-control required" id="historic_description" value="<?php echo set_value('historic_description'); ?>" name="historic_description"  placeholder="Write your text here" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" id="area">
                                        <label for="short">Short Description*</label>
                                        <textarea class="form-control required" id="short" value="<?php echo set_value('short'); ?>" name="short" maxlength="1000" placeholder="Write your text here" rows="5"></textarea>
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
    selector: '#historic_description',  
    width: 700,
	height:600,
    plugins: 'autolink lists media table link'  
    }); 
</script>
<!--<script>
    $(document).ready(function() {  
        $('#historic_description').click(function() {  
        $("#area").html("");  
        var content = tinymce.get("txtarea").getContent();  
        $("#area").html(content);  
        });  
    });  
</script>--> 