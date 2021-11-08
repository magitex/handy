<?php
$report_id = $userInfo1->report_id;
$meta_title = $userInfo1->meta_title;
$meta_description = $userInfo1->meta_description;
$meta_tag = $userInfo1->meta_tag;
$report_title = $userInfo1->report_title;
$report_file = $userInfo1->report_file;
$report_description = $userInfo1->report_description;
$month = $userInfo1->month;
$year = $userInfo1->year;
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-dollar"></i> Reports
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
                    
                    <form role="form" enctype='multipart/form-data' action="<?php echo base_url() ?>editReportConfig" method="post" id="editCon" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="report_title">Report Title*</label>
                                        <input type="text" class="form-control" id="report_title" name="report_title" value="<?php echo $report_title; ?>" maxlength="128">
					                    <input type="hidden" value="<?php echo $report_id; ?>" name="report_id" id="report_id" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" id="area">
                                        <label for="report_description">Report Description*</label>
                                        <textarea class="form-control" id="report_description" name="report_description" maxlength="128"><?php echo $report_description; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="report_file">Report File*</label>
                                        <textarea class="form-control" id="report_file" name="report_file"><?php echo $report_file; ?></textarea>
                                        <!-- <input type="file" class="form-control" id="report_file" value="<?php echo base_url('report_uploads/'. $report_file); ?>" name="report_file"> -->
                                        <!-- <img src="<?php //echo base_url('report_uploads/'. $report_file); ?>" width="90" height="100"> -->
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
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" id="area">
                                        <label for="short">Short Description*</label>
                                        <textarea class="form-control" id="short" name="short" maxlength="128"><?php echo $short; ?></textarea>
                                    </div>
                                </div>
                            </div> -->
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

<script src="<?php echo base_url(); ?>assets/js/editCon.js" type="text/javascript"></script>
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
    selector: '#report_description',  
    width: 700,
    height:800,
    plugins: 'autolink lists media table link'  
    }); 
</script>
<script>
    $(document).ready(function() {  
        $('#report_description').click(function() {  
        $("#area").html("");  
        var content = tinymce.get("txtarea").getContent();  
        $("#area").html(content);  
        });  
    });  
</script> 